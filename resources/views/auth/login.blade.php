@extends('layouts.main')

@section('content')
<!-- Sing in  Form -->
<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/bonapasogit.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">Selamat Datang di Aplikasi Ujian Online</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login </h2>
                        <form method="POST" class="register-form" id="login-form" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input id="email" type="email" placeholder="Email or Name" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div> -->
                            <div class="form-group">
                                
                                <label for="remember-me" class="label-agree-term">Belum Punya akun? Registrasi <a href="{{ route('register') }}">Disini</a></label>
                            </div>
                            <div class="form-group ">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                                
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Social Media</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-linkedin"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-instagram"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
