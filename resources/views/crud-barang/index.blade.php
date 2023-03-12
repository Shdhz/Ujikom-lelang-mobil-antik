@extends('layout.sidebar')
@section('Konten')
    <style>
      h4{
        color: #0f0f0f;
        font-family: 'Poppins', sans-serif;
      }
    </style>



  <body class="bg-light">
    <main class="container-fluid  overflow-x-auto">
        <!-- START DATA -->
        <div class="my-2 p-3 bg-warning bg-gradient bg-opacity-76 rounded-4 shadow-sm">
                          <!-- TOMBOL TAMBAH DATA -->
                          <div class=" my-2">
                            <div class="row">
                                <div class="col"><h4>Auction data</h4></div>
                                <div class="col-md-auto"><a href='{{ route('barang.create') }}' class="btn btn-primary rounded-3">Add auction +</a></div>
                            </div>
                        </div>
            <div class="my-3 p-2 bg-body rounded-3 shadow-sm">
                @if(session()->has('msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{session('msg')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
                @endif

                @if(session()->has('hps'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{session('hps')}} 
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
                @endif

                <div class="table-responsive">
                <table class="table table-sm table-striped-row align-middle">
                    <thead>
                        <tr align="middle">
                            <th scope="col-md-1">No</th>
                            <th scope="col-md-2">Auction item</th>
                            <th scope="col-md-2">Starting price</th>
                            <th scope="col-sm-2">Category</th>
                            <th scope="col-md-2">Description</th>
                            <th scope="col-md-1">Picture</th>
                            <th scope="col-md-2">Auction date</th>
                            <th scope="col-md-1">Auction Status</th>
                            <th scope="col-md-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $dataBarang as $d )
                        <tr>
                            <td align="middle">{{ $loop->iteration }}</td>
                            <td align="middle">{{ $d->nama }}</td>
                            <td align="middle">IDR.{{ $d->harga_awal}}</td>
                            <td align="middle">{{ $d->kategori->kategori_tahun}}</td>
                            <td >{{ $d->deskripsi }}</td>
                            {{-- belum beres --}}
                            <td align="middle"><img src="{{ asset('fotoBarang/'. $d->foto) }}" class="object-fit-contain border rounded mt-2" alt="" style="max-width: 70px">
                            </td>
                            <td align="middle">{{ $d->tgl_input }}</td>
                            <td align="middle">{{ $d->status_lelang }}</td>
                            <td align="middle">
                                <a href='{{ url('barang/'.$d->id_barang.'/edit') }}' class="btn btn-warning mt-2" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 15 18">
                                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg></a>

                                <form onsubmit="return confirm('Are you sure want to delete this auction item?')" class="d-inline" action="{{ url('barang/'.$d->id_barang) }}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger mt-2 " style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 15 18">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                  </svg></button>
                              </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>
          <!-- AKHIR DATA -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
@endsection