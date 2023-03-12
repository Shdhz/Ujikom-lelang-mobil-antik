@extends('layout.navbarPembeli')
@section('konten-lelang-user')
<style>
    .card {
width: 410px;
height: 68vh;
padding: 10px;
border: 6px solid #ffffff;
border-radius: 12px;
}

</style>
<div class="container">
    <img class="mt-4 shadow mb-2 tertiary rounded" src="{{ asset('banner-lelang.svg') }}" alt="" srcset="" width="1110">
    {{-- Ongoing auctions --}}
    <h4 class="mt-5 mb-1" style="font-family: 'Poppins', sans-serif;">My bid item</h4>
    {{-- card start --}}
        <div class="row">
            @foreach ($lelang as $b)
            <div class="col-sm-3">
                <div class="card bg-body my-4  shadow  mb-5 bg-body-tertiary rounded" style="width: 17rem;">
                    <img src="{{ asset('fotoBarang/'. $b->barang->foto ) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="row"><h5 class="col-sm-8" style="font-family: 'Poppins', sans-serif;">{{ $b->barang->nama }}</h5><p class="col-sm-auto ms-auto">
                            <button type="button" class="btn btn-warning"
                            style="--bs-btn-padding-y: .12rem; --bs-btn-padding-x: .7rem; --bs-btn-font-size: .75rem;">{{ $b->barang->kategori->kategori_tahun }}</button>
                        </p></div>
                        <h6 class="card-subtitle mb-3 mt-1 text-success">IDR.{{ number_format($b->barang->harga_awal) }}</h6>
                        <p class="card-text">{{ $b->barang->deskripsi }}</p>
                        <a href="{{ route('beranda-pembeli.show', $b->barang->id_barang) }}" class="btn btn-warning d-grid gap-2 col-12 mx-auto">Bid now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    {{-- card end --}}
    {{-- <h4 class="mt-5 mb-1" style="font-family: 'Poppins', sans-serif;">Ended Auctions</h4> --}}

</div>    
@endsection