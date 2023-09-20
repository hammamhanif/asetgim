@include('Tamplate.landingpage.header')

<!-- preloade -->
@include('Tamplate.preloader')
<!-- /preload -->

<div id="wrapper" class="wrapper-style">
    <div id="page" class="clearfix">
        <header class="header">
            <div class="tf-container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="site-header-inner">
                            <div id="site-logo" class="clearfix">
                                <div id="site-logo-inner">
                                    <a href="{{ route('home') }}" rel="home" class="main-logo">
                                        <img id="logo_header" src="assets/images/logo/logobrin.png" alt="Image">
                                    </a>
                                </div>
                            </div>

                            <div class="header-center">
                                <nav id="main-nav" class="main-nav">
                                    <ul id="menu-primary-menu" class="menu">
                                        <li class="menu-item">
                                            <a href="#">Home</a>

                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">Category</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="explore-grid.html">2D</a></li>
                                                <li class="menu-item"><a href="explore-banner.html">3D</a>
                                                </li>

                                            </ul>
                                        </li>


                                        <li class="menu-item menu-item-has-children ">
                                            <a href="#">Daerah</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item "><a href="blog.html">DKI Jakarta</a></li>
                                                <li class="menu-item "><a href="blog2.html">Jawa Barat</a></li>
                                                <li class="menu-item"><a href="blog-details.html">Jawa Tengah</a>
                                                </li>
                                                <li class="menu-item"><a href="blog-details2.html">Jawa Timur</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="menu-item">
                                            <a href="contact.html">Contact</a>
                                        </li>
                                        </li>
                                        @auth
                                            <li class="menu-item menu-item-has-children ">
                                                <a href="#">{{ auth()->user()->name }}</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item "><a href="{{ route('dashboard') }}">My
                                                            Dashboard</a></li>
                                                    <li class="menu-item ">
                                                        <form action="{{ route('logout') }}" method="post">
                                                            @csrf
                                                            <button type="submit" class="dropdown-item">
                                                                Sign Out
                                                            </button>
                                                        </form>
                                                    </li>

                                                </ul>
                                            </li>
                                        @endauth
                                    </ul>
                                </nav><!-- /#main-nav -->
                            </div>

                            <div class="header-right">

                                <a href="#" onclick="switchTheme()" class="mode-switch">
                                    <img id="img-mode" src="assets/images/icon/moon.png" alt="Image">
                                </a>
                            </div>

                            <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
                        </div>
                    </div>
                </div>
            </div>

        </header>

        {{-- Content Auth --}}
        @yield('login')

    </div>

    <!-- Footer -->
    @include('Tamplate.landingpage.footer')

    <!-- Bottom -->
</div>
<!-- /#page -->
</div>
<!-- /#wrapper -->

<a id="scroll-top"></a>

<!-- Javascript -->
<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.js"></script>
<script src="{{ asset('dist/js/jquery.min.js') }}"></script>
<script src="{{ asset('dist/js/jquery.easing.js') }}"></script>
<script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dist/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/swiper.js') }}"></script>
<script src="{{ asset('dist/js/count-down.js') }}"></script>
<script src="{{ asset('dist/js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('dist/js/switchmode.js') }}"></script>
<script src="{{ asset('dist/js/plugin.js') }}"></script>
<script src="{{ asset('dist/js/shortcodes.js') }}"></script>
<script src="{{ asset('dist/js/main.js') }}"></script>

</body>

</html>
