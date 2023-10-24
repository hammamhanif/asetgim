@extends('Tamplate.auth.layout')


@section('login')
    <section class="tf-page-title style-2">
        <div class="tf-container">
            <div class="row">
                <div class="col-md-12">

                    <ul class="breadcrumbs">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <section class="tf-contact">
        <div class="tf-container">
            <div class="row ">
                <div class="col-md-6">
                    <div class="image ani4">
                        <img src="{{ asset('img/contact.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tf-heading style-3">
                        <h4 class="heading">Drop Up A Message</h4>
                        <p class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati
                            dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit. </p>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @elseif(session('unsuccess'))
                        <div class="alert alert-danger" role="alert">
                            <strong class="font-bold">Unsuccess!</strong>
                            <span class="block sm:inline">{{ session('unsuccess') }}</span>
                        </div>
                    @endif
                    <form action="{{ route('kontaks') }}" method="post" id="commentform" class="comment-form"
                        enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <fieldset class="name">
                            <input type="text" id="name" placeholder="Your Full Name" class="tb-my-input"
                                name="name" tabindex="2" aria-required="true" required="">
                        </fieldset>
                        <fieldset class="email">
                            <input type="email" id="email" placeholder="Your Email Address" class="tb-my-input"
                                name="email" tabindex="2" aria-required="true" required="">
                        </fieldset>
                        <fieldset class="email">
                            <input type="text" id="subject" placeholder="Subject Message" class="tb-my-input"
                                name="subject" tabindex="2" aria-required="true" required="">
                        </fieldset>

                        <fieldset class="message">
                            <textarea id="message" name="message" rows="4" placeholder="Message" tabindex="4" aria-required="true"
                                required=""></textarea>
                        </fieldset>
                        <div class="btn-submit"><button class="tf-button" type="submit">Send message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
