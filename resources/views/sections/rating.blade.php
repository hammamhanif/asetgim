@extends('Tamplate.auth.layout')


@section('login')

<section class="tf-page-title style-2">    
                <div class="tf-container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumbs">
                                <li><a href="blog2.html">Rating</a></li>
                                <li>Rating</li>
                            </ul>
                   
                        </div>
                    </div>
                </div>                    
            </section>

            <section class="tf-add-nft">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="detail-inner">
                            <div class="image">
                                <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#imageCarousel" data-slide-to="1"></li>
                                        <li data-target="#imageCarousel" data-slide-to="2"></li>
                                        <!-- Add more indicators for additional images -->
                                    </ol>
            
                                    <!-- Slides -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/blog/blog-details-1.jpg" alt="Image 1">
                                        </div>
                                        <!-- Add more slides for additional images -->
                                    </div>
            
                                    <!-- Controls -->
                                    <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="add-nft-inner">
                                <div id="comments">
                                    <h5>Rating</h5>
                                    <div class="stars">
                                </div>
                                
                                <div class="review-form">
                                <form action="{{ route('Rating') }}" method="post" id="commentform" class="comment-form" enctype="multipart/form-data">
                                @csrf
                                <fieldset class="ulasan">
                                    <textarea id="review-text" name="review_text" placeholder="Tulis ulasan Anda..."></textarea>
                                    <div class="btn-slider mb-5 mt-5 text-right">
                                        <div class="btn-submit">
                                            <button class="tf-button" type="submit">Kirim Ulasan</button>
                                        </div>
                                    </div>
                                </fieldset>
                                </form>
                                </div>
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            

            
            @endsection