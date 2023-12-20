@extends('Tamplate.auth.layout')

@section('login')
    <section class="tf-page-title style-2 mt-5">
        <div class="tf-container">
            <div class="row">
                <div class="col-md-12">

                    <ul class="breadcrumbs">
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li>Login</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <section class="tf-login">
        <div class="tf-container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="tf-heading style-5">
                        <h4 class="heading">GANA | Game Asset Nusantara</h4>
                        <p class="sub-heading">Pastikan untuk memasukkan akun Anda dengan benar! </p>
                        @if (session()->has('status'))
                            <div class="alert alert-success" role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('status') }}</span>
                            </div>
                        @endif
                        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif
                        @if (session()->has('unsuccess'))
                            <div class="alert alert-danger" role="alert">
                                <strong class="font-bold">Unsuccess!</strong>
                                <span class="block sm:inline">{{ session('unsuccess') }}</span>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul class="list-disc pl-5">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ htmlentities($error) }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-12">
                    <form action="{{ route('login.post') }}" method="post" id="contactform">
                        @method('POST')
                        @csrf
                        <div class="title-login">login dengan akun</div>
                        <fieldset><input id="username" name="username" tabindex="1" aria-required="true" required=""
                                type="text" placeholder="Username"></fieldset>
                        <fieldset class="mb24"> <input id="showpassword" name="password" tabindex="2"
                                aria-required="true" type="password" placeholder="Password" required="">
                            <span class="btn-show-pass "><i class="far fa-eye-slash"></i></span>
                        </fieldset>

                        <div class="form-group">
                            <div class="captcha">

                                <span id="captcha-img">{!! captcha_img() !!}</span>
                                <button type="button" class="btn btn-primary reload" id="reload">&#x21bb;</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" id="captcha" name="captcha" required placeholder="Masukkan Captcha">
                        </div>

                        <div class="forgot-pass-wrap">
                            <label {{ __('Remember Me') }}>Ingat saya
                                <input type="checkbox" name="remember" value="1" id="remember">
                                <span class="btn-checkbox"></span>
                            </label>
                            <a class="forgot-pass" href="{{ route('forgot') }}">Lupa Password?</a>
                        </div>
                        <div class="title-login">Login dengan media sosial?</div>
                        <div class="button-gg"><a href="{{ route('register') }}"><i
                                    class="fab fa-odnoklassniki"></i></i>Buat akun</a>
                        </div>
                        <div class="button-gg mb31"><a href="{{ route('user.login.google') }}"><i
                                    class="fab fa-google"></i>Google</a>
                        </div>
                        <button class="submit" type="submit">Login</button>
                    </form>


                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Get the reload button and captcha image
                var reloadButton = document.getElementById('reload');
                var captchaImage = document.getElementById('captcha-img');

                // Attach a click event listener to the reload button
                reloadButton.addEventListener('click', function() {
                    // Generate a new captcha image URL by adding a timestamp parameter
                    var captchaImageUrl = "{{ route('captcha') }}?" + Date.now();

                    // Update the src attribute of the captcha image with the new URL
                    captchaImage.innerHTML = '<img src="' + captchaImageUrl + '" alt="Captcha Image">';
                });
            });
        </script>

    </section>
@endsection
