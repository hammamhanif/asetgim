@extends('Tamplate.auth.layout')

@section('login')
    <section class="tf-page-title style-2 mt-5">
        <div class="tf-container">
            <div class="row">
                <div class="col-md-12">

                    <ul class="breadcrumbs">
                        <li><a href="blog2.html">Home</a></li>
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
                        <p class="sub-heading">Make sure to enter your account correctly! </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-12">

                    <form action="#" id="contactform">
                        <div class="title-login">login with account</div>
                        <fieldset><input id="name" name="name" tabindex="1" aria-required="true" required=""
                                type="text" placeholder="User name"></fieldset>
                        <fieldset class="mb24"> <input id="showpassword" name="password" tabindex="2"
                                aria-required="true" type="password" placeholder="Password" required="">
                            <span class="btn-show-pass "><i class="far fa-eye-slash"></i></span>
                        </fieldset>
                        <div class="forgot-pass-wrap">
                            <label>Remember for 30 days
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label>
                            <a class="forgot-pass" href="/login">Fogot password?</a>
                        </div>
                        <div class="title-login">Or login with social</div>
                        <div class="button-gg"><a href="#"><i class="fab fa-odnoklassniki"></i></i>Create
                                Account</a>
                        </div>
                        <div class="button-gg mb31"><a href="#"><i class="fab fa-google"></i>Google</a>
                        </div>
                        <button class="submit" type="submit">Login</button>
                    </form>


                </div>
            </div>
        </div>
    </section>
@endsection
