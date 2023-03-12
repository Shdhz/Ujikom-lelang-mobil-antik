@extends('layout.sidebar')
@section('Konten')
@include('data-lelang.tb-penawar')
@endsection

{{-- <div class="table-responsive">
              <table class="table table-md table-striped-row align-middle">
                  <thead>
                      <tr align="middle">
                          <th scope="col-md-1">No</th>
                          <th scope="col-md-2">Auction item</th>
                          <th scope="col-md-2">Starting price</th>
                          <th scope="col-md-2">Final price</th>
                          <th scope="col-md-2">End date</th>
                          <th scope="col-md-2">description</th>
                          <th scope="col-sm-2">Picture</th>
                          <th scope="col-md-2">winner</th>
                          <th scope="col-md-1">Status</th>
                          <th scope="col-md-3">Action</th>
                      </tr>
                  </thead> --}}
                  {{-- <tbody>
                      @foreach ( $dataBarang as $d )
                      <tr>
                          <td align="middle">{{ $loop->iteration }}</td>
                          <td align="middle">{{ $d->nama }}</td>
                          <td align="middle">{{ $d->harga_awal}}</td>
                          <td align="middle">{{ $d->kategori->kategori_tahun}}</td>
                          <td >{{ $d->deskripsi }}</td>
                          <td align="middle"><img src="{{ asset('fotoBarang/'. $d->foto) }}" class="rounded-2 img-fluid mt-2 " alt="" style="max-width: 70px"></td>
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
                  </tbody> --}}