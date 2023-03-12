@extends('layout.navbar')
    @section('Konten-lelang-tamu')
    <!-- Page Content -->
  <div class="container mt-5">
  
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
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Place bid.." aria-label="Recipient's username" aria-describedby="button-addon2" disabled>
            <button class="btn btn-outline-warning rounded-1" type="button" id="button-addon2">Confirm Bid</button>
            <p class="text-danger mt-2">*You must log in first to continue bidding</p>
          </div>
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
    @endsection
