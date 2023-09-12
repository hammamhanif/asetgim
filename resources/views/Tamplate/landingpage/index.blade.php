@extends('Tamplate.landingpage.mainlanding')


@section('main')
    <div id="wrapper" class="wrapper-style">
        <div id="page" class="clearfix">
            {{-- Navbar --}}
            @include('Tamplate.landingpage.navbar')
            {{-- End Navbar --}}

            @include('Tamplate.landingpage.sectionlanding')


            <!-- Footer -->
            @include('Tamplate.landingpage.footer')
            {{-- End Footer --}}

            <!-- Bottom -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->


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
                        data-dismiss="modal" aria-label="Close"> Place bid</a>
                </div>
            </div>
        </div>
    </div>

    <a id="scroll-top"></a>
@endsection
