@extends('layout.sidebarAdmin')
@section('Konten')
<body class="bg-light">
    <main class="container-fluid">
        <div class="m-2 p-3 bg-warning bg-gradient bg-opacity-76 rounded shadow-sm">
            <div class="m-2 p-3 bg-body rounded shadow-sm">
                <div class="row mb-3 mt-2 fw-semibold">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item fs-4 "><a class="text-decoration-none" href="{{ route('Seller-data.index') }}">Seller Data</a></li>
                      <li class="breadcrumb-item active text-dark fs-4" aria-current="page">Add seller data</li>
                    </ol>
                </div>
                <form action="{{ route('Seller-data.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" placeholder="your name.."autofocus required>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control  @error('username') is-invalid @enderror" id="username" name="username" placeholder="username" required>
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" name="password" placeholder="password" required>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" placeholder="email" required>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">alamat</label>
                        <textarea class="form-control  @error('alamat') is-invalid @enderror" id="exampleFormControlTextarea1" rows="2" name="alamat" required></textarea>
                        @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="role" value="penjual">
                    </div>
                            <div class="col-md-7 d-grid gap-2 mx-auto "><button type="submit" class="btn btn-warning">Tambah</button>
                            </div>
                        </div>
                    </div>
                    </form>
             </div>
            </div>
        </div>
    </main>
</body>
@endsection