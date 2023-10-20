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
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                    <div class="review-form">
                                        <textarea id="review-text" placeholder="Tulis ulasan Anda..."></textarea>
                                        <div class="btn-slider mb-5 mt-5 text-right">
                                            <a href="explore-banner.html" class="tf-button style-2">Submit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            

            
            @endsection