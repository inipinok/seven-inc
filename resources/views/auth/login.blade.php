<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.bootstrapdash.com/demo/unplug-ui-kit-pro/demo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 09:21:34 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="asset/assets/template3/src/css/unplug-ui-kit.css">
    <link rel="stylesheet" href="asset/assets/template3/demo/assets/css/unplug-ui-kit-demo.css">
    <link rel="stylesheet" href="asset/assets/template3/src/vendors/%40mdi/font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/png" href="asset/assets/img/logoo-removebg-preview.png">
</head>
<body>
    <main class="auth">
        <div class="container-fluid">
            <div class="row vh-100">
                <div class="col-md-6 text-center py-5 d-flex flex-column justify-content-center auth-bg-section text-white" style="background-image: url(asset/assets/img/kost37.webp)">
                    <h1 class="text-reset">Welcome to <br> Pina'Kost</h1>
                    <p class="font-weight-bold text-reset">Membantumu Mencari Tempat Kost Yang Terbaik!</p>
                </div>
                <div class="col-md-6 text-center d-flex flex-column py-5 justify-content-center">
                    <div class="auth-form-section">
                        <div class="logo"><img src="asset/assets/img/logoo-removebg-preview.png" class="img-fluid" alt="Pina'Kost" width="200"></div>
                        <h2>Masuk</h2>
                        <p>Free access to our dashboard</p>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group">

                            <label for="email" class="col-md-4 col-form-label text-md-end"></label>

                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email address">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>
                            
                            <div class="form-group">
                            
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <button type="submit" class="btn btn-success btn-block mb-3">{{ __('Login') }}</button>
                            <div class="d-md-flex justify-content-between">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="text-block text-center my-3">
                                <span class="text-small font-weight-semibold">Belum Punya Akun ?</span>
                                <a href="{{route('register')}}" class="text-info text-small">Daftar</a>
                            </div>

                        </form>
                        <p class="mb-0 d-flex">
                            <a href="#" class="btn btn-light btn-block mr-2">Sign in with google</a>
                            <a href="#" class="btn btn-facebook mr-2"> <i class="fa-brands fa-google"></i>
                            <a href="#" class="btn btn-twitter"><i class="mdi mdi-twitter"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
</body>

<!-- Mirrored from www.bootstrapdash.com/demo/unplug-ui-kit-pro/demo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 09:21:36 GMT -->
</html>