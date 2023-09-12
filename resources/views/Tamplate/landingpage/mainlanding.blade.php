    {{-- Header Landing Page --}}
    @include('Tamplate.landingpage.header')
    {{-- ======================================================= --}}

    {{-- Preloader --}}
    @include('Tamplate.preloader')
    {{-- ======================================================= --}}

    @yield('main')


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
