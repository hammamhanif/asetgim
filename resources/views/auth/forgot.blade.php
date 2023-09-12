@extends('Tamplate.auth.layout')

@section('login')
    <section class="tf-login">
        <div class="tf-container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="tf-heading style-5">
                        <h4 class="heading">GANA | Game Asset Nusantara</h4>
                        <p class="sub-heading">Enter your email account! </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-12">

                    <form action="#" id="contactform">
                        @csrf
                        <fieldset><input id="email" name="email" tabindex="1" aria-required="true" required=""
                                type="text" placeholder="Email"></fieldset>
                        <button class="submit" type="submit">Send</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
