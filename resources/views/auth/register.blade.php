@extends('layouts.main')

@section('content')
 <!-- Sign up form -->
 <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Registrasi </h2>
                        <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text"  id="name" placeholder="Nama " class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email"  id="email" placeholder=" Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"/>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tanggalLahir"><i class="zmdi zmdi-calendar-check"></i></i></label>
                                <input type="date"  id="tanggalLahir" placeholder="Tanggal Lahir" class="form-control @error('tanggalLahir') is-invalid @enderror" name="tanggalLahir" value="{{ old('tanggalLahir') }}" required />
                                @error('tanggalLahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jenisKelamin"><i class="zmdi zmdi-male-female"></i></label>
                                
                                <input type="text"  id="jenisKelamin" placeholder="Jenis Kelamin" class="form-control @error('jenisKelamin') is-invalid @enderror" name="jenisKelamin" value="{{ old('jenisKelamin') }}" required />
                                @error('jenisKelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="agama"><i class="zmdi zmdi-pin-drop"></i></label>
                                
                                <input type="text"  id="agama" placeholder="Agama" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ old('agama') }}" required />
                                @error('agama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password"  id="pass" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"/>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password"  id="re_pass" placeholder="Repeat your password" class="form-control" name="password_confirmation" required autocomplete="new-password"/>

                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/wall_bona.png" alt="sing up image"></figure>
                        <a href="{{ route('login') }}" class="signup-image-link">Sudah punya akun ? </a>
                    </div>
                </div>
            </div>
        </section>
@endsection
