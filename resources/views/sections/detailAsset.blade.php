@extends('Tamplate.auth.layout')


@section('login')
    <section class="tf-item-detail">
        <div class="tf-container">
            <div class="row align-items-center">
                <div class="col-md-12">
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
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ htmlentities($error) }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="tf-item-detail-inner style-2">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
                            style="background-color: #242424; margin-right: 20px; margin-bottom: 10px; ro">
                            <div class="carousel-inner">
                                <div class="carousel-item active justify-content-center">
                                    <img src="{{ asset('storage/' . $assets->path) }}" alt="Image">
                                </div>
                            </div>

                        </div>
                        <div class="content">
                            <div class="content-top">
                                <div class="author">
                                    <img src="{{ $assets->user->image ? asset($assets->user->image) : asset('img/Avatar_Profile.png') }}"
                                        alt="Image" style="width: 100px; height: 100px;">

                                    <h6 class="title">{{ htmlentities($assets->user->name) }}</h6>
                                </div>
                                <div class="wishlish">
                                    <div class="number-wishlish"><i class="far fa-star"></i>{{ $roundedAverageRating }}
                                    </div>
                                    <div class="number-wishlish"><i class="far fa-download"></i>{{ $assets->count }}</div>
                                </div>
                            </div>
                            <div class="tf-heading style-3">
                                <h4 class="heading">{{ htmlentities($assets->name) }}</h4>
                                <p class="sub-heading">{{ htmlentities($assets->description) }}</p>
                                <div class="btn-slider mb-5 mt-5 text-right">
                                    <a href="#" class="tf-button style-2" data-toggle="modal"
                                        data-target="#reportModal" data-asset-id="{{ $assets->id }}">Report</a>


                                    <a href="{{ route('rating', ['id' => $assets->id]) }}"
                                        class="tf-button style-2">Rating</a>
                                </div>
                                <div class="btn-slider mb-5 mt-5 text-right">
                                    <a href="{{ route('file.download', $assets->id) }}" class="tf-button style-3">Download
                                        now</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Report Asset</h5>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('report') }}">
                            @csrf
                            <input type="hidden" value="{{ $assets->id }}" name="asset_id">
                            <div class="form-group">
                                <label for="asset_name">Nama Asset</label>
                                <input type="text" class="form-control" value="{{ $assets->name }}" name="asset_name"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="creator_name">Nama Creator</label>
                                <input type="text" class="form-control" name="creator_name">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="tf-button style-3">Report</button>
                        <button type="button" class="tf-button style-2" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
