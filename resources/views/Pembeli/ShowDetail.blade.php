@extends('layout.navbarPembeli')
    @section('konten-lelang-user')
<!-- Page Content -->
<div class="container mt-5 p-4 bg-body zbg-gradient bg-opacity-76 rounded-4 shadow-sm">

  @if(session()->has('msg'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('msg')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> 
  @endif

    <!-- Portfolio Item Row -->
    <div class="row">
  
      <div class="col-md-8">
        <img class="img-fluid" width="190%" src="{{ asset('fotoBarang/'. $barang->foto) }}" alt="">
      </div>
  
      <div class="col-md-4">
        <h3 class="my-2">{{ $barang->nama }}</h3>
        <button class="btn btn-outline-success px-3 my-2">{{ $barang->kategori->kategori_tahun }}</button> 
        <hr style="border: 1px solid black">
        <h6 class="my-2">Starting price : IDR.{{ number_format($barang->harga_awal) }}</h6>
        <p class="my-2">Description:</p>
        <p class="mt-1">{{ $barang->deskripsi }}</p>
        <p class="my-2">Ends in : {{ $barang->tgl_input }}</p>
        <hr style="border: 1px solid black">
        <h6 class="mb-3">Place Bid</h6>

        {{-- Kondisi lelang closed --}}
        @if ($barang->status_lelang == 'closed')
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Place bid.." aria-label="Recipient's username" aria-describedby="button-addon2" disabled>
          <button class="btn btn-outline-secondary" type="button" id="button-addon2">Confirm Bid</button>
        </div>
        <p class="text-danger mt-2">*Auction has not open yet!</p>
       
        {{-- kondisi lelang open --}}
        @elseif($barang->status_lelang == 'open')

        <form action="{{ route('beranda-pembeli.store') }}" method="post">
            @csrf
            <input type="hidden" name="id_barang" value="{{ $barang->id_barang }}">

            <div class="input-group mb-3">
                <input type="text" name="harga_penawar" id="harga_penawar" class="form-control" placeholder="Place bid.." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary rounded-1" type="submit">Confirm Bid</button>
            </div>
        </form>

        {{-- kondisi lelang selesai --}}
        @elseif($barang->status_lelang == 'done')
          <p class="text-danger mt-2 h3">*Auction has ended!</p>
        @endif
      </div>
  
    </div>
    <!-- /.row -->
  
    <!-- Related Projects Row -->
    <h3 class="my-4">Bidder Information</h3>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Bidder name</th>
            <th scope="col">Bidding price</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        {{-- dummy content --}}
        <tbody>
          @foreach ($lelang as $i)
          <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $i->user->name }}</td>
            <td>IDR.{{ number_format($i->harga_penawar) }}</td>
            <td>{{ $i->status }}</td>
          </tr>        
          @endforeach
        </tbody>
      </table>
    <!-- /.row -->
  </div>
  <!-- /.container -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  @endsection