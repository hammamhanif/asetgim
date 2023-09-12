@extends('Tamplate.auth.layout')

@section('login')
    <section class="tf-page-title style-2">
        <div class="tf-container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumbs">
                        <li><a href="blog2.html">Home</a></li>
                        <li>Sign Up</li>
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
                        <h4 class="heading">Sign Up To GANA</h4>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-9 col-md-12">
                    <form action="#" id="contactform">
                        @csrf
                        <fieldset><input id="email" name="email" tabindex="1" aria-required="true" required=""
                                type="text" placeholder="Email"></fieldset>
                        <fieldset><input id="name" name="name" tabindex="1" aria-required="true" required=""
                                type="text" placeholder="Username"></fieldset>
                        <fieldset> <input id="showpassword" name="password" tabindex="2" aria-required="true"
                                type="password" placeholder="Password" required="">
                            <span class="btn-show-pass"><i class="far fa-eye-slash"></i></span>
                        </fieldset>
                        <fieldset class="mb24"> <input id="showpassword2" name="password" tabindex="2"
                                aria-required="true" type="password" placeholder="Confirm password" required="">
                            <span class="btn-show-pass2"><i class="far fa-eye-slash"></i></span>
                        </fieldset>
                        <div class="forgot-pass-wrap">
                            <label>I agree to the terms and services
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label>
                        </div>
                        <div class="title-login">Or login with social</div>
                        <div class="button-gg mb33"><a href="#"><i class="fab fa-google"></i>Google</a>
                        </div>
                        <button class="submit" type="submit">Signup</button>
                    </form>


                </div>
            </div>
        </div>
    </section>
@endsection
