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
                </div>
                <div class="Rating">
                    <div id="comments">
                        <h5>Rating</h5>
                        <form method="POST" action="{{ route('submit-review') }}" name="ratingsForm" id="ratingsForm">
                            @csrf
                            <div class="rating">
                                <input type="radio" id="star5" name="rating" value="5" />
                                <label for="star5" title="5 stars">5 stars</label>
                                <input type="radio" id="star4" name="rating" value="4" />
                                <label for="star4" title="4 stars">4 stars</label>
                                <input type="radio" id="star3" name="rating" value="3" />
                                <label for="star3" title="3 stars">3 stars</label>
                                <input type="radio" id="star2" name="rating" value="2" />
                                <label for="star2" title="2 stars">2 stars</label>
                                <input type="radio" id="star1" name="rating" value="1" />
                                <label for="star1" title="1 star">1 star</label>
                            </div>

                            <div class="form-group">
                                <fieldset class="review">
                                    <textarea id="review" name="review" placeholder="Tulis ulasan Anda..." required=""></textarea>
                                </fieldset>
                            </div>

                            <input type="submit" value="kirim ulasan">
                        </form>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
