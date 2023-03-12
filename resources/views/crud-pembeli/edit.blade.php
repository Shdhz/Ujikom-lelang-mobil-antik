@extends('layout.sidebarAdmin')
@section('Konten')
<body class="bg-light">
    <main class="container-fluid">
        <div class="my-3 p-3 bg-warning bg-gradient bg-opacity-76 rounded shadow-sm">
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="row mb-3 mt-2 fw-semibold">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item fs-4 "><a class="text-decoration-none" href="{{ route('bidder-data.index') }}">Bidder Data</a></li>
                      <li class="breadcrumb-item active text-dark fs-4" aria-current="page">Edit bidder data</li>
                    </ol>
                </div>

                {{-- form start --}}

                <form action="{{ route('bidder-data.update', $Data->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Bidder Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Seller name..." value="{{ $Data->name }}">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="username" value="{{ $Data->username }}">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="password">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{ $Data->email }}">
                    </div>
                    <div class="mb-2">
                        <input type="hidden" name="role" value="pembeli">
                    </div>
                    <div class="mb-2">
                        <div class="col-md-7 d-grid gap-2 mx-auto "><button type="submit" class="btn btn-warning">Simpan</button>
                        </div>
                    </div>
                </form>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
            </div>
        </div>
    </main>
</body>
    
@endsection
