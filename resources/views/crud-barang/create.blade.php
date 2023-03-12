@extends('layout.sidebar')
@section('Konten')
    <body class="bg-light">
        <main class="container">
            <div class="my-3 p-3 bg-warning bg-gradient bg-opacity-76 rounded shadow-sm">
                <div class="my-3 p-3 bg-body rounded shadow-sm">
                    <div class="row mb-3 mt-2 fw-semibold">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item fs-4 "><a class="text-decoration-none" href="{{ route('barang.index') }}">Data lelang</a></li>
                          <li class="breadcrumb-item active text-dark fs-4" aria-current="page">Tambah Data lelang</li>
                        </ol>
                    </div>
                    <form action="{{ route('barang.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama barang</label>
                            <input type="text" class="form-control  @error('nama') is-invalid @enderror" id="name" name="nama" placeholder="nama mobil antik.."autofocus required value="{{ old('name') }}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Harga awal</label>
                            <input type="number" class="form-control  @error('harga_awal') is-invalid @enderror" id="harga" name="harga_awal" placeholder="Rp.0" required value="{{ old('harga_awal') }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tanggal mulai lelang</label>
                            <input type="date" class="form-control  @error('tgl_input') is-invalid @enderror" id="harga" name="tgl_input" placeholder="Tanggal lelang" required value="{{ old('tgl_input') }}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Status lelang</label>
                        <select class="form-select @error('status_lelang') is-invalid @enderror" aria-label="Default select example" id="status_lelang" name="status_lelang" required>
                            <option selected>--pilih status lelang--</option>
                                <option value="closed">Closed</option>
                                <option value="open">Open</option>
                                <option value="done">Done</option>
                        </select>
                        @error('status_lelang')
                        <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                        <select class="form-select @error('id_kategori') is-invalid @enderror" aria-label="Default select example" id="kategori" name="id_kategori" required value="{{ old('id_kategori') }}">
                            <option selected>--Pilih kategori tahun--</option>
                            @foreach ($kategori as $k)
                                <option value={{ $k->id_kategori }}>{{ $k->kategori_tahun }}</option>
                            @endforeach
                        </select>
                        @error('id_kategori')
                        <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                            <textarea class="form-control  @error('deskripsi') is-invalid @enderror" id="exampleFormControlTextarea1" rows="2" name="deskripsi" required value="{{ old('deskripsi') }}"></textarea>
                            @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <label for="formFile" class="form-label">Foto barang</label>
                                    <img class="img-preview img-fluid">
                                    <div class="col-md-5"><input class="form-control  @error('foto') is-invalid @enderror" type="file" id="foto" name="foto"  onchange="previewImage()" required accept="image/png, image/gif, image/jpeg" />
                                        @error('foto')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                          @enderror
                                 </div>
                                <div class="col-md-7 d-grid gap-2 mx-auto "><button type="submit" class="btn btn-warning">Tambah</button>
                                </div>
                            </div>
                        </div>

                    </form>

                    <script>
                    
                    function previewImage(){
                        const foto = document.querySelector('#foto');
                        const imgPreview = document.querySelector('#img-preview');

                        imgPreview.style.display = 'block';

                        const oFReader = new fileReader();
                        oFReader.readAsDataURL(foto.files[0]);

                        oFReader.onload = function(oFREvent){
                            imgPreview.src = oFREvent.target.result;
                        }
                    }

                    </script>
                </div>
            </div>
        </main>
    </body>
@endsection