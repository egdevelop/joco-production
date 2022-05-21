<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/img/favicon.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css?<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Products</title>
</head>

<body>

    <div class="body-wrapper">
        <!-- Desktop -->
        <div class="d-none d-lg-block">
            <?php include "components/navbar.php" ?>
        </div>
        <!-- mobile -->
        <div class="bg-blue text-light py-4 d-block d-lg-none">
            <div class="container">
                <div class="d-flex gap-2 justify-content-between">
                    <a onclick="history.back()" class="text-light left d-flex align-items-center gap-2">
                        <i class="ri-arrow-left-s-line"></i>
                    </a>
                    <form class="d-flex align-items-center justify-content-center nosubmit">
                        <input class="nosubmit z-1 form-control" type="search" placeholder="Cari produk"
                            aria-label="Search">
                    </form>
                    <a href="#sidenav" class="btnSidenav open d-flex align-items-center gap-2">
                        <i class="text-light ri-filter-2-line"></i>
                        <span class="text-light fz-12">Filter</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="sidenav" id="sidenav">
            <div class="listSidenav">
                <div class="bg-abu pt-4 pb-2 mb-3">
                    <span class="container fz-14 fw-600">Filter</span>
                </div>
                <div class="container">
                    <span class="fz-12 fw-500">Tipe barang</span>
                    <div class="row d-flex justify-content-center mt-2 gap-2">
                        <div class="d-flex justify-content-center col-5 bg-abu p-2 text-dark ">
                            <span class="fz-10">Eceran</span>
                        </div>
                        <div class="d-flex justify-content-center col-5 bg-abu p-2 text-dark ">
                            <span class="fz-10">Grosir</span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <span class="fz-12 fw-500">Batas Harga (Rp)</span>
                        <div class="mt-2 d-flex align-items-center justify-content-center gap-2 bg-abu px-2 py-1">
                            <input style="border: none; outline:none; width: 100px"
                                class="custom-input bg-white gap-3 align-items-center justify-content-center z-1 form-control fz-12"
                                type="text" placeholder="Min">
                            <span>-</span>
                            <input style="border: none; outline:none; width: 100px"
                                class="custom-input bg-white gap-3 align-items-center justify-content-center z-1 form-control fz-12"
                                type="text" placeholder="Max">
                        </div>
                    </div>
                    <div class="mt-3 d-flex justify-content-between gap-1">
                        <div class="bg-abu px-2 py-1">
                            <span class="fz-10 fw-600">0-75RB</span>
                        </div>
                        <div class="bg-abu px-2 py-1">
                            <span class="fz-10 fw-600">75RB-150RB</span>
                        </div>
                        <div class="bg-abu px-2 py-1">
                            <span class="fz-10 fw-600">150RB></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#!" class="close sidenav-overlay"></a>

        <!-- Products -->
        <div class="bg-white-filter container pb-2 pb-sm-4 px-2 px-sm-4 pt-filter">
            <div class="container">
                <div class="row">
                    <!-- Desktop -->
                    <div class="col-4 d-none d-lg-flex flex-column">
                        <div class="left d-flex gap-2 align-items-center">
                            <i class="text-dark ri-filter-2-line"></i>
                            <span class="fz-16 fw-bold">Filter</span>
                        </div>
                        <div class="mt-3">
                            <span class="fz-14">Tipe Barang</span>
                            <div class="form-check d-flex gap-3 fz-12 mt-3">
                                <input class="form-check-input" type="checkbox" value="" id="check1">
                                <label class="form-check-label" for="check1">
                                    Eceran
                                </label>
                            </div>
                            <div class="form-check d-flex gap-3 fz-12">
                                <input class="form-check-input" type="checkbox" value="" id="check2">
                                <label class="form-check-label" for="check2">
                                    Grosir
                                </label>
                            </div>
                        </div>
                        <div class="mt-5">
                            <span class="fz-14">Batas Harga</span>
                            <div class="d-flex gap-4">
                                <div class="d-flex flex-column">
                                    <input style="border: none; outline:none; width: 100px"
                                        class="custom-input bg-white py-2 mt-lg-3 gap-3 align-items-center justify-content-center z-1 form-control fz-12"
                                        type="text">
                                    <span class="fz-12">Min</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <input style="border: none; outline:none; width: 100px"
                                        class="custom-input bg-white py-2 mt-lg-3 gap-3 align-items-center justify-content-center z-1 form-control fz-12"
                                        type="text">
                                    <span class="fz-12">Max</span>
                                </div>
                            </div>
                            <button style="width: 225px"
                                class="d-flex justify-content-center mt-3 fz-12 btn bg-blue px-2 py-1 text-light">Terapkan</button>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 container pb-5 mb-3">
                        <!-- Desktop -->
                        <div
                            class="bg-white pt-3 pb-2 px-2 row d-none d-lg-flex flex-column flex-lg-row justify-content-lg-between">
                            <div class="col-6 col-md-3 mb-2 px-2">
                                <div class="bg-blue text-light p-2 p-md-3">
                                    <span class="fw-bold fz-12">Terkait</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-2 px-2">
                                <div class="bg-abu p-2 text-dark p-2 p-md-3">
                                    <span class="fw-bold fz-12">Terbaru</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-2 px-2">
                                <div class="bg-abu p-2 p-md-3 text-dark p-2">
                                    <span class="fw-bold fz-12">Terlaris</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-2 px-2">
                                <div
                                    class="bg-abu text-dark p-2 p-md-3 d-flex align-items-center justify-content-between">
                                    <div class="fw-bold fz-12">Harga</div>
                                    <div><i class="ri-arrow-down-s-line"></i></div>
                                </div>
                            </div>
                        </div>
                        <ul onclick="myFunction(event)" id='myTab'
                            class="ulCustom nav nav-tabs d-flex d-lg-none justify-content-between gap-2 gap-lg-3 pt-4 pt-lg-0 flex-nowrap"
                            role="tablist">
                            <li class="nav-item fz-14 fw-600 px-1 px-lg-3" role="presentation">
                                <button class="nav-link-custom activePesanan" id="act terkait" data-bs-toggle="tab"
                                    data-bs-target="#Terkait" type="button" role="tab" aria-controls="Terkait"
                                    aria-selected="true">Terkait</button>
                            </li>
                            <span class="d-none d-lg-block" style="color: rgba(196, 196, 196, 0.3);">|</span>
                            <li class="nav-item fz-14 fw-600 px-1 px-lg-3" role="presentation">
                                <button class="nav-link-custom" id="act terbaru" data-bs-toggle="tab"
                                    data-bs-target="#Terbaru" type="button" role="tab" aria-controls="Terbaru"
                                    aria-selected="false">Terbaru</button>
                            </li>
                            <span class="d-none d-lg-block" style="color: rgba(196, 196, 196, 0.3);">|</span>
                            <li class="nav-item fz-14 fw-600 px-1 px-lg-3" role="presentation">
                                <button class="nav-link-custom" id="act terlaris" data-bs-toggle="tab"
                                    data-bs-target="#Terlaris" type="button" role="tab" aria-controls="Terlaris"
                                    aria-selected="false">Terlaris</button>
                            </li>
                            <span class="d-none d-lg-block" style="color: rgba(196, 196, 196, 0.3);">|</span>
                            <li class="nav-item fz-14 fw-600 px-1 px-lg-3" role="presentation">
                                <button class="nav-link-custom d-flex gap-1" id="act harga" data-bs-toggle="tab"
                                    data-bs-target="#Harga" type="button" role="tab" aria-controls="Harga"
                                    aria-selected="false">
                                    <span class="fz-14">Harga</span>
                                    <i class="ri-arrow-down-s-line"></i>
                                </button>
                            </li>
                        </ul>
                        <div class="mt-3 row">
                            <div class="tab-content" id="myTabContent">
                                <div class="row tab-pane fade mb-5 show active" id="Terkait" role="tabpanel"
                                    aria-labelledby="terkait">
                                    <div class="col-6 col-sm-4 col-md-3 col-xl-3 px-2 my-2">
                                        <a href="detail-produk.php">
                                            <div class="card">
                                                <img src="assets/img/products5.jpg" alt="" class="w-100">
                                                <div class="d-flex flex-column desc py-2 px-2 px-lg-3">
                                                    <span class="text-dark fw-600 mt-1 mb-2 fz-12 fw-600">Topi Fashion
                                                        <br> Anak
                                                        Laki-Laki &
                                                        Perempuan
                                                    </span>
                                                    <span class="orange fw-bold fz-10">Rp13.900 - Rp13.990</span>
                                                    <div class="d-flex justify-content-between flex-column flex-sm-row">
                                                        <div class="left">
                                                            <span class="yellow fz-9"><i
                                                                    class="yellow fz-9 ri-star-fill"></i></span>
                                                            <span class="yellow fz-9"><i
                                                                    class="yellow fz-9 ri-star-fill"></i></span>
                                                            <span class="yellow fz-9"><i
                                                                    class="yellow fz-9 ri-star-fill"></i></span>
                                                            <span class="yellow fz-9"><i
                                                                    class="yellow fz-9 ri-star-fill"></i></span>
                                                            <span class="yellow fz-9"><i
                                                                    class="yellow fz-9 ri-star-fill"></i></span>
                                                        </div>
                                                        <div class="right">
                                                            <span class="black fz-10 fw-600">112 terjual</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>



                                <div class="tab-pane fade" id="Terbaru" role="tabpanel" aria-labelledby="terbaru">
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-3 col-xl-3 px-2 my-2">
                                            <a href="detail-produk.php">
                                                <div class="card">
                                                    <img src="assets/img/products5.jpg" alt="" class="w-100">
                                                    <div class="d-flex flex-column desc py-2 px-2 px-lg-3">
                                                        <span class="text-dark fw-600 mt-1 mb-2 fz-12 fw-600">Topi
                                                            Fashion
                                                            <br> Anak
                                                            Laki-Laki &
                                                            Perempuan
                                                        </span>
                                                        <span class="orange fw-bold fz-10">Rp13.900 - Rp13.990</span>
                                                        <div
                                                            class="d-flex justify-content-between flex-column flex-sm-row">
                                                            <div class="left">
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                            </div>
                                                            <div class="right">
                                                                <span class="black fz-10 fw-600">112 terjual</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 col-xl-3 px-2 my-2">
                                            <a href="detail-produk.php">
                                                <div class="card">
                                                    <img src="assets/img/products5.jpg" alt="" class="w-100">
                                                    <div class="d-flex flex-column desc py-2 px-2 px-lg-3">
                                                        <span class="text-dark fw-600 mt-1 mb-2 fz-12 fw-600">Topi
                                                            Fashion
                                                            <br> Anak
                                                            Laki-Laki &
                                                            Perempuan
                                                        </span>
                                                        <span class="orange fw-bold fz-10">Rp13.900 - Rp13.990</span>
                                                        <div
                                                            class="d-flex justify-content-between flex-column flex-sm-row">
                                                            <div class="left">
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                            </div>
                                                            <div class="right">
                                                                <span class="black fz-10 fw-600">112 terjual</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="Terlaris" role="tabpanel" aria-labelledby="terlaris">
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-3 col-xl-3 px-2 my-2">
                                            <a href="detail-produk.php">
                                                <div class="card">
                                                    <img src="assets/img/products5.jpg" alt="" class="w-100">
                                                    <div class="d-flex flex-column desc py-2 px-2 px-lg-3">
                                                        <span class="text-dark fw-600 mt-1 mb-2 fz-12 fw-600">Topi
                                                            Fashion
                                                            <br> Anak
                                                            Laki-Laki &
                                                            Perempuan
                                                        </span>
                                                        <span class="orange fw-bold fz-10">Rp13.900 - Rp13.990</span>
                                                        <div
                                                            class="d-flex justify-content-between flex-column flex-sm-row">
                                                            <div class="left">
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                            </div>
                                                            <div class="right">
                                                                <span class="black fz-10 fw-600">112 terjual</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="Harga" role="tabpanel" aria-labelledby="harga">
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-3 col-xl-3 px-2 my-2">
                                            <a href="detail-produk.php">
                                                <div class="card">
                                                    <img src="assets/img/products5.jpg" alt="" class="w-100">
                                                    <div class="d-flex flex-column desc py-2 px-2 px-lg-3">
                                                        <span class="text-dark fw-600 mt-1 mb-2 fz-12 fw-600">Topi
                                                            Fashion
                                                            <br> Anak
                                                            Laki-Laki &
                                                            Perempuan
                                                        </span>
                                                        <span class="orange fw-bold fz-10">Rp13.900 - Rp13.990</span>
                                                        <div
                                                            class="d-flex justify-content-between flex-column flex-sm-row">
                                                            <div class="left">
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                            </div>
                                                            <div class="right">
                                                                <span class="black fz-10 fw-600">112 terjual</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 col-xl-3 px-2 my-2">
                                            <a href="detail-produk.php">
                                                <div class="card">
                                                    <img src="assets/img/products5.jpg" alt="" class="w-100">
                                                    <div class="d-flex flex-column desc py-2 px-2 px-lg-3">
                                                        <span class="text-dark fw-600 mt-1 mb-2 fz-12 fw-600">Topi
                                                            Fashion
                                                            <br> Anak
                                                            Laki-Laki &
                                                            Perempuan
                                                        </span>
                                                        <span class="orange fw-bold fz-10">Rp13.900 - Rp13.990</span>
                                                        <div
                                                            class="d-flex justify-content-between flex-column flex-sm-row">
                                                            <div class="left">
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                                <span class="yellow fz-9"><i
                                                                        class="yellow fz-9 ri-star-fill"></i></span>
                                                            </div>
                                                            <div class="right">
                                                                <span class="black fz-10 fw-600">112 terjual</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Bottom -->
        <?php include "components/navBottomHome.php"; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="scripts.js"></script>
    <script>
    var mainNav = document.querySelector('.main-nav');

    window.onscroll = function() {
        windowScroll();
    };

    var slider1 = new Swiper('.slider1', {
        preloadImages: false,
        slidesPerView: 2,
        slidesPerGroup: 2,
        spaceBetween: 15,
        loop: false,
        grabCursor: true,
        mousewheel: false,
        centeredSlides: false,
        pagination: {
            el: '.tc-pagination',
            clickable: true,
            dynamicBullets: false,
        },
        navigation: {
            nextEl: '.listing-carousel-button-next',
            prevEl: '.listing-carousel-button-prev',
        },
        breakpoints: {
            310: {
                spaceBetween: 16,
            },
            320: {
                slidesPerView: 2,
                slidesPerGroup: 2,
                spaceBetween: 18,
            },

            576: {
                slidesPerView: 3,
                slidesPerGroup: 3,
                spaceBetween: 30,
            },

            768: {
                slidesPerView: 4,
                slidesPerGroup: 4,
                spaceBetween: 30,
            },

            992: {
                slidesPerView: 6,
                slidesPerGroup: 6,
                spaceBetween: 30,
            },
        },
    });


    var slider2 = new Swiper('.slider2', {
        preloadImages: false,
        slidesPerView: 2,
        slidesPerGroup: 2,
        spaceBetween: 15,
        loop: false,
        grabCursor: true,
        mousewheel: false,
        centeredSlides: false,
        pagination: {
            el: '.tc-pagination',
            clickable: true,
            dynamicBullets: false,
        },
        navigation: {
            nextEl: '.listing-carousel-button-next',
            prevEl: '.listing-carousel-button-prev',
        },
        breakpoints: {
            310: {
                spaceBetween: 16,
            },
            320: {
                slidesPerView: 2,
                slidesPerGroup: 2,
                spaceBetween: 18,
            },

            576: {
                slidesPerView: 3,
                slidesPerGroup: 3,
                spaceBetween: 30,
            },

            768: {
                slidesPerView: 4,
                slidesPerGroup: 4,
                spaceBetween: 30,
            },

            992: {
                slidesPerView: 6,
                slidesPerGroup: 6,
                spaceBetween: 30,
            },
        },
    });

    function windowScroll() {
        mainNav.classList.toggle("bg-blue", mainNav.scrollTop > 50 || document.documentElement.scrollTop > 50);
    }

    document.addEventListener("DOMContentLoaded", function(event) {
        var navCustom = document.querySelectorAll('.nav-link-custom');

        if (navCustom) {

            navCustom.forEach(function(el, key) {

                el.addEventListener('click', function() {
                    console.log(key);

                    el.classList.toggle("activePesanan");

                    navCustom.forEach(function(ell, els) {
                        if (key !== els) {
                            ell.classList.remove('activePesanan');
                        }
                        console.log(els);
                    });
                });
            });
        }
    });
    </script>
</body>

</html>