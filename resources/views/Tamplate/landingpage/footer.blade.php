<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div> <!-- Col kosong -->
            <div class="col-md-4">
                <div class="logo mb-3S">
                    <img id="logo_footer" src="{{ asset('assets/images/logo/logobrind.png') }}" alt="Image">
                </div>
                <p class="content mb-3"></p>
                <ul class="social-item">
                    <li><a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fbrin_indonesia"><i
                                class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/brin.indonesia/"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/brin_indonesia/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCr1ihEI566IJib9P-JjENSA"><i
                                class="fab fa-youtube"></i></a></li>
                </ul>
                <p class="copy-right mt-3">Copyright © 2023 BRIN. GANA (Game Asset Nusantara).</p>
            </div>
            <div class="col-md-4"></div> <!-- Col kosong -->
        </div>
    </div>
</footer>

<style>
    .social-item {
        list-style: none;
        /* Menghilangkan bullets pada daftar sosial item */
        padding: 0;
        /* Menghilangkan padding bawaan pada daftar */
        display: flex;
        /* Mengubah daftar menjadi tampilan flex (horizontal) */
        justify-content: center;
        /* Mengatur konten horizontal di tengah-tengah */
    }

    .social-item li {
        margin: 0 10px;
        /* Memberikan jarak antara item sosial */
    }
</style>
