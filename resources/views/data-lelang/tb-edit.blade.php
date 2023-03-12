<body class="bg-light">
    <main class="container">
        <div class="my-3 p-3 bg-warning bg-gradient bg-opacity-76 rounded shadow-sm">
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="row mb-3 mt-2 fw-semibold">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item fs-4 "><a class="text-decoration-none" href="{{ route('data-lelang.index') }}">Bidder Information</a></li>
                      <li class="breadcrumb-item active text-dark fs-4" aria-current="page">Edit bidder data</li>
                    </ol>
                </div>
                
                <form action="{{ route('data-lelang.update', $lelang->id_lelang) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Id lelang</label>
                        <input type="text" class="form-control" id="nama" name="id_lelang"value="{{$lelang->id_lelang }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Auction item</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama mobil antik.." value="{{ $lelang->barang->nama }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Bidder</label>
                        <input type="text" class="form-control" id="nama" name="name" placeholder="nama mobil antik.." value="{{ $lelang->user->name}}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Status</label>
                    <select class="form-select" aria-label="Default select example" id="status_lelang" name="status">
                        <option selected value="{{ $lelang->status }}"></option>
                            <option value="participant"  {{$lelang->status == 'participant' ? 'selected' : ''}}> Participant </option>
                            <option value="winner"  {{$lelang->status == 'winner' ? 'selected' : ''}}> Winner </option>
                    </select>
                    </div>
                        <div class="col-md-7 d-grid gap-2 mx-auto "><button type="submit" class="btn btn-warning">Save</button>
                        </div>
                        
                    </form>
                    
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
            </div>
        </div>
    </main>
</body>