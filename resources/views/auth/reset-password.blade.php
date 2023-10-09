@extends('Tamplate.auth.layout')

@section('login')
    <section class="tf-login">
        <div class="tf-container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="tf-heading style-5">
                        <h4 class="heading">GANA | Game Asset Nusantara</h4>
                        <p class="sub-heading">The password must consist of at least 6 characters. Make sure to choose a
                            password that is easy to remember! </p>
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
                <div class="col-xl-6 col-lg-8 col-md-12">

                    <form action="{{ route('password.request') }}" method="post" id="contactform">
                        @csrf
                        <div class="title-login">login with account</div>
                        <input type="hidden" name="token" value="{{ $token }}">
                        <fieldset><input id="email" name="email" tabindex="1" aria-required="true" required=""
                                type="email" placeholder="Email"></fieldset>
                        <fieldset class="mb24"> <input id="showpassword" name="password" tabindex="2"
                                aria-required="true" type="password" placeholder="Password" required="">
                            <span class="btn-show-pass "><i class="far fa-eye-slash"></i></span>
                        </fieldset>
                        <fieldset class="mb24"> <input id="showpassword2" name="password_confirmation" tabindex="2"
                                aria-required="true" type="password" placeholder="Confirm password" required="">
                            <span class="btn-show-pass2"><i class="far fa-eye-slash"></i></span>
                        </fieldset>
                        <button class="submit" type="submit">Reset</button>
                    </form>


                </div>
            </div>
        </div>
    </section>
@endsection
