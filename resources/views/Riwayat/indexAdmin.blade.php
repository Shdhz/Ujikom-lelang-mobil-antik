@extends('layout.sidebarAdmin')
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