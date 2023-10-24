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

                    <h4 class="page-title-heading">Explore Grid</h4>

                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"></label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Search..">
                        </div>
                        <button type="submit" class=" justify-content-center btn-primary">Search</button>
                    </form>
                </div>
            </div>
    </section>

    <section class="tf-live-auction explore tf-filter">
        <div class="tf-container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="top-menu">
                        <ul class="filter-menu">
                            <li class="active"><a href="#" data-filter=".3d">3D MODEL</a></li>
                            <li><a href="#" data-filter=".2d">2D ARTS </a></li>
                        </ul>
                        <div id="item_category" class="dropdown">
                            <a href="#" class="btn-selector nolink ">Recently Create</a>
                            <ul>
                                <li><span>Recently Listed</span></li>
                                <li class="active"><span>Recently Created</span></li>
                                <li><span>Recently Sold</span></li>
                                <li><span>Recently Received</span></li>
                                <li><span>Recently Soon</span></li>
                                <li><span>Recently Low to Hight</span></li>
                                <li><span>Recently Last Sale</span></li>
                                <li><span>Oldest</span></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row tf-filter-container">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d cyber">
                    <div class="sc-product style2">
                        <div class="top">
                            <a href="item-details.html" class="tag">Sweet Baby #1</a>
                            <div class="wish-list">
                                <a href="#" class="heart-icon"></a>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="details-product">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="assets/images/author/author31.png" alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="position">Creator</div>
                                        <div class="name"> <a href="#">Cynthia Burke</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features">
                            <div class="product-media">
                                <img src="assets/images/product/product4.jpg" alt="images">
                            </div>
                            <div class="rain-drop1"><img src="assets/images/icon/rain1.svg" alt="images">
                            </div>
                            <div class="rain-drop2"><img src="assets/images/icon/rain2.svg" alt="images">
                            </div>
                        </div>
                        <div class="bottom-style2">
                            <div class="price">
                                <div class="icon"><img src="assets/images/icon/ethe.svg" alt="images">
                                </div>
                                <div class="content">
                                    <div class="name">ETH</div>
                                    <div class="cash">0.0041</div>
                                </div>
                            </div>
                            <div class="product-button">
                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button">
                                    Purchase</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d pixel">
                    <div class="sc-product style2">
                        <div class="top">
                            <a href="item-details.html" class="tag">Avidlines #14843</a>
                            <div class="wish-list">
                                <a href="#" class="heart-icon"></a>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="details-product">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="assets/images/author/author33.png" alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="position">Creator</div>
                                        <div class="name"> <a href="#">Astrid Swanson</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features">
                            <div class="product-media">
                                <img src="assets/images/product/product5.jpg" alt="images">
                            </div>
                            <div class="rain-drop1"><img src="assets/images/icon/rain1.svg" alt="images">
                            </div>
                            <div class="rain-drop2"><img src="assets/images/icon/rain2.svg" alt="images"></div>
                        </div>
                        <div class="bottom-style2">
                            <div class="price">
                                <div class="icon"><img src="assets/images/icon/ethe.svg" alt="images">
                                </div>
                                <div class="content">
                                    <div class="name">ETH</div>
                                    <div class="cash">0.0041</div>
                                </div>
                            </div>
                            <div class="product-button">
                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button">
                                    Purchase</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d music">
                    <div class="sc-product style2">
                        <div class="top">
                            <a href="item-details.html" class="tag">Archetype #597</a>
                            <div class="wish-list">
                                <a href="#" class="heart-icon"></a>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="details-product">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="assets/images/author/author34.png" alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="position">Creator</div>
                                        <div class="name"> <a href="#">Sirena May</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features">
                            <div class="product-media">
                                <img src="assets/images/product/product6.jpg" alt="images">
                            </div>
                            <div class="rain-drop1"><img src="assets/images/icon/rain1.svg" alt="images"></div>
                            <div class="rain-drop2"><img src="assets/images/icon/rain2.svg" alt="images"></div>
                        </div>
                        <div class="bottom-style2">
                            <div class="price">
                                <div class="icon"><img src="assets/images/icon/ethe.svg" alt="images">
                                </div>
                                <div class="content">
                                    <div class="name">ETH</div>
                                    <div class="cash">0.0041</div>
                                </div>
                            </div>
                            <div class="product-button">
                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button">
                                    Purchase</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d 2d">
                    <div class="sc-product style2">
                        <div class="top">
                            <a href="item-details.html" class="tag">Chimera #977</a>
                            <div class="wish-list">
                                <a href="#" class="heart-icon"></a>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="details-product">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="assets/images/author/author35.png" alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="position">Creator</div>
                                        <div class="name"> <a href="#">Sirena May</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features">
                            <div class="product-media">
                                <img src="assets/images/product/product7.jpg" alt="images">
                            </div>
                            <div class="rain-drop1"><img src="assets/images/icon/rain1.svg" alt="images"></div>
                            <div class="rain-drop2"><img src="assets/images/icon/rain2.svg" alt="images"></div>
                        </div>
                        <div class="bottom-style2">
                            <div class="price">
                                <div class="icon"><img src="assets/images/icon/ethe.svg" alt="images">
                                </div>
                                <div class="content">
                                    <div class="name">ETH</div>
                                    <div class="cash">0.0041</div>
                                </div>
                            </div>
                            <div class="product-button">
                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button">
                                    Purchase</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d anime">
                    <div class="sc-product style2">
                        <div class="top">
                            <a href="item-details.html" class="tag">Cool Cat 3D #2538</a>
                            <div class="wish-list">
                                <a href="#" class="heart-icon"></a>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="details-product">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="assets/images/author/author36.png" alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="position">Creator</div>
                                        <div class="name"> <a href="#">Cynthia Burke</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features">
                            <div class="product-media">
                                <img src="assets/images/product/product9.jpg" alt="images">
                            </div>
                            <div class="rain-drop1"><img src="assets/images/icon/rain1.svg" alt="images"></div>
                            <div class="rain-drop2"><img src="assets/images/icon/rain2.svg" alt="images"></div>
                        </div>
                        <div class="bottom-style2">
                            <div class="price">
                                <div class="icon"><img src="assets/images/icon/ethe.svg" alt="images">
                                </div>
                                <div class="content">
                                    <div class="name">ETH</div>
                                    <div class="cash">0.0041</div>
                                </div>
                            </div>
                            <div class="product-button">
                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button">
                                    Purchase</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d abstract">
                    <div class="sc-product style2">
                        <div class="top">
                            <a href="item-details.html" class="tag">Doodle #9972</a>
                            <div class="wish-list">
                                <a href="#" class="heart-icon"></a>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="details-product">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="assets/images/author/author36.png" alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="position">Creator</div>
                                        <div class="name"> <a href="#">Astrid Swanson</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features">
                            <div class="product-media">
                                <img src="assets/images/product/product10.jpg" alt="images">
                            </div>
                            <div class="rain-drop1"><img src="assets/images/icon/rain1.svg" alt="images"></div>
                            <div class="rain-drop2"><img src="assets/images/icon/rain2.svg" alt="images"></div>
                        </div>
                        <div class="bottom-style2">
                            <div class="price">
                                <div class="icon"><img src="assets/images/icon/ethe.svg" alt="images">
                                </div>
                                <div class="content">
                                    <div class="name">ETH</div>
                                    <div class="cash">0.0041</div>
                                </div>
                            </div>
                            <div class="product-button">
                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button">
                                    Purchase</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d abstract">
                    <div class="sc-product style2">
                        <div class="top">
                            <a href="item-details.html" class="tag">Slow Mo #127</a>
                            <div class="wish-list">
                                <a href="#" class="heart-icon"></a>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="details-product">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="assets/images/author/author37.png" alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="position">Creator</div>
                                        <div class="name"> <a href="#">Sirena May</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features">
                            <div class="product-media">
                                <img src="assets/images/product/product11.jpg" alt="images">
                            </div>
                            <div class="rain-drop1"><img src="assets/images/icon/rain1.svg" alt="images"></div>
                            <div class="rain-drop2"><img src="assets/images/icon/rain2.svg" alt="images"></div>
                        </div>
                        <div class="bottom-style2">
                            <div class="price">
                                <div class="icon"><img src="assets/images/icon/ethe.svg" alt="images">
                                </div>
                                <div class="content">
                                    <div class="name">ETH</div>
                                    <div class="cash">0.0041</div>
                                </div>
                            </div>
                            <div class="product-button">
                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button">
                                    Purchase</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore 3d 2d">
                    <div class="sc-product style2">
                        <div class="top">
                            <a href="item-details.html" class="tag">Kick Shock #1</a>
                            <div class="wish-list">
                                <a href="#" class="heart-icon"></a>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="details-product">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="assets/images/author/author38.png" alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="position">Creator</div>
                                        <div class="name"> <a href="#">Sirena May</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features">
                            <div class="product-media">
                                <img src="assets/images/product/product12.jpg" alt="images">
                            </div>
                            <div class="rain-drop1"><img src="assets/images/icon/rain1.svg" alt="images"></div>
                            <div class="rain-drop2"><img src="assets/images/icon/rain2.svg" alt="images"></div>
                        </div>
                        <div class="bottom-style2">
                            <div class="price">
                                <div class="icon"><img src="assets/images/icon/ethe.svg" alt="images">
                                </div>
                                <div class="content">
                                    <div class="name">ETH</div>
                                    <div class="cash">0.0041</div>
                                </div>
                            </div>
                            <div class="product-button">
                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button">
                                    Purchase</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore anime">
                    <div class="sc-product style2">
                        <div class="top">
                            <a href="item-details.html" class="tag">Sweet Baby #1</a>
                            <div class="wish-list">
                                <a href="#" class="heart-icon"></a>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="details-product">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="assets/images/author/author1.png" alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="position">Creator</div>
                                        <div class="name"> <a href="#">Cynthia Burke</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features">
                            <div class="product-media">
                                <img src="assets/images/product/product4.jpg" alt="images">
                            </div>
                            <div class="rain-drop1"><img src="assets/images/icon/rain1.svg" alt="images"></div>
                            <div class="rain-drop2"><img src="assets/images/icon/rain2.svg" alt="images"></div>
                        </div>
                        <div class="bottom-style2">
                            <div class="price">
                                <div class="icon"><img src="assets/images/icon/ethe.svg" alt="images">
                                </div>
                                <div class="content">
                                    <div class="name">ETH</div>
                                    <div class="cash">0.0041</div>
                                </div>
                            </div>
                            <div class="product-button">
                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button">
                                    Purchase</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore cyber">
                    <div class="sc-product style2">
                        <div class="top">
                            <a href="item-details.html" class="tag">Sweet Baby #1</a>
                            <div class="wish-list">
                                <a href="#" class="heart-icon"></a>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="details-product">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="assets/images/author/author1.png" alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="position">Creator</div>
                                        <div class="name"> <a href="#">Cynthia Burke</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features">
                            <div class="product-media">
                                <img src="assets/images/product/product8.jpg" alt="images">
                            </div>
                            <div class="rain-drop1"><img src="assets/images/icon/rain1.svg" alt="images"></div>
                            <div class="rain-drop2"><img src="assets/images/icon/rain2.svg" alt="images"></div>
                        </div>
                        <div class="bottom-style2">
                            <div class="price">
                                <div class="icon"><img src="assets/images/icon/ethe.svg" alt="images">
                                </div>
                                <div class="content">
                                    <div class="name">ETH</div>
                                    <div class="cash">0.0041</div>
                                </div>
                            </div>
                            <div class="product-button">
                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button">
                                    Purchase</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore pixel">
                    <div class="sc-product style2">
                        <div class="top">
                            <a href="item-details.html" class="tag">Sweet Baby #1</a>
                            <div class="wish-list">
                                <a href="#" class="heart-icon"></a>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="details-product">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="assets/images/author/author33.png" alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="position">Creator</div>
                                        <div class="name"> <a href="#">Cynthia Burke</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features">
                            <div class="product-media">
                                <img src="assets/images/product/product8.jpg" alt="images">
                            </div>
                            <div class="rain-drop1"><img src="assets/images/icon/rain1.svg" alt="images"></div>
                            <div class="rain-drop2"><img src="assets/images/icon/rain2.svg" alt="images"></div>
                        </div>
                        <div class="bottom-style2">
                            <div class="price">
                                <div class="icon"><img src="assets/images/icon/ethe.svg" alt="images">
                                </div>
                                <div class="content">
                                    <div class="name">ETH</div>
                                    <div class="cash">0.0041</div>
                                </div>
                            </div>
                            <div class="product-button">
                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button">
                                    Purchase</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 tf-loadmore music">
                    <div class="sc-product style2">
                        <div class="top">
                            <a href="item-details.html" class="tag">Sweet Baby #1</a>
                            <div class="wish-list">
                                <a href="#" class="heart-icon"></a>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="details-product">
                                <div class="author">
                                    <div class="avatar">
                                        <img src="assets/images/author/author1.png" alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="position">Creator</div>
                                        <div class="name"> <a href="#">Cynthia Burke</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features">
                            <div class="product-media">
                                <img src="assets/images/product/product4.jpg" alt="images">
                            </div>
                            <div class="rain-drop1"><img src="assets/images/icon/rain1.svg" alt="images"></div>
                            <div class="rain-drop2"><img src="assets/images/icon/rain2.svg" alt="images"></div>
                        </div>
                        <div class="bottom-style2">
                            <div class="price">
                                <div class="icon"><img src="assets/images/icon/ethe.svg" alt="images">
                                </div>
                                <div class="content">
                                    <div class="name">ETH</div>
                                    <div class="cash">0.0041</div>
                                </div>
                            </div>
                            <div class="product-button">
                                <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button">
                                    Purchase</a>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <div class="col-md-12">
                <div class="btn-loadmore mt17">
                    <a href="#" class="tf-button loadmore">Load More</a>
                </div>
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
