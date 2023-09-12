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
                        <fieldset class="mb24"> <input id="showpassword2" name="password" tabindex="2"
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
