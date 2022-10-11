<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.bootstrapdash.com/demo/unplug-ui-kit-pro/demo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 09:21:34 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('asset/login/src/css/unplug-ui-kit.css')}}">
    <link rel="stylesheet" href="{{asset('asset/login/demo/assets/css/unplug-ui-kit-demo.css')}}">
    <link rel="stylesheet" href="{{asset('asset/login/src/vendors/%40mdi/font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/png" href="{{asset('asset/poto-kost/logoo-removebg-preview.png')}}">
</head>
<body>
    <main class="auth">
        <div class="container-fluid">
            <div class="row vh-100">
                <div class="col-md-6 text-center py-5 d-flex flex-column justify-content-center auth-bg-section text-white" style="background-image: url(asset/poto-kost/kost31.jpg)">
                    <h1 class="text-reset">Welcome to <br> Lorem'Kost</h1>
                    <p class="font-weight-bold text-reset">Membantumu Mencari Tempat Kost Yang Terbaik!</p>
                </div>
                <div class="col-md-6 text-center d-flex flex-column py-5 justify-content-center">
                    <div class="auth-form-section">
                        <div class="logo"><img src="{{asset('asset/poto-kost/logoo-removebg-preview.png')}}" class="img-fluid" alt="Pina'Kost" width="200"></div>
                        <h2>Daftar</h2>
                        <p>Free access to our dashboard</p>

                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group">

                            <label for="name" class="col-md-4 col-form-label text-md-end"></label>

                                    <input id="name" type="text" class="form-control rounded-top @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>

                            <div class="form-group">

                                    <input id="phone_number" type="text" class="form-control rounded-top @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus placeholder="phone number">

                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>

                            <div class="form-input">
                                <select class="form-select" id="inputGroupSelect01" name="role">
                                    <option selected>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;-- pilih --</option>
                                    <option value="customer">Customer</option>
                                    <option value="admin">Admin</option>
                                    <option value="pemilik_kost">Pemilik Kost</option>
                                </select>
                            </div><br>
                            
                            <div class="form-group">
                            
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="new-email" autofocus placeholder="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-group">
                            
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" autofocus placeholder="password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-group">
                            
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" autofocus placeholder="confirm password">
                        
                            </div>
                            <button type="submit" class="btn btn-success btn-block mb-3">Daftar</button>
                        
                            <div class="text-block text-center my-3">
                                <span class="text-small font-weight-semibold">Sudah Punya Akun ?</span>
                                <a href="{{route('login')}}" class="text-info text-small">Masuk</a>
                            </div>

                        </form>
                        <p class="mb-0 d-flex">
                            <a href="#" class="btn btn-light btn-block mr-2">Masuk Dengan Google</a>
                            <a href="#" class="btn btn-facebook mr-2"> <i class="fa-brands fa-google"></i>
                            <a href="#" class="btn btn-twitter"><i class="fa-brands fa-twitter"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
</body>

<!-- Mirrored from www.bootstrapdash.com/demo/unplug-ui-kit-pro/demo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 09:21:36 GMT -->
</html>