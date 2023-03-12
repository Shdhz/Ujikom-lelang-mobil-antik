@extends('layout.sidebar')
@section('Konten')
    <body class="bg-light">
        <main class="container">
            <div class="my-3 p-3 bg-warning bg-gradient bg-opacity-76 rounded shadow-sm">
                <div class="my-3 p-3 bg-body rounded shadow-sm">
                    <div class="row mb-3 mt-2 fw-semibold">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item fs-4 "><a class="text-decoration-none" href="{{ route('barang.index') }}">Data barang</a></li>
                          <li class="breadcrumb-item active text-dark fs-4" aria-current="page">Edit Data barang lelang</li>
                        </ol>
                    </div>
                    
                    <form action="{{ url('barang/'.$barang->id_barang) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama barang</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="nama mobil antik.." value="{{ $barang->nama }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Harga awal</label>
                            <input type="number" class="form-control" id="harga" name="harga_awal" placeholder="" value="{{ $barang->harga_awal }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tanggal input</label>
                            <input type="date" class="form-control" id="tgl_input" name="tgl_input" placeholder="" value="{{ $barang->tgl_input }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Status Lelang</label>
                        <select class="form-select" aria-label="Default select example" id="status_lelang" name="status_lelang">
                            <option selected value="{{ $barang->status_lelang }}"></option>
                                <option value="closed"  {{$barang->status_lelang == 'closed' ? 'selected' : ''}}> Closed </option>
                                <option value="open"  {{$barang->status_lelang == 'open' ? 'selected' : ''}}> Open </option>
                                <option value="done"  {{$barang->status_lelang == 'done' ? 'selected' : ''}}> Done </option>
                        </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Kategori tahun</label>
                        <select class="form-select" aria-label="Default select example" id="kategori" name="id_kategori">
                            <option selected value="{{ $barang->id_kategori }}">{{$barang->kategori->kategori_tahun}}</option>
                            @foreach ($kategori as $k)
                                <option value="{{ $k->id_kategori }}">{{ $k->kategori_tahun}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi">{{ $barang->deskripsi }}</textarea>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <label for="formFile" class="form-label">Foto barang</label>
                                <img src="{{ asset('fotoBarang/'. $barang->foto) }}" class="object-fit-contain border rounded mt-2" alt="" style="max-width: 70px">
                                    <div class="col-md-5"><input class="form-control" type="file" id="formFile" name="foto" onchange="loadPreview(this);">
                                 </div>
                                <div class="col-md-7 d-grid gap-2 mx-auto "><button type="submit" class="btn btn-warning">Simpan</button>
                                </div>
                            </div>
                        </div>

                    </form>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
                </div>
            </div>
        </main>
    </body>
@endsection