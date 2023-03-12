@extends('layout.sidebar')
@section('Konten')
<style>
    h4{
      color: #0f0f0f;
      font-family: 'Poppins', sans-serif;
    }
  </style>



<body class="bg-light">
  <main class="container">
      <!-- START DATA -->
      <div class="my-2 p-3 bg-warning bg-gradient bg-opacity-76 rounded-4 shadow-sm">
                        <!-- btn pemberitahuan menang lelang-->
                        <div class=" my-2">
                          <div class="row">
                              <div class="col"><h4>Auction History</h4></div>
                              <div class="col-md-auto"><a href='{{ route('print.index') }}' target="blank" onclick="Tombol()" class="btn btn-primary rounded-3 "><i class="fas fa-fw fa-print"></i>
                                <span>Print History</span>
                            </a>
                        </div>
                          </div>
                      </div>
          
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
              
              <div class="card shadow mt-3">
                <div class="card-body">
                    <div class="table-responsive ">
                        <table class="table table-striped-row overflow-x-auto " id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Auction id</th>
                                    <th>Auction item</th>
                                    <th>Winner</th>
                                    <th>Starting Price</th>
                                    <th>Final Price</th>
                                    <th>Auction Start date</th>
                                    <th>Auction End date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($lelang as $i)
                              <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $i->id_lelang }}</td>
                                    <td>{{ $i->barang->nama }}</td>
                                    <td>{{ $i->user->name  }}</td>
                                    <td>{{ $i->barang->harga_awal  }}</td>
                                    <td>{{ $i->harga_penawar  }}</td>
                                    <td>{{ $i->created_at  }}</td>
                                    <td>{{ $i->updated_at  }}</td>
                                    <td>
                                      <a href='{{ route('data-lelang.edit', $i->id_lelang) }}' class="btn btn-warning mt-2" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 15 18">
                                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg></a>
    
                                    <form onsubmit="return confirm('Are you sure you want to delete this bid data?')" class="d-inline" action="{{ route('data-lelang.destroy', $i->id_lelang) }}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-danger mt-2 " style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 15 18">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                      </svg>
                                    </button>
                                  </form>
                                </td>
                                </tr>      
                              @endforeach
                            </tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
              </table>
            </div>
          </div>
        </div>
        <!-- AKHIR DATA -->
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>

</body>
@endsection