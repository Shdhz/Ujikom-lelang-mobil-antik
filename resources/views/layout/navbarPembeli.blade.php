<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>lelangku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
  </head>
  <body>
    {{-- <!-- nav -->
    <nav class="navbar navbar-expand-lg shadow py-1 bg-tertiary rounded">
      <div class="container">
          <a href="#" class="navbar-brand">Lelang</a>
          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
              <div class="navbar-nav justify-content-start  ">
                  <a href="{{ route('beranda-user') }}" class="nav-item nav-link active">Home</a>
                  <a href="{{ route('informasi') }}" class="nav-item nav-link">Auction info</a>
              </div>
              <form class="d-flex">
                  <div class="input-group">                    
                      <input type="text" class="form-control" placeholder="Search">
                      <button type="button" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg></i></button>
                  </div>
              </form>
              @auth
                <div class="navbar-nav">
                  <a href="{{ route('tawaran-saya') }}" class="nav-item nav-link">My bid</a>
                </div>
                <div class="navbar-nav">
                  <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-warning btn-sm">Logout</button>
                  </form>
                </div>
                <div class="navbar-nav">
                  <li class="nav-item m-auto">{{ auth()->user()->username }}</li>
                </div>
                <div class="navbar-nav">
                  <li class="nav-item m-auto"><img src="person-circle.svg" alt="" srcset="" width="25px"></li>
                </div>
                @else
                <div class="navbar-nav ms-auto">
                  <a href="{{ route('login') }}" class="nav-item nav-link"><button type="submit" class="btn btn-warning btn-md">Login</button></a>
              </div>
              @endauth
          </div>
      </div>
  </nav> --}}

{{-- contoh --}}
    @auth
    <nav class="navbar navbar-expand-lg shadow pt-2 mb-3 bg-tertiary rounded">
    <div class="container">
      <a class="navbar-brand" href="{{ route('beranda-pembeli.index') }}">Lelang</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
      <form class="d-flex" role="search" action="{{ route('beranda-pembeli.index') }}">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('tawaran-saya') }}">My bid</a>
          </li>
        </ul>
          <div class="row ms-auto">
            <div class="col-sm-5">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item m-auto">
                <form action="{{ route('logout') }}" method="post">
                  @csrf
                  <button type="submit" class="btn btn-warning btn-sm">Logout</button>
                </form>
            </li>
            </ul>
          </div>
          <div class="col-sm-3 mt-1">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item m-auto">{{ auth()->user()->username }}</li>
            </ul>
          </div>
          <div class="col-sm-2 mt-1">
            <ul class="navbar-nav">
              <li class="nav-item m-auto"><img src="person-circle.svg" alt="" srcset="" width="25px"></li>
            </ul>
          </div>
          </div>
          @endauth
      </div>
    </div>
  </nav>
  @yield('konten-lelang-user')
 
  </body>
</html>