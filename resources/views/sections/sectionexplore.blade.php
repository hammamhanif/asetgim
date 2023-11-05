@extends('Tamplate.auth.layout')


@section('login')
    <!-- title page -->
    <section class="tf-page-title">
        <div class="tf-container">
            <div class="row">
                <div class="col-md-12">

                    <ul class="breadcrumbs">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Explore Asset</li>
                    </ul>

                    <h4 class="page-title-heading">Explore Asset</h4>

                </div>
            </div>
    </section>

    <section class="tf-live-auction explore tf-filter">
        <div class="tf-container">
            <form action="{{ route('exploreAsset') }}" method="GET">
                <div class="mb-3">
                    <input type="text" name="search" placeholder="Cari aset...">
                </div>
                <button type="submit" class=" justify-content-center btn-primary mb-5">Search</button>
            </form>

            <div class="row">
                @foreach ($assets as $asset)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore ">
                        <div class="sc-product style2">
                            <div class="top">
                                <a href="{{ route('detailAsset', ['id' => $asset->id]) }}"
                                    class="tag">{{ $asset->name }}</a>
                            </div>
                            <div class="bottom">
                                <div class="details-product">
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="{{ $asset->user->image ? asset($asset->user->image) : asset('images/author/7309681.jpg') }}"
                                                alt="images">
                                        </div>
                                        <div class="content">
                                            <div class="position">Creator</div>
                                            <div class="name"> <a href="#">{{ $asset->creator_name }}</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="features">
                                <div class="product-media">
                                    <img src="{{ asset('storage/' . $asset->path) }}" alt="images">
                                </div>
                                <div class="rain-drop1"><img src="assets/images/icon/rain1.svg" alt="images">
                                </div>
                                <div class="rain-drop2"><img src="assets/images/icon/rain2.svg" alt="images">
                                </div>
                            </div>
                            <div class="bottom-style2">
                                <div class="product-button">
                                    <a href="{{ route('detailAsset', ['id' => $asset->id]) }}" class="tf-button">
                                        Detail</a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
            <div class="d-flex justify-content-center mt-4">

                {{ $assets->links() }}
            </div>
        </div>
    </section>



    {{-- Isi modal card (Opsional) --}}

    <div class="modal fade popup" id="popup_bid" tabindex="-1" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body space-y-20 pd-40">
                    <h3>Place a Bid</h3>
                    <p class="text-center sub-heading">You must bid a least <span class="price color-popup">4.89
                            ETH</span></p>
                    <input type="text" class="form-control" placeholder="00.00 ETH">
                    <p class="label-1">Enter quantity. <span class="color-popup">5 available</span>
                    </p>
                    <input type="text" class="form-control quantity form-bottom" value="1">
                    <div class="d-flex justify-content-between detail-1">
                        <p> You must bid at least:</p>
                        <p class="text-right price color-popup"> 4.89 ETH </p>
                    </div>
                    <div class="d-flex justify-content-between detail-2">
                        <p> Service free:</p>
                        <p class="text-right price color-popup"> 0,89 ETH </p>
                    </div>
                    <div class="d-flex justify-content-between detail-3">
                        <p> Total bid amount:</p>
                        <p class="text-right price color-popup"> 4 ETH </p>
                    </div>
                    <a href="#" class="button-popup" data-toggle="modal" data-target="#popup_bid_success"
                        data-dismiss="modal" aria-label="Close"> details</a>
                </div>
            </div>
        </div>
    </div>

    <a id="scroll-top"></a>
@endsection
@push('vendorScript')
    @livewireScripts
@endpush
