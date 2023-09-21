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
                        <img src="assets/images/img-contact.png" alt="Image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tf-heading style-3">
                        <h4 class="heading">Drop Up A Message</h4>
                        <p class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati
                            dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit. </p>
                    </div>
                    <form action="contact/contact-process.php" method="post" id="commentform" class="comment-form">
                        <fieldset class="name">
                            <input type="text" id="name" placeholder="Your Full Name" class="tb-my-input"
                                name="name" tabindex="2" aria-required="true" required="">
                        </fieldset>
                        <fieldset class="email">
                            <input type="email" id="email" placeholder="Your Email Address" class="tb-my-input"
                                name="email" tabindex="2" aria-required="true" required="">
                        </fieldset>
                        <div class="form-select" id="subject">
                            <select>
                                <option value="1">Select subject</option>
                                <option value="2">Select subject</option>
                                <option value="3">Select subject</option>
                            </select>
                            <i class="icon-fl-down"></i>
                        </div>
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
