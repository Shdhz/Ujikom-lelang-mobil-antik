<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lelang | Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container-lg mt-5 p-auto  ">
        <div class="row justify-content-evenly shadow-lg mb-5 ms-auto bg-body rounded-4">
            <div class="col-md-5 m-auto">
                <h2>Seller registration</h2>
                <h5>Already have an account? <a href="{{ route('login') }}">Log in</a></h5><br>
                <form action="{{ route('penjual') }}" method="post">
                  @csrf
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" name="name" required autofocus>
                        <label for="name">Name</label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                      </div>
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username" required>
                        <label for="username">Username</label>
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                      </div>
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="address" placeholder="Address" name="alamat" required>
                        <label for="address">Address</label>
                        @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                      </div>
                    <div class="form-floating mb-2">
                      <input type="hidden" name="role" value="penjual">
                    </div>
                    <div class="form-floating mb-2">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" required>
                        <label for="email">Email</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                      </div>
                      <div class="form-floating mb-4">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" required>
                        <label for="floatingPassword">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                         @enderror
                      </div>
                <button type="submit" class="btn btn-warning d-grid gap-2 col-12 mx-auto ">Register</button>
                </form>
            </div>
            <div class="col-md-6"><img src="ilustrasi-login.jpg" class="img-fluid ms-3 rounded-end-4" alt="" srcset="" width=105%></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>