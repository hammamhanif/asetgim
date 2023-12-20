@extends('Tamplate.auth.layout')

@section('login')
    <section class="tf-page-title style-2">
        <div class="tf-container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumbs">
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li>Daftar</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <section class="tf-login">
        <div class="tf-container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="tf-heading style-2">
                        <h4 class="heading">Daftar Akun GANA</h4>
                    </div>
                    <div class="tf-heading style-2">
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
                <div class="col-xl-6 col-lg-9 col-md-12">
                    <form action="{{ route('register.post') }}" id="contactform" method="post">
                        @method('POST')
                        @csrf
                        <fieldset><input id="email" name="email" tabindex="1" aria-required="true" type="email"
                                placeholder="Email" required
                                class="@error('email') is-invalid
                                @enderror"></fieldset>
                        <fieldset><input id="name" name="name" tabindex="1" aria-required="true" required=""
                                type="text"
                                placeholder="Nama"class="@error('name') is-invalid
                                @enderror"
                                required>
                        </fieldset>
                        <fieldset><input id="username" name="username" tabindex="1" aria-required="true" required=""
                                type="text"
                                placeholder="Username"class="@error('username') is-invalid
                                @enderror"
                                required>
                        </fieldset>
                        <fieldset> <input id="showpassword" name="password" tabindex="2" aria-required="true"
                                type="password" placeholder="Password" required>
                            <span class="btn-show-pass"><i class="far fa-eye-slash"></i></span>
                        </fieldset>
                        <fieldset class="mb24"> <input id="showpassword" name="password_confirmation" tabindex="2"
                                aria-required="true" type="password" placeholder="Konfirmasi password" required>
                            <span class="btn-show-pass2"><i class="far fa-eye-slash"></i></span>
                        </fieldset>
                        <div class="forgot-pass-wrap">
                            <label>Saya menyetujui syarat dan layanan
                                <input type="checkbox" required>
                                <span class="btn-checkbox"></span>
                            </label>
                            <a class="forgot-pass" href="{{ route('login') }}">Sudah memiliki akun?</a>
                        </div>
                        <div class="title-login">login dengan media sosial?</div>
                        <div class="button-gg mb33"><a href="{{ route('user.login.google') }}"><i
                                    class="fab fa-google"></i>Google</a>
                        </div>
                        <button class="submit" type="submit">Daftar</button>
                    </form>


                </div>
            </div>
        </div>
    </section>
@endsection
