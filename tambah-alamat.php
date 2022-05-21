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

    <title>Tambah Alamat</title>
</head>

<body>

    <div class="d-none d-lg-block">
        <?php include "components/navbarAkun.php" ?>
    </div>
    <div class="bg-white pt-4 pb-3 mb-1 d-block d-lg-none">
        <div class="container">
            <div class="d-flex align-items-center">
                <a onclick="history.back()" class="text-dark d-flex gap-2 align-items-center justify-content-start">
                    <span class="fz-20 mt-1"><i class="ri-arrow-left-s-line"></i></span>
                    <span class="fz-16 fw-600">Tambah Alamat</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Tambah Alamat -->
    <section class="py-2 py-sm-4 px-0 px-sm-4 mt-lg-5 pt-lg-4 mb-5">
        <div class="container mt-lg-5 pt-lg-5 mb-5">
            <div class="row d-flex justify-content-center gap-2">
                <div class="col-2 left bg-white borad-10 p-4 d-none d-lg-block">
                    <div class="d-flex gap-2">
                        <div class="profile">
                            <img src="<?= ($_SESSION['picture']) ?  $_SESSION['picture'] : "assets/img/profile.jpg" ?>"
                                alt="" class="profileImg">
                        </div>
                        <div class="d-flex flex-column">
                            <span
                                class="fz-12 fw-bold"><?= ($_SESSION['name']) ?  $_SESSION['name'] : "Naufal" ?></span>
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
                                    <a onclick="location.href = 'profilDetail.php';" class="cursor-pointer feat-btn">
                                        <span class="blue"><i class="ri-user-line"></i></span>
                                        <span>Akun saya</span>
                                    </a>
                                    <ul class="feat-show">
                                        <li><a href="profilDetail.php">Profil</a></li>
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
                                    <a href="voucher-akun.php" class="mainMenu activeMenu">
                                        <span class="blue"><i class="ri-coupon-2-line"></i></span>
                                        <span>Voucher</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12 px-0 col-lg-9 right">
                    <span class="mx-2 fz-10 fw-600 abu">Kontak</span>
                    <input style="border: none; outline:none"
                        class="custom-input bg-white py-3 gap-3 align-items-center justify-content-center z-1 form-control fz-12"
                        type="text" placeholder="Mochammad Naufal">
                    <hr class="my-0 py-0">
                    <input style="border: none; outline:none"
                        class="custom-input bg-white mb-2 py-3 gap-3 align-items-center justify-content-center z-1 form-control fz-12"
                        type="text" placeholder="(+62) 858-9537-2384">
                    <span class="mx-2 fz-10 fw-600 abu">Alamat</span>
                    <input style="border: none; outline:none"
                        class="custom-input bg-white py-3 gap-3 align-items-center justify-content-center z-1 form-control fz-12"
                        type="text" placeholder="JAWA BARAT">
                    <hr class="my-0 py-0">
                    <input style="border: none; outline:none"
                        class="text-uppercase custom-input bg-white py-3 gap-3 align-items-center justify-content-center z-1 form-control fz-12"
                        type="text" placeholder="KOTA TASIKMALAYA">
                    <hr class="my-0 py-0">
                    <input style="border: none; outline:none"
                        class="text-uppercase custom-input bg-white py-3 gap-3 align-items-center justify-content-center z-1 form-control fz-12"
                        type="text" placeholder="TAWANG">
                    <hr class="my-0 py-0">
                    <input style="border: none; outline:none"
                        class="text-uppercase custom-input bg-white mb-2 py-3 gap-3 align-items-center justify-content-center z-1 form-control fz-12"
                        type="text" placeholder="46112">
                    <span class="mx-2 fz-10 fw-600 abu">Detail</span>
                    <input style="border: none; outline:none"
                        class="custom-input bg-white py-3 mt-lg-3 gap-3 align-items-center justify-content-center z-1 form-control fz-12"
                        type="text" placeholder="Jl RS Fatmawati 15 Golden Plaza Bl G/26 Lt 2, Dki Jakarta">
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Navbar Bottom -->
    <button class="btn position-fixed py-3 text-light bg-blue bottom-0 start-0 end-0">
        <div class="container d-flex justify-content-center">
            <span class="fz-12">Simpan</span>
        </div>
    </button>

    <script>
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

    var mainNav = document.querySelector('.main-nav');

    window.onscroll = function() {
        windowScroll();
    };

    function windowScroll() {
        mainNav.classList.toggle("bg-blue", mainNav.scrollTop > 50 || document.documentElement.scrollTop > 50);
    }
    </script>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>