<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lelang | login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-5  ">
        <div class="row justify-content-evenly shadow-lg mb-5 ms-auto bg-body rounded-4">
            <div class="col-4 m-auto p-auto">

              @if(session()->has('sukses'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('sukses')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div> 
              @endif

              @if(session()->has('LoginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('LoginError')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div> 
              @endif
              
                <h2>Log in</h2><br>
                <form action="{{ route('Authlogin') }} " method="post">
                  @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" autofocus required value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <button type="submit" class="btn btn-warning d-grid gap-2 col-12 mx-auto ">Log in</button>
                </form>
                <br>
                <h5 >Don't have an account?   <a href="{{ route('reg-pembeli') }} ">Bidder register</a><small>   | </small><a href="{{ route('reg-penjual') }}">Seller Register</a></h5>
            </div>
            <div class="col-6"><img src="ilustrasi-login.jpg" class="img-fluid ms-3 rounded-end-4" alt="" srcset="" width=105%></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>