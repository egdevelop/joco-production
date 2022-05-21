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

    <title>Pesanan Saya</title>
</head>

<body>

    <div class="d-none d-lg-block">
        <?php include "components/navbarAkun.php" ?>
    </div>
    <div class="bg-white pt-4 pb-2">
        <div class="container">
            <a onclick="history.back()" class="text-dark d-flex gap-2 align-items-center justify-content-start">
                <span class="fz-20 mt-1"><i class="ri-arrow-left-s-line"></i></span>
                <span class="fz-16 fw-600">Pesanan Saya</span>
            </a>
        </div>
    </div>

    <!-- Flash Sale -->
    <section class="py-lg-2 py-sm-4 px-0 px-sm-4 mt-lg-5 mb-5">
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
                    <div class="container-menu mt-lg-4">
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
                                    <a href="pesanan-saya.php" class="mainMenu activeMenu">
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
                    <div class="bg-white borad-10-res p-md-2 p-lg-4">
                        <ul onclick="myFunction(event)" id='myTab'
                            class="ulCustom nav nav-tabs d-flex justify-content-between gap-3 gap-lg-3 mx-3 pt-4 pt-lg-0 flex-nowrap"
                            role="tablist">
                            <li class="nav-item fz-14 fw-600 px-1 px-lg-3" role="presentation">
                                <button class="nav-link-custom activePesanan" id="act semua" data-bs-toggle="tab"
                                    data-bs-target="#Semua" type="button" role="tab" aria-controls="Semua"
                                    aria-selected="true">Semua</button>
                            </li>
                            <span class="d-none d-lg-block" style="color: rgba(196, 196, 196, 0.3);">|</span>
                            <li class="nav-item fz-14 fw-600 px-1 px-lg-3" role="presentation">
                                <button class="nav-link-custom" id="act belum-bayar" data-bs-toggle="tab"
                                    data-bs-target="#BelumBayar" type="button" role="tab" aria-controls="BelumBayar"
                                    aria-selected="false">Belum&nbsp;Bayar</button>
                            </li>
                            <span class="d-none d-lg-block" style="color: rgba(196, 196, 196, 0.3);">|</span>
                            <li class="nav-item fz-14 fw-600 px-1 px-lg-3" role="presentation">
                                <button class="nav-link-custom" id="act dikirim" data-bs-toggle="tab"
                                    data-bs-target="#Dikirim" type="button" role="tab" aria-controls="Dikirim"
                                    aria-selected="false">Dikirim</button>
                            </li>
                            <span class="d-none d-lg-block" style="color: rgba(196, 196, 196, 0.3);">|</span>
                            <li class="nav-item fz-14 fw-600 px-1 px-lg-3" role="presentation">
                                <button class="nav-link-custom" id="act dibatalkan" data-bs-toggle="tab"
                                    data-bs-target="#Dibatalkan" type="button" role="tab" aria-controls="Dibatalkan"
                                    aria-selected="false">Dibatalkan</button>
                            </li>
                            <span class="d-none d-lg-block" style="color: rgba(196, 196, 196, 0.3);">|</span>
                            <li class="nav-item fz-14 fw-600 px-1 px-lg-3" role="presentation">
                                <button class="nav-link-custom" id="act selesai" data-bs-toggle="tab"
                                    data-bs-target="#Selesai" type="button" role="tab" aria-controls="Selesai"
                                    aria-selected="false">Selesai</button>
                            </li>
                        </ul>
                    </div>
                    <input style="border-radius: 10px;"
                        class="custom bg-white mt-3 d-none d-lg-flex gap-3 align-items-center justify-content-center nosubmit z-1 form-control"
                        type="search"
                        placeholder="Cari berdasarkan Nama Penjual, No. Pesanan atau Nama Produk dalam semua pesanan"
                        aria-label="Search">

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade mb-5 show active" id="Semua" role="tabpanel" aria-labelledby="semua">
                            <div class="bg-white mt-3 borad-10 p-3 p-lg-4">
                                <div class="d-flex justify-content-between">
                                    <div class="left">
                                        <span class="fz-13 fw-600">Eceran</span>
                                    </div>
                                    <div class="right">
                                        <span class="fz-12 orange">Selesai</span>
                                    </div>
                                </div>
                                <hr class="my-3 py-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="left d-flex gap-2">
                                        <img src="assets/img/products1.jpg" alt="" class="productsImg">
                                        <div class="d-flex flex-column">
                                            <span class="fz-12res w-80res">Jocoproduction - Topi
                                                Baseball
                                                Anak
                                                Laki-laki & Perempuan
                                                Motif bordir Alfabeth
                                            </span>
                                            <span class="fz-11 fw-bold">x1</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <!-- Desktop -->
                                        <span class="fz-11 fw-600 orange">Rp20.000</span>
                                    </div>
                                </div>
                                <hr class="my-3 py-0">
                                <div class="d-flex justify-content-end mt-3 gap-3">
                                    <div class="left">
                                        <span class="fz-10 fw-500">Total Pesanan :</span>
                                    </div>
                                    <div class="right">
                                        <span class="fz-14 fw-bold orange">Rp40.000</span>
                                    </div>
                                </div>
                                <!-- Desktop -->
                                <div class="mt-3 d-none d-lg-flex align-items-center justify-content-between">
                                    <div class="left">
                                        <span class="fz-10 fw-500">Produk dipesan 23/04/2022</span>
                                    </div>
                                    <div class="right">
                                        <button class="btn-blue borad-7 px-1 px-lg-3 fz-12 py-2 text-light">Beri
                                            Penilaian</button>
                                        <button class="btn-blue borad-7 px-1 px-lg-3 fz-12 py-2 text-light ms-2">Beli
                                            Lagi</button>
                                    </div>
                                </div>
                                <!-- Mobile -->
                                <div class="d-flex d-lg-none mt-3 align-items-center justify-content-between">
                                    <div class="left">
                                        <span class="fz-9 fw-500">Produk dipesan 23/04/2022</span>
                                    </div>
                                    <div class="center">
                                        <button class="btn-blue borad-7 px-2 px-lg-3 fz-10 py-2 text-light">Beri
                                            Penilaian</button>
                                    </div>
                                    <div class="right">
                                        <button class="btn-blue borad-7 px-2 px-lg-3 fz-10 py-2 text-light">Beli
                                            Lagi</button>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white mt-3 borad-10 p-3 p-lg-4">
                                <div class="d-flex justify-content-between">
                                    <div class="left">
                                        <span class="fz-13 fw-600">Eceran</span>
                                    </div>
                                    <div class="right">
                                        <span class="fz-12 orange">Selesai</span>
                                    </div>
                                </div>
                                <hr class="my-3 py-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="left d-flex gap-2">
                                        <img src="assets/img/products2.jpg" alt="" class="productsImg">
                                        <div class="d-flex flex-column">
                                            <span class="fz-12res w-80res">Jocoproduction - Topi
                                                Baseball
                                                Anak
                                                Laki-laki & Perempuan
                                                Motif bordir Alfabeth
                                            </span>
                                            <span class="fz-11 fw-bold">x1</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <!-- Desktop -->
                                        <span class="fz-11 fw-600 orange">Rp20.000</span>
                                    </div>
                                </div>
                                <hr class="my-3 py-0">
                                <div class="d-flex justify-content-end mt-3 gap-3">
                                    <div class="left">
                                        <span class="fz-10 fw-500">Total Pesanan :</span>
                                    </div>
                                    <div class="right">
                                        <span class="fz-14 fw-bold orange">Rp40.000</span>
                                    </div>
                                </div>
                                <!-- Desktop -->
                                <div class="mt-3 d-none d-lg-flex align-items-center justify-content-between">
                                    <div class="left">
                                        <span class="fz-10 fw-500">Produk dipesan 23/04/2022</span>
                                    </div>
                                    <div class="right">
                                        <button class="btn-blue borad-7 px-1 px-lg-3 fz-12 py-2 text-light">Beri
                                            Penilaian</button>
                                        <button class="btn-blue borad-7 px-1 px-lg-3 fz-12 py-2 text-light ms-2">Beli
                                            Lagi</button>
                                    </div>
                                </div>
                                <!-- Mobile -->
                                <div class="d-flex d-lg-none mt-3 align-items-center justify-content-between">
                                    <div class="left">
                                        <span class="fz-9 fw-500">Produk dipesan 23/04/2022</span>
                                    </div>
                                    <div class="center">
                                        <button class="btn-blue borad-7 px-2 px-lg-3 fz-10 py-2 text-light">Beri
                                            Penilaian</button>
                                    </div>
                                    <div class="right">
                                        <button class="btn-blue borad-7 px-2 px-lg-3 fz-10 py-2 text-light">Beli
                                            Lagi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="BelumBayar" role="tabpanel" aria-labelledby="belum-bayar">
                            <div class="bg-white mt-3 borad-10 p-3 p-lg-4">
                                <div class="d-flex justify-content-between">
                                    <div class="left">
                                        <span class="fz-13 fw-600">Eceran</span>
                                    </div>
                                    <div class="right">
                                        <span class="fz-12 orange">Selesai</span>
                                    </div>
                                </div>
                                <hr class="my-3 py-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="left d-flex gap-2">
                                        <img src="assets/img/products2.jpg" alt="" class="productsImg">
                                        <div class="d-flex flex-column">
                                            <span class="fz-12res w-80res">Jocoproduction - Topi
                                                Baseball
                                                Anak
                                                Laki-laki & Perempuan
                                                Motif bordir Alfabeth
                                            </span>
                                            <span class="fz-11 fw-bold">x1</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <!-- Desktop -->
                                        <span class="fz-11 fw-600 orange">Rp20.000</span>
                                    </div>
                                </div>
                                <hr class="my-3 py-0">
                                <div class="d-flex justify-content-end mt-3 gap-3">
                                    <div class="left">
                                        <span class="fz-10 fw-500">Total Pesanan :</span>
                                    </div>
                                    <div class="right">
                                        <span class="fz-14 fw-bold orange">Rp40.000</span>
                                    </div>
                                </div>
                                <!-- Desktop -->
                                <div class="mt-3 d-none d-lg-flex align-items-center justify-content-between">
                                    <div class="left">
                                        <span class="fz-10 fw-500">Produk dipesan 23/04/2022</span>
                                    </div>
                                    <div class="right">
                                        <button class="btn-blue borad-7 px-1 px-lg-3 fz-12 py-2 text-light">Beri
                                            Penilaian</button>
                                        <button class="btn-blue borad-7 px-1 px-lg-3 fz-12 py-2 text-light ms-2">Beli
                                            Lagi</button>
                                    </div>
                                </div>
                                <!-- Mobile -->
                                <div class="d-flex d-lg-none mt-3 align-items-center justify-content-between">
                                    <div class="left">
                                        <span class="fz-9 fw-500">Produk dipesan 23/04/2022</span>
                                    </div>
                                    <div class="center">
                                        <button class="btn-blue borad-7 px-2 px-lg-3 fz-10 py-2 text-light">Beri
                                            Penilaian</button>
                                    </div>
                                    <div class="right">
                                        <button class="btn-blue borad-7 px-2 px-lg-3 fz-10 py-2 text-light">Beli
                                            Lagi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Dikirim" role="tabpanel" aria-labelledby="dikirim">
                            <div class="bg-white mt-3 borad-10 p-3 p-lg-4">
                                <div class="d-flex justify-content-between">
                                    <div class="left">
                                        <span class="fz-13 fw-600">Eceran</span>
                                    </div>
                                    <div class="right">
                                        <span class="fz-12 orange">Selesai</span>
                                    </div>
                                </div>
                                <hr class="my-3 py-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="left d-flex gap-2">
                                        <img src="assets/img/products3.jpg" alt="" class="productsImg">
                                        <div class="d-flex flex-column">
                                            <span class="fz-12res w-80res">Jocoproduction - Topi
                                                Baseball
                                                Anak
                                                Laki-laki & Perempuan
                                                Motif bordir Alfabeth
                                            </span>
                                            <span class="fz-11 fw-bold">x1</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <!-- Desktop -->
                                        <span class="fz-11 fw-600 orange">Rp20.000</span>
                                    </div>
                                </div>
                                <hr class="my-3 py-0">
                                <div class="d-flex justify-content-end mt-3 gap-3">
                                    <div class="left">
                                        <span class="fz-10 fw-500">Total Pesanan :</span>
                                    </div>
                                    <div class="right">
                                        <span class="fz-14 fw-bold orange">Rp40.000</span>
                                    </div>
                                </div>
                                <!-- Desktop -->
                                <div class="mt-3 d-none d-lg-flex align-items-center justify-content-between">
                                    <div class="left">
                                        <span class="fz-10 fw-500">Produk dipesan 23/04/2022</span>
                                    </div>
                                    <div class="right">
                                        <button class="btn-blue borad-7 px-1 px-lg-3 fz-12 py-2 text-light">Beri
                                            Penilaian</button>
                                        <button class="btn-blue borad-7 px-1 px-lg-3 fz-12 py-2 text-light ms-2">Beli
                                            Lagi</button>
                                    </div>
                                </div>
                                <!-- Mobile -->
                                <div class="d-flex d-lg-none mt-3 align-items-center justify-content-between">
                                    <div class="left">
                                        <span class="fz-9 fw-500">Produk dipesan 23/04/2022</span>
                                    </div>
                                    <div class="center">
                                        <button class="btn-blue borad-7 px-2 px-lg-3 fz-10 py-2 text-light">Beri
                                            Penilaian</button>
                                    </div>
                                    <div class="right">
                                        <button class="btn-blue borad-7 px-2 px-lg-3 fz-10 py-2 text-light">Beli
                                            Lagi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Dibatalkan" role="tabpanel" aria-labelledby="dibatalkan">
                            <div class="bg-white mt-3 borad-10 p-3 p-lg-4">
                                <div class="d-flex justify-content-between">
                                    <div class="left">
                                        <span class="fz-13 fw-600">Eceran</span>
                                    </div>
                                    <div class="right">
                                        <span class="fz-12 orange">Selesai</span>
                                    </div>
                                </div>
                                <hr class="my-3 py-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="left d-flex gap-2">
                                        <img src="assets/img/products4.jpg" alt="" class="productsImg">
                                        <div class="d-flex flex-column">
                                            <span class="fz-12res w-80res">Jocoproduction - Topi
                                                Baseball
                                                Anak
                                                Laki-laki & Perempuan
                                                Motif bordir Alfabeth
                                            </span>
                                            <span class="fz-11 fw-bold">x1</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <!-- Desktop -->
                                        <span class="fz-11 fw-600 orange">Rp20.000</span>
                                    </div>
                                </div>
                                <hr class="my-3 py-0">
                                <div class="d-flex justify-content-end mt-3 gap-3">
                                    <div class="left">
                                        <span class="fz-10 fw-500">Total Pesanan :</span>
                                    </div>
                                    <div class="right">
                                        <span class="fz-14 fw-bold orange">Rp40.000</span>
                                    </div>
                                </div>
                                <!-- Desktop -->
                                <div class="mt-3 d-none d-lg-flex align-items-center justify-content-between">
                                    <div class="left">
                                        <span class="fz-10 fw-500">Produk dipesan 23/04/2022</span>
                                    </div>
                                    <div class="right">
                                        <button class="btn-blue borad-7 px-1 px-lg-3 fz-12 py-2 text-light">Beri
                                            Penilaian</button>
                                        <button class="btn-blue borad-7 px-1 px-lg-3 fz-12 py-2 text-light ms-2">Beli
                                            Lagi</button>
                                    </div>
                                </div>
                                <!-- Mobile -->
                                <div class="d-flex d-lg-none mt-3 align-items-center justify-content-between">
                                    <div class="left">
                                        <span class="fz-9 fw-500">Produk dipesan 23/04/2022</span>
                                    </div>
                                    <div class="center">
                                        <button class="btn-blue borad-7 px-2 px-lg-3 fz-10 py-2 text-light">Beri
                                            Penilaian</button>
                                    </div>
                                    <div class="right">
                                        <button class="btn-blue borad-7 px-2 px-lg-3 fz-10 py-2 text-light">Beli
                                            Lagi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Selesai" role="tabpanel" aria-labelledby="selesai">
                            <div class="bg-white mt-3 borad-10 p-3 p-lg-4">
                                <div class="d-flex justify-content-between">
                                    <div class="left">
                                        <span class="fz-13 fw-600">Eceran</span>
                                    </div>
                                    <div class="right">
                                        <span class="fz-12 orange">Selesai</span>
                                    </div>
                                </div>
                                <hr class="my-3 py-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="left d-flex gap-2">
                                        <img src="assets/img/products5.jpg" alt="" class="productsImg">
                                        <div class="d-flex flex-column">
                                            <span class="fz-12res w-80res">Jocoproduction - Topi
                                                Baseball
                                                Anak
                                                Laki-laki & Perempuan
                                                Motif bordir Alfabeth
                                            </span>
                                            <span class="fz-11 fw-bold">x1</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <!-- Desktop -->
                                        <span class="fz-11 fw-600 orange">Rp20.000</span>
                                    </div>
                                </div>
                                <hr class="my-3 py-0">
                                <div class="d-flex justify-content-end mt-3 gap-3">
                                    <div class="left">
                                        <span class="fz-10 fw-500">Total Pesanan :</span>
                                    </div>
                                    <div class="right">
                                        <span class="fz-14 fw-bold orange">Rp40.000</span>
                                    </div>
                                </div>
                                <!-- Desktop -->
                                <div class="mt-3 d-none d-lg-flex align-items-center justify-content-between">
                                    <div class="left">
                                        <span class="fz-10 fw-500">Produk dipesan 23/04/2022</span>
                                    </div>
                                    <div class="right">
                                        <button class="btn-blue borad-7 px-1 px-lg-3 fz-12 py-2 text-light">Beri
                                            Penilaian</button>
                                        <button class="btn-blue borad-7 px-1 px-lg-3 fz-12 py-2 text-light ms-2">Beli
                                            Lagi</button>
                                    </div>
                                </div>
                                <!-- Mobile -->
                                <div class="d-flex d-lg-none mt-3 align-items-center justify-content-between">
                                    <div class="left">
                                        <span class="fz-9 fw-500">Produk dipesan 23/04/2022</span>
                                    </div>
                                    <div class="center">
                                        <button class="btn-blue borad-7 px-2 px-lg-3 fz-10 py-2 text-light">Beri
                                            Penilaian</button>
                                    </div>
                                    <div class="right">
                                        <button class="btn-blue borad-7 px-2 px-lg-3 fz-10 py-2 text-light">Beli
                                            Lagi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Navbar Bottom -->
    <?php include 'components/navbar-bottom.php'; ?>

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
    </script>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>