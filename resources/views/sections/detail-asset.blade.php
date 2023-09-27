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

    <section class="tf-item-detail">
        <div class="tf-container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="tf-item-detail-inner style-2">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
                            style="margin-right: 20px; margin-bottom: 10px;">
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
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                                <p class="sub-heading">Asset disamping merupakan asset 3D yang dibuat oleh orang Indonesia
                                    yang bertemakan budaya Indonesia yang dapat digunakan untuk keperluan kreatif seperti
                                    video animasi bahkan untuk pembuatan game.</p>
                                <div class="btn-slider mb-5 mt-5 text-right">
                                    <a href="explore-banner.html" class="tf-button style-2">Download now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
