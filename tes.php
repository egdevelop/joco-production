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
    <!-- <link rel="stylesheet" href="assets/css/style.css?<?php echo time(); ?>"> -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Products</title>
    <style>
    .btnSidenav {
        display: inline-block;
        height: 40px;
        width: 40px;
        text-align: center;
        color: #333;
        border-radius: 50%;
        text-decoration: none;
        font-size: 1.2em;
        margin: 20px;
        float: right;
    }

    #sidenav {
        width: 80%;
        max-width: 300px;
        height: 100%;
        position: fixed;
        right: 0;
        top: 0;
        background: linear-gradient(to left, #673AB7, #5E35B1);
        right: -300px;
        transition: right .35s;
    }

    .sidenav-overlay {
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.3);
        right: 100%;
        top: 0;
        z-index: -1;
        cursor: default;
    }

    #sidenav:target {
        right: 0;
    }

    #sidenav:target+.sidenav-overlay {
        right: 0;
    }

    ul.listSidenav {
        list-style: none;
        height: 100%;
        overflow: auto;
    }

    .center {
        text-align: center;
    }

    .user {
        padding: 20px;
        position: relative;
    }

    .user p {
        color: #eee;
        padding: 10px 0;
    }

    .divider {
        padding: 0;
        height: 1px;
        background: #7e57c2;
    }

    .title {
        color: #b39ddb;
        text-transform: uppercase;
        font-size: 0.8em;
        letter-spacing: 1px;
        padding: 20px;
        padding-bottom: 10px;
    }

    .item {
        background: transparent;
        transition: background .35s;
    }

    .item a {
        text-decoration: none;
        color: #eee;
        display: inline-block;
        padding: 20px;
        padding-left: 30px;
        width: 100%;
    }

    .item.active,
    .item:hover {
        background: rgba(0, 0, 0, .1);
    }
    </style>
</head>

<body>
    <a href="#sidenav" class="btnSidenav open">&#8801;</a>
    <div class="sidenav" id="sidenav">
        <ul class="listSidenav">
            <li class="divider"></li>
            <li class="title">Links</li>
            <li class="item active"><a href="#">Home</a></li>
            <li class="item"><a href="#">About</a></li>
            <li class="item"><a href="#">Portfolio</a></li>
        </ul>
    </div>
    <a href="#!" class="close sidenav-overlay"></a>


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