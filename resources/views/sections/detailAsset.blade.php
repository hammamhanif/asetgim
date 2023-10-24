@extends('Tamplate.auth.layout')


@section('login')
    <section class="tf-item-detail">
        <div class="tf-container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="tf-item-detail-inner style-2">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
                            style="background-color: #000; margin-right: 20px; margin-bottom: 10px;">
                            <div class="carousel-inner">
                                <div class="carousel-item active justify-content-center">
                                    <img src="{{ asset('storage/' . $assets->path) }}" alt="Image" width="480"
                                        height="220">
                                </div>
                            </div>
                            <span class="sr-only">Next</span>
                            </a>

                        </div>
                        <div class="content">
                            <div class="content-top">
                                <div class="author">
                                    <img src="{{ $assets->user->image ? asset($assets->user->image) : asset('dist/icon/preload.png') }}"
                                        alt="Image" style="width: 100px; height: 100px;">

                                    <h6 class="title">{{ htmlentities($assets->user->name) }}</h6>
                                </div>
                                <div class="wishlish">
                                    <div class="number-wishlish"><i class="far fa-heart"></i>68</div>
                                    <div class="number-wishlish"><i class="far fa-download"></i>68</div>
                                </div>
                            </div>
                            <div class="tf-heading style-3">
                                <h4 class="heading">{{ htmlentities($assets->name) }}</h4>
                                <p class="sub-heading">{{ htmlentities($assets->description) }}</p>
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
