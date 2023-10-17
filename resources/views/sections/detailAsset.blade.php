@extends('Tamplate.auth.layout')


@section('login')

<section class="tf-item-detail">
                <div class="tf-container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="tf-item-detail-inner style-2">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="background-color: #000; margin-right: 20px; margin-bottom: 10px;">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/item-details-2.jpg" alt="Image">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/item-details-2.jpg" alt="Image">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/item-details-2.jpg" alt="Image">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                          </svg></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="tf-button" data-slide="next">
                                        <span class="" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                            <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                          </svg></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                
                                </div>
                                <div class="content">
                                    <div class="content-top">
                                        <div class="author">
                                            <img src="assets/images/author/author-detail-3.png" alt="Image">
                                            <h6 class="title">Trending Arts</h6>
                                        </div>
                                        <div class="wishlish">
                                            <div class="number-wishlish"><i class="far fa-heart"></i>68</div>
                                            <div class="number-wishlish"><i class="far fa-download"></i>68</div>
                                        </div>
                                    </div>
                                    <div class="tf-heading style-3">
                                        <h4 class="heading">Judul Asset</h4>
                                        <p class="sub-heading">Asset disamping merupakan asset 3D yang dibuat oleh orang Indonesia yang bertemakan budaya Indonesia yang dapat digunakan untuk keperluan kreatif seperti video animasi bahkan untuk pembuatan game.</p>
                                        <div class="btn-slider mb-5 mt-5 text-right">
                                            <a href="{{ route('file.download') }}" class="tf-button style-2">Download now</a>
                                            <a href="{{ route('rating') }}" class="tf-button style-2">Rating</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>              

            @endsection