<?php
session_start();
include "server/config/db.php";
$user = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM users WHERE id = '$_SESSION[userid]'"));
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <title>Member</title>
</head>

<body>

    <div class="body-wrapper">
        <div class="d-none d-lg-block">
            <?php include "components/navbarAkun.php" ?>
        </div>
        <div class="bg-white pt-4 pb-2">
            <div class="container">
                <a onclick="history.back()" class="text-dark d-flex gap-2 align-items-center justify-content-start">
                    <span class="fz-20 mt-1"><i class="ri-arrow-left-s-line"></i></span>
                    <span class="fz-16 fw-600">Member</span>
                </a>
            </div>
        </div>

        <!-- member -->
        <section class="py-lg-2 py-sm-4 px-0 px-sm-4 mt-lg-5 mb-lg-5">
            <div class="container mt-lg-5">
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
                                        <a onclick="location.href = 'profilDetail.php';"
                                            class="cursor-pointer feat-btn activeMenu">
                                            <span class="blue"><i class="ri-user-line"></i></span>
                                            <span>Akun saya</span>
                                        </a>
                                        <ul class="feat-show show">
                                            <li><a href="profilDetail.php">Profil</a></li>
                                            <li><a href="alamat.php">Alamat</a></li>
                                            <li><a href="ubah-sandi.php">Ubah sandi</a></li>
                                            <li><a href="member.php" class="activeSubmenu">Member</a></li>
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
                    <div class="col-12 px-0 col-lg-9 right d-flex flex-column">
                        <div class="bg-white borad-10-res p-md-2 p-lg-2">
                            <ul style="border: none;" onclick="myFunction(event)" id='myTab'
                                class="ulCustom nav nav-tabs d-flex align-items-start justify-content-center justify-content-lg-between gap-4 gap-lg-0 mx-3 pt-lg-4 pt-0 flex-nowrap"
                                role="tablist">
                                <li class="mt-3 nav-item fz-14 fw-600 px-1 px-lg-3" role="presentation">
                                    <button class="nav-link-custom activePesanan" id="act semua" data-bs-toggle="tab"
                                        data-bs-target="#Semua" type="button" role="tab" aria-controls="Semua"
                                        aria-selected="true">Refferalku</button>
                                </li>
                                <span class="mt-3 d-none d-lg-block" style="color: rgba(196, 196, 196, 0.3);">|</span>
                                <li class="mt-3 nav-item fz-14 fw-600 px-1 px-lg-3" role="presentation">
                                    <button class="nav-link-custom" id="act belum-bayar" data-bs-toggle="tab"
                                        data-bs-target="#BelumBayar" type="button" role="tab" aria-controls="BelumBayar"
                                        aria-selected="false">Memberku</button>
                                </li>
                                <span class="mt-3 d-none d-lg-block" style="color: rgba(196, 196, 196, 0.3);">|</span>
                                <li
                                    class="mt-2 nav-item fz-14 fw-600 px-1 px-lg-3 d-none d-lg-flex align-items-start justify-content-between gap-3">
                                    <div class="d-flex flex-column">
                                        <span class="fz-12 fw-600">120:24:20</span>
                                        <span class="fz-10">Waktu Berakhir Member Tersisa</span>
                                    </div>
                                </li>
                                <li
                                    class="nav-item fz-14 fw-600 px-1 px-lg-3 d-none d-lg-flex align-items-center justify-content-between gap-3">
                                    <div class="d-flex flex-column">
                                        <img src="assets/img/starSmall.svg" alt="" class="starSmall">
                                        <span class="fz-12 fw-600">Member - 2 Bulan</span>
                                    </div>
                                    <div class="right">
                                        <!-- <span class="bg-blue fw-500 rounded-pill text-light px-3 fz-12">Aktif</span> -->
                                        <span class="bg-badge fw-500 rounded-pill text-light px-3 fz-10">
                                            Tidak Aktif</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade mb-lg-5 show active" id="Semua" role="tabpanel"
                                aria-labelledby="semua">
                                <div class="bg-white mt-3 borad-10 p-3 p-lg-4">
                                    <div class="row d-flex align-items-center justify-content-between">
                                        <div class="col-12 col-lg-6 d-flex align-items-center flex-column gap-4">
                                            <img src="assets/img/kadoBig.svg" alt="" class="kadoBig">
                                            <span class="d-none d-lg-block fz-12">Syarat & Ketentuan berlaku</span>
                                        </div>
                                        <div class="col-12 col-lg-6 d-flex flex-column align-items-center">
                                            <span class="fz-16 fw-bold text-center mb-5">Daftar member dan dapatkan
                                                benefitnya</span>
                                            <div class="d-flex align-items-start gap-lg-3">
                                                <div class="d-flex flex-column align-items-center">
                                                    <span class="fz-14 fw-600">1</span>
                                                    <img src="assets/img/tutorIcon.svg" alt="">
                                                    <span class="fz-9 text-center mt-2 fw-600">Temanmu daftar member
                                                        menggunakan
                                                        link
                                                        kamu</span>
                                                </div>
                                                <i class="mt-3 ri-arrow-right-line"></i>
                                                <div class="d-flex flex-column align-items-center">
                                                    <span class="fz-14 fw-600">2</span>
                                                    <img src="assets/img/tutorIcon.svg" alt="">
                                                    <span class="fz-9 text-center mt-2 fw-600">Temanmu membeli barang
                                                        grosir di marketplace</span>
                                                </div>
                                                <i class="mt-3 ri-arrow-right-line"></i>
                                                <div class="d-flex flex-column align-items-center">
                                                    <span class="fz-14 fw-600">3</span>
                                                    <img src="assets/img/tutorIcon.svg" alt="">
                                                    <span class="fz-9 text-center mt-2 fw-600">Kamu akan mendapatkan
                                                        benefit 5% dari pembelian</span>
                                                </div>
                                            </div>
                                            <div
                                                class="border-refferal py-2 py-lg-4 mt-4 mt-lg-2 w-100 d-flex align-items-center flex-column gap-2">
                                                <span class="fz-10 fw-500">Link Refferal Saya</span>
                                                <div class="d-flex align-items-center">
                                                    <span
                                                        class="fz-12 fw-600">https://legacy-market.egdev.co/join.php?code=<?= $user['referal'] ?></span>
                                                    <i class="ri-file-copy-line blue fw-600"></i>
                                                </div>
                                            </div>
                                            <button
                                                class="mt-3 d-flex justify-content-center text-light w-100 btn bg-blue py-2 fz-12">Bagikan
                                                Sekarang</button>
                                            <span class="d-block d-lg-none my-4 fz-12 text-dark">Syarat & Ketentuan
                                                berlaku</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="BelumBayar" role="tabpanel" aria-labelledby="belum-bayar">
                                <div class="bg-white mt-3 borad-10 p-3 p-lg-4">
                                    <!-- Member Aktif 1 -->
                                    <div class="d-block d-lg-none bg-white mt-3 p-3 p-lg-4">
                                        <div class="d-flex align-items-center gap-3 flex-column">
                                            <img src="assets/img/starSmall.svg" alt="" class="starSmall">
                                            <span class="fz-14 fw-600">Member - 2 Bulan</span>
                                            <span class="bg-blue fw-500 rounded-pill text-light px-3 fz-12">Aktif</span>
                                            <span class="fz-18 fw-bold">120:24:20</span>
                                            <span class="fz-10">Waktu Berakhir Member Tersisa</span>
                                        </div>
                                    </div>
                                    <!-- End Member Aktif 1 -->

                                    <div
                                        class="d-flex align-items-start justify-content-center justify-content-lg-between">
                                        <!-- Member Tidak Aktif -->
                                        <div class="left d-flex flex-column align-items-center gap-4">
                                            <img src="assets/img/starBig1.svg" alt="" class="starBig1">
                                            <span class="fz-14 fw-600">Member - 2 Bulan</span>
                                            <div class="d-flex gap-2">
                                                <span class="fz-8">Beli Paket tahunan dan dapatkan</span>
                                                <span class="px-1 bg-yellow text-light fz-8 rounded-pill">Hemat
                                                    50%</span>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="fz-18 fw-600">Rp200.000,-</span>
                                                <span class="text-dark fz-10 rounded-pill">per 2 bulan</span>
                                            </div>
                                            <div class="d-flex">
                                                <span onclick="timeSelect('2bulan')"
                                                    class="bg-blue fw-600 rounded-pill text-light px-2  fz-10">2
                                                    bulan</span>
                                                <span onclick="timeSelect('5bulan')"
                                                    class="bg-abu fw-600 rounded-pill text-dark px-2  fz-10">5
                                                    bulan</span>
                                                <span onclick="timeSelect('1tahun')"
                                                    class="bg-abu fw-600 rounded-pill text-dark px-2  fz-10">1
                                                    tahun</span>
                                            </div>
                                            <a href="daftar.php?paket=2bulan" id="gabungBtn"
                                                class="fz-12 btn text-light d-none d-lg-flex justify-content-center bg-blue py-2">Gabung
                                                Member
                                                Sekarang</a>
                                        </div>
                                        <!-- End Member Tidak Aktif -->

                                        <!-- Member Aktif 2 -->
                                        <!-- <div class="d-flex flex-column pb-5">
                                            <div
                                                class="d-flex align-items-center justify-content-between justify-content-md-center gap-3 mb-3">
                                                <span class="fz-12 fw-600">Teman yang berhasil diundang</span>
                                                <span class="fz-10">Bonus 5% yang didapat</span>
                                            </div>
                                            <section class="sliderMember">
                                                <div class="swiper mySwiper container">
                                                    <div class="swiper-wrapper content">
                                                        <div class="swiper-slide card">
                                                            <div class="card-content">
                                                                <div
                                                                    class="borbot d-flex align-items-end justify-content-between">
                                                                    <div class="left d-flex align-items-center gap-2">
                                                                        <img src="assets/img/profile.jpg"
                                                                            class="profilMember" alt="">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fz-12 fw-600">Falch12</span>
                                                                            <span class="fz-9"> Diundang 09/20/22</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="right">
                                                                        <span
                                                                            class="fz-9 fw-bold hijauMember">Rp5.000</span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="borbot d-flex align-items-end justify-content-between">
                                                                    <div class="left d-flex align-items-center gap-2">
                                                                        <img src="assets/img/profile.jpg"
                                                                            class="profilMember" alt="">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fz-12 fw-600">Falch12</span>
                                                                            <span class="fz-9"> Diundang 09/20/22</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="right">
                                                                        <span
                                                                            class="fz-9 fw-bold hijauMember">Rp5.000</span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="borbot d-flex align-items-end justify-content-between">
                                                                    <div class="left d-flex align-items-center gap-2">
                                                                        <img src="assets/img/profile.jpg"
                                                                            class="profilMember" alt="">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fz-12 fw-600">Falch12</span>
                                                                            <span class="fz-9"> Diundang 09/20/22</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="right">
                                                                        <span
                                                                            class="fz-9 fw-bold hijauMember">Rp5.000</span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="borbot d-flex align-items-end justify-content-between">
                                                                    <div class="left d-flex align-items-center gap-2">
                                                                        <img src="assets/img/profile.jpg"
                                                                            class="profilMember" alt="">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fz-12 fw-600">Falch12</span>
                                                                            <span class="fz-9"> Diundang 09/20/22</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="right">
                                                                        <span
                                                                            class="fz-9 fw-bold hijauMember">Rp5.000</span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="borbot d-flex align-items-end justify-content-between">
                                                                    <div class="left d-flex align-items-center gap-2">
                                                                        <img src="assets/img/profile.jpg"
                                                                            class="profilMember" alt="">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fz-12 fw-600">Falch12</span>
                                                                            <span class="fz-9"> Diundang 09/20/22</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="right">
                                                                        <span
                                                                            class="fz-9 fw-bold hijauMember">Rp5.000</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide card">
                                                            <div class="card-content">
                                                                <div
                                                                    class="borbot d-flex align-items-end justify-content-between">
                                                                    <div class="left d-flex align-items-center gap-2">
                                                                        <img src="assets/img/profile.jpg"
                                                                            class="profilMember" alt="">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fz-12 fw-600">Falch12</span>
                                                                            <span class="fz-9"> Diundang 09/20/22</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="right">
                                                                        <span
                                                                            class="fz-9 fw-bold hijauMember">Rp5.000</span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="borbot d-flex align-items-end justify-content-between">
                                                                    <div class="left d-flex align-items-center gap-2">
                                                                        <img src="assets/img/profile.jpg"
                                                                            class="profilMember" alt="">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fz-12 fw-600">Falch12</span>
                                                                            <span class="fz-9"> Diundang 09/20/22</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="right">
                                                                        <span
                                                                            class="fz-9 fw-bold hijauMember">Rp5.000</span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="borbot d-flex align-items-end justify-content-between">
                                                                    <div class="left d-flex align-items-center gap-2">
                                                                        <img src="assets/img/profile.jpg"
                                                                            class="profilMember" alt="">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fz-12 fw-600">Falch12</span>
                                                                            <span class="fz-9"> Diundang 09/20/22</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="right">
                                                                        <span
                                                                            class="fz-9 fw-bold hijauMember">Rp5.000</span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="borbot d-flex align-items-end justify-content-between">
                                                                    <div class="left d-flex align-items-center gap-2">
                                                                        <img src="assets/img/profile.jpg"
                                                                            class="profilMember" alt="">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fz-12 fw-600">Falch12</span>
                                                                            <span class="fz-9"> Diundang 09/20/22</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="right">
                                                                        <span
                                                                            class="fz-9 fw-bold hijauMember">Rp5.000</span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="borbot d-flex align-items-end justify-content-between">
                                                                    <div class="left d-flex align-items-center gap-2">
                                                                        <img src="assets/img/profile.jpg"
                                                                            class="profilMember" alt="">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fz-12 fw-600">Falch12</span>
                                                                            <span class="fz-9"> Diundang 09/20/22</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="right">
                                                                        <span
                                                                            class="fz-9 fw-bold hijauMember">Rp5.000</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide card">
                                                            <div class="card-content">
                                                                <div
                                                                    class="borbot d-flex align-items-end justify-content-between">
                                                                    <div class="left d-flex align-items-center gap-2">
                                                                        <img src="assets/img/profile.jpg"
                                                                            class="profilMember" alt="">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fz-12 fw-600">Falch12</span>
                                                                            <span class="fz-9"> Diundang 09/20/22</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="right">
                                                                        <span
                                                                            class="fz-9 fw-bold hijauMember">Rp5.000</span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="borbot d-flex align-items-end justify-content-between">
                                                                    <div class="left d-flex align-items-center gap-2">
                                                                        <img src="assets/img/profile.jpg"
                                                                            class="profilMember" alt="">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fz-12 fw-600">Falch12</span>
                                                                            <span class="fz-9"> Diundang 09/20/22</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="right">
                                                                        <span
                                                                            class="fz-9 fw-bold hijauMember">Rp5.000</span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="borbot d-flex align-items-end justify-content-between">
                                                                    <div class="left d-flex align-items-center gap-2">
                                                                        <img src="assets/img/profile.jpg"
                                                                            class="profilMember" alt="">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fz-12 fw-600">Falch12</span>
                                                                            <span class="fz-9"> Diundang 09/20/22</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="right">
                                                                        <span
                                                                            class="fz-9 fw-bold hijauMember">Rp5.000</span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="borbot d-flex align-items-end justify-content-between">
                                                                    <div class="left d-flex align-items-center gap-2">
                                                                        <img src="assets/img/profile.jpg"
                                                                            class="profilMember" alt="">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fz-12 fw-600">Falch12</span>
                                                                            <span class="fz-9"> Diundang 09/20/22</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="right">
                                                                        <span
                                                                            class="fz-9 fw-bold hijauMember">Rp5.000</span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="borbot d-flex align-items-end justify-content-between">
                                                                    <div class="left d-flex align-items-center gap-2">
                                                                        <img src="assets/img/profile.jpg"
                                                                            class="profilMember" alt="">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fz-12 fw-600">Falch12</span>
                                                                            <span class="fz-9"> Diundang 09/20/22</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="right">
                                                                        <span
                                                                            class="fz-9 fw-bold hijauMember">Rp5.000</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-button-next-unique"><i
                                                        class="ri-arrow-right-s-line"></i></div>
                                                <div class="swiper-button-prev-unique">
                                                    <i class="ri-arrow-left-s-line"></i>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </section>
                                        </div> -->
                                        <!-- End member aktif 2 -->

                                        <!-- Desktop -->
                                        <div class="mt-4 right d-none d-lg-flex flex-column align-items-center gap-3">
                                            <div class="d-flex flex-column align-items-center">
                                                <span class="fz-12 fw-600">Benefit Member</span>
                                                <img src="assets/img/kadoSmall.svg" alt="" class="kadoSmall">
                                            </div>
                                            <ul
                                                class="mt-3 fz-12 m-auto d-flex flex-column align-items-center justify-content-center">
                                                <li class="text-center">Terbuka fitur pembelian Grosir</li>
                                                <li class="text-center my-2" style="width: 60%">Dapatkan Akses
                                                    pemberitahuan
                                                    barang yang akan
                                                    hadir</li>
                                                <li class="text-center">Dapatkan Promo Khusus Member</li>
                                            </ul>
                                            <img src="assets/img/starBig2.svg" alt="" class="starBig2">
                                        </div>
                                    </div>
                                </div>

                                <!-- Mobile -->
                                <div class="bg-white mt-2 pt-3 pb-5 right d-block d-lg-none">
                                    <div
                                        class="container pb-3 pe-0 d-flex align-items-center justify-content-between justify-content-md-center">
                                        <div class="left">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="fz-12 fw-600">Benefit Member</span>
                                                <img src="assets/img/kadoSmall.svg" alt="" class="kadoSmall">
                                            </div>
                                            <ul style="padding-left: 20px;"
                                                class="mt-3 fz-12 m-auto d-flex flex-column align-items-start align-items-lg-center justify-content-center">
                                                <li class="text-lg-center">Terbuka fitur pembelian Grosir</li>
                                                <li class="text-lg-center my-2 w-member">Dapatkan Akses
                                                    pemberitahuan
                                                    barang yang akan
                                                    hadir</li>
                                                <li class="text-lg-center">Dapatkan Promo Khusus Member</li>
                                            </ul>
                                        </div>
                                        <div class="right">
                                            <img src="assets/img/starBig2.svg" alt="" class="starBig2-res">
                                        </div>
                                    </div>
                                    <a href="daftar.php"
                                        class="btn bg-blue text-light fz-12 py-3 position-fixed bottom-0 start-0 end-0 z-4">Gabung
                                        Member Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next-unique",
            prevEl: ".swiper-button-prev-unique",
        },
    });
    </script>

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
    <script>
    function timeSelect(a) {
        var gabungBtn = document.querySelector('#gabungBtn');
        gabungBtn.href = "daftar.php?paket=" + a;
    }
    </script>
</body>

</html>