@extends('layout.sidebarAdmin')
@section('Konten')
<style>
    h4{
      color: #0f0f0f;
      font-family: 'Poppins', sans-serif;
    }
  </style>



<body class="bg-light">
  <main class="container-fluid">
      <!-- START DATA -->
      <div class="my-2 p-3 bg-warning bg-gradient bg-opacity-76 rounded-4 shadow-sm">
                        <!-- TOMBOL TAMBAH DATA -->
                        <div class=" my-2">
                          <div class="row">
                              <div class="col"><h4>Seller Data</h4></div>
                              <div class="col-md-auto"><a href='{{ route('Seller-data.create') }}' class="btn btn-primary rounded-3">Add Seller +</a></div>
                          </div>
                      </div>
          
              @if(session()->has('sukses'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('sukses')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div> 
              @endif

              @if(session()->has('edit'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('edit')}}
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
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Addres</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataPenjual as $dp)
                                <tr>
                                    <td class="col-1">{{ $loop->iteration}}</td>
                                    <td class="col-3">{{ $dp->name }}</td>
                                    <td class="col-2">{{ $dp->username }}</td>
                                    <td class="col-2">{{ $dp->email }}</td>
                                    <td class="col-2">{{ $dp->alamat }}</td>
                                    <td align="middle" class="col-3"><a href='{{ route('Seller-data.edit', $dp->id) }}' class="btn btn-warning mt-2" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 15 18">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                      </svg>
                                    </a>
                                      <form onsubmit="return confirm('Are you sure want to delete this seller?')" class="d-inline" action="{{ route('Seller-data.destroy', $dp->id) }}" method="post">
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
                        </table>
                    </div>
                </div>
              </table>
          </div>
          <div class="mt-4">
            {{ $dataPenjual->links() }}
          </div>
        </div>
      </div>
        <!-- AKHIR DATA -->
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
@endsection
