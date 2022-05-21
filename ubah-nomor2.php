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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Ubah Nomor Telepon</title>
</head>

<body>

    <div class="body-wrapper">
        <div class="d-none d-lg-block">
            <?php include "components/navbarAkun.php" ?>
        </div>
        <div class="bg-white pt-4 pb-3 mb-1 d-block d-lg-none">
            <div class="container">
                <a onclick="history.back()" class="text-dark d-flex gap-2 align-items-center justify-content-start">
                    <span class="fz-20 mt-1"><i class="ri-arrow-left-s-line"></i></span>
                    <span class="fz-16 fw-600">Ubah Nomor Telepon</span>
                </a>
            </div>
        </div>

        <!-- Ubah Email -->
        <section class="py-2 py-lg-4 px-0 px-lg-4 mt-lg-5 pt-lg-5 mb-5">
            <div class="container mt-lg-4 pt-lg-5">
                <div class="row d-flex justify-content-center gap-2">
                    <div class="col-2 left bg-white borad-10 p-4 d-none d-lg-block">
                        <div class="d-flex gap-2">
                            <div class="profile">
                                <img src="<?= ($_SESSION['picture']) ?  $_SESSION['picture'] : "assets/img/profile.jpg" ?>"
                                    alt="" class="profileImg">
                            </div>
                            <div class="d-flex flex-column">
                                <span class="fz-12 fw-bold">Naufal</span>
                                <div class="d-flex gap-2 align-items-center">
                                    <span class="abu"><i class="ri-edit-2-fill"></i></span>
                                    <span class="fz-10 fw-600 abu">Ubah profil</span>
                                </div>
                            </div>
                        </div>
                        <div class="container-menu mt-4">
                            <nav>
                                <ul class="menu">
                                    <li class="fz-12">
                                        <a onclick="location.href = 'profilDetail.php';"
                                            class="cursor-pointer feat-btn activeMenu">
                                            <span class="blue"><i class="ri-user-line"></i></span>
                                            <span>Akun saya</span>
                                        </a>
                                        <ul class="feat-show show">
                                            <li><a href="profilDetail.php" class="activeSubmenu">Profil</a></li>
                                            <li><a href="alamat.php">Alamat</a></li>
                                            <li><a href="ubah-sandi.php">Ubah sandi</a></li>
                                            <li><a href="member.php">Member</a></li>
                                        </ul>
                                    </li>
                                    <li class="fz-12">
                                        <a href="pesanan-saya.php" class="mainMenu">
                                            <span class="blue"><i class="ri-file-list-3-line"></i></span>
                                            <span>Pesanan saya</span>
                                        </a>
                                    </li>
                                    <li class="fz-12">
                                        <a href="notifikasi.php" class="mainMenu">
                                            <span class="blue"><i class="ri-notification-4-line"></i></span>
                                            <span>Notifikasi</span>
                                        </a>
                                    </li>
                                    <li class="fz-12">
                                        <a href="voucher-akun.php" class="mainMenu">
                                            <span class="blue"><i class="ri-coupon-2-line"></i></span>
                                            <span>Voucher</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12 px-0 col-lg-9 p-lg-4 borad-10-res bg-white-res right">
                        <div class="d-flex justify-content-between">
                            <div class="left">
                                <h6 class="fw-600 d-none d-lg-block">Ubah No. Telepon</h6>
                                <p class="fz-14 abu d-none d-lg-block">Silahkan ubah nomor telepon</p>
                            </div>
                        </div>
                        <hr class="my-2 py-0 d-none d-lg-block">
                        <div class="row d-flex gap-2 d-flex justify-content-between">
                            <div class="col-12 col-lg-8 left">
                                <!-- Desktop -->
                                <div class="row align-items-center my-3 d-none d-lg-flex">
                                    <div class="col-4">
                                        <label for="nomor" class="fz-12 col-form-label">Atur No. Telepon
                                            sekarang</label>
                                    </div>
                                    <div class="col-8">
                                        <input class="form-control fz-12" type="text">
                                    </div>
                                </div>
                                <!-- Mobile -->
                                <div class="row align-items-center d-flex d-lg-none">
                                    <div class="col-12 col-lg-9 right">
                                        <span class="fz-12 fw-600 ms-2">Masukkan Nomor Telepon Baru</span>
                                        <input style="border: none;border-radius: 0; outline:none"
                                            class="custom-input py-3 gap-3 align-items-center justify-content-center z-1 form-control fz-12"
                                            type="text" placeholder="No. Telepon">
                                    </div>
                                </div>
                                <!-- Desktop -->
                                <div class="row align-items-center my-3 d-none d-lg-flex">
                                    <div class="col-4">
                                        <label for="otp" class="fz-12 col-form-label">Konfirmasi No. Telepon</label>
                                    </div>
                                    <div class="col-8">
                                        <input class="form-control fz-12" type="text">
                                    </div>
                                </div>
                                <!-- Mobile -->
                                <div class="row align-items-center d-flex d-lg-none my-3">
                                    <div class="col-12 col-lg-9 right">
                                        <span class="fz-12 fw-600 ms-2">Konfirmasi Nomor Telepon Baru</span>
                                        <input style="border: none; outline:none"
                                            class="custom-input bg-white py-3 gap-3 align-items-center justify-content-center z-1 form-control fz-12"
                                            type="text" placeholder="No. Telepon">
                                    </div>
                                </div>
                                <!-- Desktop -->
                                <div class="row d-none d-lg-flex">
                                    <div class="col-4"></div>
                                    <div class="col-12 col-lg-8">
                                        <a href="#"
                                            class="ms-2 btn text-light fz-12 bg-blue px-4 py-2 borad-10 w-auto">Konfirmasi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Navbar Bottom -->
        <a href="#"
            class="position-fixed bottom-0 start-0 py-3 end-0 bg-blue text-light d-flex d-lg-none justify-content-center">
            Simpan
        </a>

    </div>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d005399.js"></script>
    <script>
    $('.feat-btn').click(function() {
        $('nav ul .feat-show').toggleClass('show');
        $('nav ul .serv-show').removeClass('show1');
    });
    $('.serv-btn').click(function() {
        $('nav ul .serv-show').toggleClass('show1');
        $('nav ul .feat-show').removeClass('show');
    });
    $('.mainMenu').click(function() {
        $('nav ul .feat-show').removeClass('show');
        $('nav ul .serv-show').removeClass('show1');
    });
    $('nav ul li').click(function() {
        $(this).addClass('activeMenuSide').siblings.removeClass('activeMenuSide');
    });

    var mainNav = document.querySelector('.main-nav');

    window.onscroll = function() {
        windowScroll();
    };

    function windowScroll() {
        mainNav.classList.toggle("bg-blue", mainNav.scrollTop > 50 || document.documentElement.scrollTop > 50);
    }
    </script>
</body>

</html>