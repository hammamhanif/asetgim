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
                    </div>
                    <div class="add-nft-inner">
                        <div id="comments">
                            <h1>{{ $assets->name }}</h1>
                            <img src="{{ asset($assets->image_path) }}" alt="{{ $assets->name }}">
                            <p>{{ $assets->description }}</p>
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
        </div>
    </section>
@endsection
