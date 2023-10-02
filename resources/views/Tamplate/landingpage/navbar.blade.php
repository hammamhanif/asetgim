<header class="header absolute">
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
                                    <a href="{{ route('index_contact') }}">Contact</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('about') }}">About Us</a>
                                </li>
                                </li>
                                @if (auth()->check())
                                    <li class="menu-item menu-item-has-children ">
                                        <a href="#">{{ auth()->user()->name }}</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item "><a href="{{ route('dashboard') }}">My Dashboard</a>
                                            </li>
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
                                @endif
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
