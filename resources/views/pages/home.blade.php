@extends('layouts.home')

@section('title')
    Beranda | Pinjamobi
@endsection

@section('content')
    <section class="h-100 w-100" style="box-sizing: border-box;">

        <!-- Jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"
            integrity="sha512-M+qMI1PHRcYcOpJzeJlaWbVVx2JJyPIwZas8or7dc97LZOokjvbpfRxymhVtlJLyjiF3wGyr0FJOA4DLONLVLw=="
            crossorigin="anonymous"></script>

        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .header-9-3 input:focus-within,
            .header-9-3 input:focus {
                outline: none;
            }

            .header-9-3 nav a.nav-link {
                color: #E8A262 !important;
            }

            .header-9-3 nav a.nav-link.active,
            .header-9-3 nav a.nav-link:hover {
                color: #4B2A0B !important;
            }

            .header-9-3 .header-sticky.scrolled {
                background-color: #fff !important;
                transition: background-color 200ms linear, box-shadow 300ms linear;
                box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.25);
            }

            .header-9-3 .color-black--1 {
                color: #3C3257;
            }

            .header-9-3 .color-black--2 {
                color: #3B3255;
            }

            .header-9-3 .color-black--3,
            .header-9-3 input::placeholder {
                color: #C2BCD2;
            }

            .header-9-3 .color-orange--1 {
                color: #FE8336;
            }

            .header-9-3 .btn-track {
                background-color: #2490b1;
                font-size: 1.25rem;
                line-height: 1.75rem;
                border-radius: 0;
                padding: 0.875rem 2.25rem;
                margin-right: 1.5rem;
                transition: 0.2s;
            }

            .header-9-3 .btn-track:hover {
                background-color: #21a8d1;
                transition: 0.2s;
            }

            .header-9-3 .partners::before {
                content: "";
                position: absolute;
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0;
                text-align: center;
                bottom: -8px;
                height: 0px;
                width: 3%;
                border-bottom: 2px solid #ff7468;
                transition: 0.3s;
            }

            .header-9-3 .card-item {
                box-shadow: 0px 40px 80px 0px rgba(255, 92, 0, 0.04);
                border-radius: 0.25rem;
            }

            .header-9-3 .main-header {
                padding: 6rem 1rem;
            }

            .header-9-3 .header-body {
                margin-bottom: 11rem;
            }

            .header-9-3 .title-font {
                font: 700 3rem/1.2 'Poppins', sans-serif;
                margin-bottom: 2.25rem;
            }

            .header-9-3 .caption-font {
                font-size: 1.25rem;
                line-height: 1.75;
                margin-bottom: 4rem;
            }

            .header-9-3 .caption-note {
                font-size: 0.875rem;
                line-height: 1.25rem;
            }

            .header-9-3 .header-partners p {
                font: 600 1.25rem/1.75rem 'Poppins', sans-serif;
                margin-bottom: 4rem;
            }

            .header-9-3 .input-text {
                font-size: 1.25rem;
                line-height: 1.75rem;
                padding: 1.75rem 1.5rem;
                z-index: 0;
                background-color: transparent;
            }

            .header-9-3 .nav-main {
                padding: 2.25rem 1rem 2rem;
            }

            .header-9-3 .dropdown-toggle::after {
                display: none;
            }

            .header-9-3 .nav-dropdown {
                background-color: #FBFCFD;
                padding: 0.75rem;
                border-radius: 0.5rem;
                border: none;
                width: 78px;
            }

            .header-9-3 .dropdown-item a,
            .header-9-3 .dropdown-item {
                color: #3C3257;
                background-color: #FBFCFD;
                transition: 0.2s;
            }

            .header-9-3 .dropdown-item:focus a,
            .header-9-3 .dropdown-item:hover a {
                color: #3C3257;
                font-weight: 500;
                transition: 0.2s;
                background-color: #FFFFFF;
            }

            .header-9-3 .dropdown-header .dropdown-header-hover:hover a {
                color: #3C3257 !important;
                font-weight: 500;
                transition: 0.1s;
            }

            @media (min-width: 640px) {
                .header-9-3 .title-font {
                    font: 700 3.75rem/1.2 'Poppins', sans-serif;
                }

                .header-9-3 .dropdown-header .dropdown-header-hover:hover .dropdown-header-icon-arrow {
                    display: block;
                }
            }

            @media (min-width: 768px) {}

            @media (min-width: 1024px) {
                .header-9-3 .bg-header {
                    background-image: url('/images/hero.jpg');
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                }

                .header-9-3 .main-header {
                    padding: 6rem 3rem;
                }

                .header-9-3 nav .active {
                    position: relative;
                    padding-bottom: 12px;
                    padding-top: 12px;
                }

                .header-9-3 nav .active:before {
                    content: "";
                    position: absolute;
                    margin-left: auto;
                    margin-right: auto;
                    left: -0px;
                    text-align: center;
                    bottom: 21px;
                    height: auto;
                    border-radius: 999px;
                    width: 6%;
                    border: 3px solid #FE8336;
                }

                .header-9-3 nav .active {
                    position: relative;
                    padding-bottom: 12px;
                    padding-top: 8px;
                }

                .header-9-3 .nav-main {
                    padding: 2.25rem 2rem 2rem;
                }

                .header-9-3 .title-font {
                    font: 700 4.5rem/1.2 'Poppins', sans-serif;
                }

                .header-9-3 .input-text {
                    width: 24rem;
                }
            }

            @media all and (min-width: 992px) {
                .header-9-3 .nav-item .dropdown-menu {
                    display: none;
                }

                .header-9-3 .nav-item:hover .dropdown-menu {
                    display: block;
                }

                .header-9-3 .nav-item .dropdown-menu {
                    margin-top: 0;
                }
            }

            @media (min-width: 1280px) {}
        </style>

        <!-- Navbar -->
        <div class="header-9-3" style="font-family: 'Poppins', sans-serif;">
            <div class="bg-header container mt-5 mx-auto p-0">

                <!-- Hero -->
                <div>
                    <div class="main-header container mx-auto">
                        <div class="header-body mb-44">
                            <h1 class="title-font text-start color-black--1">
                                Pinjam <span style="color: #FE8336">mudah</span><br class="d-sm-block d-none " /> dan
                                <span style="color: #FE8336">aman</span>
                            </h1>
                            <p class="caption-font text-start color-black--2">
                                Kami menyediakan layanan penyewaan
                                <br class="d-sm-block d-none " /> mobil yang mudah dan aman.
                            </p>
                            <div>
                                <div class="d-flex justify-content-start align-items-center mb-4">
                                    <form action="" class="gap-3">
                                        <div class="card-item position-relative bg-white">
                                            <a href="{{ route('cars') }}"
                                                class="btn btn-track d-sm-inline-flex d-none text-white rounded-lg">Lihat
                                                Mobil
                                                <svg class="arrow ms-2" width="24" height="28" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19.75 11.7256L4.75 11.7256" stroke="white" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M13.7002 5.70124L19.7502 11.7252L13.7002 17.7502"
                                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                        <a href="{{ route('cars') }}"
                                            class="btn btn-track d-sm-none d-block mx-auto text-white rounded-lg">Lihat
                                            Mobil</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Navbar -->
        <script>
            $(document).ready(function() {
                $(function() {
                    $(document).scroll(function() {
                        var $nav = $(".header-9-3 .header-sticky");
                        $nav.toggleClass('header-9-3 scrolled', $(this).scrollTop() > $nav
                            .height());
                    });
                });
            });
        </script>
    </section>
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box;">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .content-7-3 p,
            .content-7-3 h1 {
                margin: 0rem;
            }

            .content-7-3 .main {
                padding: 4rem 2rem 3.5rem;
            }

            .content-7-3 .title-font {
                font: 800 3rem/1.25 'Poppins', sans-serif;
                color: #1e2d40;
                letter-spacing: -0.025em;
                margin-bottom: 2rem;
            }

            .content-7-3 .caption-text {
                font: normal 1rem/2rem 'Poppins', sans-serif;
                letter-spacing: 0.05em;
                color: #9a9aa7;
                margin-bottom: 4rem;
            }

            .content-7-3 .btn-learn {
                font: 500 1.125rem/1.75rem 'Poppins', sans-serif;
                padding: 1rem 2.25rem;
                border-radius: 9999px;

                background-color: #195AFF;
                transition: 0.3s;
            }

            .content-7-3 .btn-learn:hover {
                background-color: #0343E5;
                transition: 0.3s;
            }

            .content-7-3 .btn-learn .arrow {
                left: 0px;
                transition: 0.4s;
                position: relative;
            }

            .content-7-3 .btn-learn:hover .arrow {
                left: 3px;
                transition: 0.4s;
                position: relative;
            }

            @media (min-width: 768px) {
                .content-7-3 .main {
                    padding: 4rem 4rem 3.5rem;
                }
            }

            @media (min-width: 992px) {
                .content-7-3 {
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                }

                .content-7-3 .title-font {
                    font: 800 3.75rem/1.25 'Poppins', sans-serif;
                }

                .content-7-3 .caption-text {
                    margin-bottom: 5rem;
                }

                .content-7-3 .main {
                    padding: 2.25rem 7rem 3.5rem;
                }
            }
        </style>
        <!-- Navbar -->
        <div class="content-7-3" style="font-family: 'Poppins', sans-serif">
            <div class="container mx-auto row main d-flex">
                <!-- Left Column -->
                <div class="col-lg-6 p-0 my-auto text-left mb-5 mb-lg-auto">
                    <h1 class="title-font">Apa itu Pinjamobi?
                    </h1>
                    <p class="caption-text">
                        Pinjamobil adalah website penyewaan mobil yang di mana Penyewa dan Pemilik Rental dapat melakukan
                        transaksi penyewaan mobil dan menggunakan berbagai fitur serta layanan yang tersedia.
                    </p>
                </div>
                <!-- Right Column -->
                <div class="col-lg-6 p-xxl-0 text-center">
                    <img id="hero" class="w-100" style="object-fit: cover;" src="/images/hero3.jpg" alt="" />
                </div>
            </div>
        </div>
    </section>
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .content-7-2 p,
            .content-7-2 h1 {
                margin: 0rem;
            }

            .content-7-2 .main {
                padding: 5rem 2rem;
            }

            .content-7-2 .card-item {
                border-radius: 1.5rem;
                padding-top: 2.5rem;
                padding-bottom: 2rem;
                box-shadow: 0px 10px 45px 0px rgba(0, 0, 0, 0.04);
            }

            .content-7-2 .btn-get {
                font: 500 1.125rem/1.75rem "Poppins", sans-serif;
                margin-top: 2rem;
                color: #fe7624;
                transition: 0.3s;
            }

            .content-7-2 .btn-get:hover {
                color: #dc651d;
                text-decoration: underline;
                transition: 0.3s;
            }

            .content-7-2 .title-text {
                font: 600 3rem/1 "Poppins", sans-serif;
                margin-bottom: 0.75rem;
                color: #1e2d40;
            }

            .content-7-2 .caption-text {
                font-size: 0.875rem;
                line-height: 1.5rem;
                color: #9a9aa7;
            }

            .content-7-2 .text-section {
                margin-bottom: 3rem;
            }

            .content-7-2 .column {
                margin-bottom: 1.5rem;
            }

            .content-7-2 .title-item {
                font: 500 1.25rem/1.625 "Poppins", sans-serif;
                padding-top: 1.25rem;
                padding-bottom: 0.625rem;
                color: #1e2d40;
            }

            .content-7-2 .caption-item {
                font-size: 0.875rem;
                line-height: 1.5rem;
                color: #9a9aa7;
            }

            .content-7-2 .no-card {
                padding-top: 2rem;
                padding-bottom: 2rem;
            }

            @media (min-width: 992px) {
                .content-7-2 .text-section {
                    margin-bottom: 5rem;
                }

                .content-7-2 .column {
                    margin-bottom: 0rem;
                }

                .content-7-2 .main {
                    padding: 5rem 8rem;
                }
            }
        </style>
        <div class="content-7-2" style="font-family: 'Poppins', sans-serif">
            <div class="container mx-auto main">
                <div class="text-center text-section">
                    <h1 class="title-text">Cara Penyewaan</h1>
                    <p class="caption-text">
                        3 langkah mudah untuk menyewa mobil<br class="d-sm-block d-none" />
                        di website Pinjamobi
                    </p>
                </div>
                <div class="d-flex row gap-lg-5 gap-3 justify-content-center">
                    <div class="w-auto p-xxl-0 col-lg-4 col-12 column">
                        <div class="no-card h-100 text-center">
                            <img class="mx-auto container p-0" src="/images/sewa1.jpg" />
                            <h5 class="title-item">Buat Akun</h5>
                            <p class="caption-item">
                                Buat akun di Pinjamobi untuk dapat<br />
                                mulai menyewa mobil
                            </p>
                        </div>
                    </div>
                    <div class="w-auto p-xxl-0 col-lg-4 col-12 column">
                        <div class="no-card h-100 text-center">
                            <img class="mx-auto container p-0" src="/images/sewa2.jpg" />
                            <h5 class="title-item">Pilih Mobil</h5>
                            <p class="caption-item">
                                Temukan banyak merk mobil dari<br />
                                berbagai rental di sini
                            </p>
                        </div>
                    </div>
                    <div class="w-auto p-xxl-0 col-lg-4 col-12 column">
                        <div class="no-card h-100 text-center">
                            <img class="mx-auto container p-0" src="/images/sewa3.jpg" />
                            <h5 class="title-item">Ambil Mobil</h5>
                            <p class="caption-item">
                                Datang ke tempat rental mobil untuk<br />
                                mengambil mobil yang disewa
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #fffefc">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .content-6-1 p,
            .content-6-1 h5 {
                margin: 0rem;
            }

            .content-6-1.main {
                padding: 80px 24px;
            }

            .content-6-1 .title-text {
                font: 600 32px/1.25 "Poppins", sans-serif;
                margin-bottom: 86px;
                letter-spacing: 0.025em;
                color: #3a3935;
            }

            .content-6-1 .text-gray-1 {
                color: #444341;
            }

            .content-6-1 .text-gray-2 {
                color: #82817f;
            }

            .content-6-1 .left-column,
            .content-6-1 .right-column {
                margin-bottom: 3rem;
            }

            .content-6-1 .title-item {
                font: 600 1.125rem/1.625 "Poppins", sans-serif;
                padding-top: 0.75rem;
                padding-bottom: 0.75rem;
            }

            .content-6-1 .caption-item {
                font-size: 0.875rem;
                line-height: 1.625;
            }

            @media (min-width: 1024px) {
                .content-6-1 .line {
                    left: 0;
                    right: 0rem;
                    width: 1px;
                    height: 505px;
                    z-index: 50;
                    padding: 0;
                    background-color: #f2f1ec;
                }

                .content-6-1 .left-column,
                .content-6-1 .right-column {
                    margin-bottom: 0rem;
                }

                .content-6-1.main {
                    padding: 80px 120px;
                }
            }

            @media (min-width: 1200px) {
                .content-6-1.main {
                    padding: 80px 200px;
                }
            }
        </style>
        <div class="content-6-1 row container-xxl main mx-auto position-relative d-flex flex-lg-row flex-colimn align-items-center"
            style="font-family: 'Poppins', sans-serif">
            <div class="line position-absolute mx-auto text-center"></div>
            <!-- Left Column -->
            <div class="left-column col-lg-6 text-left d-flex flex-column align-items-lg-left align-items-center">
                <h1 class="title-text text-lg-left text-center">
                    Kenapa Harus<br />Pinjamobi?
                </h1>
                <div class="d-grid gap-5">
                    <div class="w-100">
                        <div class="h-100 text-lg-left text-center">
                            <img class="mx-lg-0 mx-auto"
                                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content6/Content-6-1.png" />
                            <h5 class="title-item text-gray-1">BANYAK PILIHAN</h5>
                            <p class="caption-item text-gray-2">
                                Kami menyediakan banyak pilihan mobil dari berbagai<br class="d-sm-block d-none" />
                                rental mobil yang ada di area Jonggol-Cibubur
                            </p>
                        </div>
                    </div>
                    <div class="w-100">
                        <div class="h-100 text-lg-left text-center mt-4">
                            <img class="mx-lg-0 mx-auto"
                                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content6/Content-6-2.png" />
                            <h5 class="title-item text-gray-1">PEMESANAN MUDAH</h5>
                            <p class="caption-item text-gray-2">
                                Kami membuat sistem pemesanan mobil yang mudah<br class="d-sm-block d-none" />
                                dimengerti oleh semua kalangan yang ada
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Column -->
            <div class="right-column col-lg-6 text-left d-flex flex-column align-items-lg-right align-items-center">
                <div class="d-grid gap-5">
                    <div class="w-100">
                        <div class="h-100 text-lg-left text-center">
                            <img class="mx-lg-0 mx-auto"
                                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content6/Content-6-3.png" />
                            <h5 class="title-item text-gray-1">AKSES MUDAH</h5>
                            <p class="caption-item text-gray-2">
                                Akses dari website kami dapat diakses dengan<br class="d-sm-block d-none" />
                                mudah hanya dengan menggunakan browser
                            </p>
                        </div>
                    </div>
                    <div class="w-100">
                        <div class="h-100 text-lg-left text-center mt-4">
                            <img class="mx-lg-0 mx-auto"
                                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content6/Content-6-4.png" />
                            <h5 class="title-item text-gray-1">PEMBAYARAN MUDAH</h5>
                            <p class="caption-item text-gray-2">
                                Kami memiliki banyak metode pembayaran yang ada<br class="d-sm-block d-none" />
                                menggunakan e-wallet dan bank transfer
                            </p>
                        </div>
                    </div>
                    <div class="w-100">
                        <div class="h-100 text-lg-left text-center mt-4">
                            <img class="mx-lg-0 mx-auto"
                                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content6/Content-6-5.png" />
                            <h5 class="title-item text-gray-1">KUALITAS TERBAIK</h5>
                            <p class="caption-item text-gray-2">
                                Kami selalu menjaga kualitas dari rental mobil dan<br class="d-sm-block d-none" />
                                mobil yang tersedia pada website kami
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
