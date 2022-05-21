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

    <title>Bantuan Akun</title>
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
                    <span class="fz-16 fw-600">Bantuan Akun</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Bantuan Akun -->
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
                    <div class="bg-white py-3 accordion accordion-flush" id="accordionFlushExample">
                        <span class="ps-4 fz-12 fw-bold">FAQ</span>
                        <div class="accordion-item fz-12 mt-3">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="fz-12 accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Apa yang harus di lakukan jika kita lupa sandi ?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul style="padding-left: 20px;">
                                        <li>Masuk ke tab profile</li>
                                        <li>Klik tombol ubah profile</li>
                                        <li>Masuk ke tab “Ubah Sandi”</li>
                                        <li>Kirim OTP ke Email</li>
                                        <li>Masukkan No. OTP</li>
                                        <li>Lalu masukkan sandi barumu</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item fz-12">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="fz-12 accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Bagaimana caranya saya untuk menggunakan voucher ?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul style="padding-left: 20px;">
                                        <li>Masuk ke tab profile</li>
                                        <li>Klik tombol voucher saya untuk melihat voucher yang kamu punya</li>
                                        <li>Klik tombol gunakan voucher untuk menggunakannya</li>
                                        <li>Atau masukkan langsung no.kode voucher yang kamu punya</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item fz-12">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="fz-12 accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Bagaimana caranya saya menggunakan akses grosir di marketplace ?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul style="padding-left: 20px;">
                                        <li> Kamu harus daftar sebagai member untuk mendapatkan aksesnya</li>
                                        <li>Daftar sekarang juga <a href="daftar.php"
                                                class="text-dark text-decoration-underline">KLIK DISINI
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item fz-12">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="fz-12 accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Bagaimana caranya saya daftar sebagai member di marketplace ?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul style="padding-left: 20px;">
                                        <li>Masuk ke tab profile</li>
                                        <li>Klik tombol member lalu ke tab member</li>
                                        <li>Pilih varian member</li>
                                        <li>Klik “Gabung Member Sekarang</li>
                                        <li>Masukkan Detail yang diperlukan lalu bayar</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item fz-12">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="fz-12 accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Bagaimana caranya saya mengundang teman untuk join kedalam member ?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul style="padding-left: 20px;">
                                        <li>Masuk ke tab profile</li>
                                        <li>Klik tombol member lalu ke tab referral</li>
                                        <li>Salin link referralmu</li>
                                        <li>Lalu ajak temanmu untuk join member menggunakan link referral kamu</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item fz-12">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="fz-12 accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Bagaimana caranya saya mengubah email atau nomor telepon saya disini ?
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul style="padding-left: 20px;">
                                        <li>Masuk ke tab profile</li>
                                        <li>Klik tombol nomor telepon atau email ( tergantung ingin mengubah apa )
                                        </li>
                                        <li>Lalu ikuti petunjuk untuk pengubahan email maupun nomor telepon</li>
                                        <li>Selesai</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white mt-3 py-2 accordion accordion-flush" id="accordionFlushExample">
                        <div class="container accordion-item fz-12">
                            <div class="accordion-header my-2">
                                <div class="text-dark d-flex justify-content-between">
                                    <span class="fz-12">Chat Admin Sekarang</span>
                                    <i class="ri-arrow-right-s-line"></i>
                                </div>
                            </div>
                        </div>
                        <div class="container accordion-item fz-12">
                            <div class="accordion-header my-2">
                                <div class="text-dark d-flex justify-content-between">
                                    <span class="fz-12">Telepon</span>
                                    <i class="ri-arrow-right-s-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Navbar Bottom -->
    <?php include "components/navBottomAkun.php"; ?>


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