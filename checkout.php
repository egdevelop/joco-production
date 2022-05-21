<?php
session_start();
include "server/config/functions.php";

$type = substr($_GET['q'], 0, 2);

if($type == 'JS'){
    $data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM subscription_orders WHERE reference = '$_GET[q]'"));
    if($data['pakage'] == "2bulan"){
        $nama_produk = "Paket 2 Bulan";
    }elseif($data['pakage'] == "5bulan"){
        $nama_produk = "Paket 5 Bulan";
    }elseif($data['pakage'] == "1tahun"){
        $nama_produk = "Paket 1 Tahun";
    }
        $variasi_produk = "Langanan";
}

if(isset($_POST['subs_pay'])){
    paySubs($_POST);
}

var_dump($_POST);
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
    <link rel="stylesheet" href="assets/css/style2.css?<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <title>Checkout</title>
</head>

<body>

    <div class="body-wrapper">
        <!-- Navbar -->
        <div class="bg-blue text-light py-4 d-block d-md-none">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <a onclick="history.back()" class="text-light left d-flex align-items-center gap-2">
                        <i class="ri-arrow-left-s-line"></i>
                        <span class="fw-bold fz-14">Checkout</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Desktop Navbar -->
        <div class="bg-blue w-100 position-fixed z-3 d-none d-md-block">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between py-3">
                    <div class="left d-flex align-items-center gap-3">
                        <a href="index.php">
                            <img src="assets/img/logo.svg" alt="">
                        </a>
                        <div class="">
                            <span class="borleft"></span>
                        </div>
                        <a onclick="history.back()" class="text-light d-flex gap-2 align-items-center">
                            <span class="fz-12 fw-bold">Checkout</span>
                        </a>
                    </div>
                    <div class="right">
                        <form class="d-flex gap-3 align-items-center justify-content-center nosubmit">
                            <input class="nosubmit z-1 form-control" type="search" placeholder="Cari produk"
                                aria-label="Search">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alamat -->
        <div class="container bg-white py-3 py-lg-4 mt-keranjang">
            <?php
            if($type == "JC"){
        ?>
            <!-- Mobile -->
            <div class="d-flex d-lg-none justify-content-end ">
                <a href="alamat.php" class="fz-12 blue">Ubah</a>
            </div>
            <div class="d-flex flex-column flex-lg-row gap-1 gap-lg-5 align-items-lg-center justify-content-between">
                <div class="left d-flex flex-column">
                    <div class="d-flex align-items-center gap-2 d-none d-lg-flex">
                        <i class="ri-map-pin-line blue"></i>
                        <span class="fz-12">Alamat Pengiriman</span>
                    </div>
                    <div class="fz-12 mt-3 fw-600">Mochammad Naufal (+62) 85895372384</div>
                </div>
                <div class="center">
                    <div class="fz-12 mt-lg-2">Sukahening wetan sebelah kiri masjid Al ikhlas RT/RW 02/21 Kel
                        Karsamenak,
                        KOTA
                        TASIKMALAYA - KAWALU, JAWA BARAT, ID 46182
                    </div>
                </div>

                <!-- Desktop -->
                <div class="right d-none d-lg-flex">
                    <a href="alamat.php" class="fz-12 blue">Ubah</a>
                </div>
            </div>
        </div>
        <?php
            }
        ?>

        <!-- Desktop Produk dipesan -->
        <div class="container bg-white py-4 mt-3">
            <div class="row d-none d-lg-flex">
                <div class="col-6">
                    <span class="fw-600 fz-12">Produk Dipesan</span>
                </div>
                <div class="col-2">
                    <span class="fz-10">Harga</span>
                </div>
                <div class="col-2">
                    <span class="fz-10">Jumlah</span>
                </div>
                <div class="col-2">
                    <span class="fz-10">Subtotal produk</span>
                </div>
            </div>

            <div class="row d-flex align-items-center">
                <div class="col-12 col-lg-4 d-flex align-items-end justify-content-between mt-2 gap-2">
                    <div class="d-flex align-items-center gap-2">
                        <img src="assets/img/varian.jpg" alt="" class="imgCheckout">
                        <div class="d-flex flex-column">
                            <span class="fz-10 fw-res"><?= $nama_produk ?>
                            </span>
                            <div class="d-flex gap-2 mt-2">
                                <!-- Harga Mobile -->
                                <span class="fz-9 fw-bold orange d-flex d-lg-none">Rp<?= $data['amount'] ?></span>
                                <span class="fz-9 fw-bold color-res"><?= $variasi_produk ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="right d-flex d-lg-none">
                        <span class="fz-12 orange fw-bold">x1</span>
                    </div>
                </div>
                <div class="col-2 d-none d-lg-flex flex-column ps-4">
                    <span class="fz-10 fw-600">Variasi:</span>
                    <span class="fz-10"><?= $variasi_produk ?></span>
                </div>
                <!-- Harga desktop -->
                <div class="col-2 d-none d-lg-flex">
                    <span class="fz-10 fw-600 orange">Rp<?= $data['amount'] ?></span>
                </div>
                <div class="col-2 d-none d-lg-flex">
                    <span class="fz-10">1</span>
                </div>
                <!-- subtotal harga desktop -->
                <div class="col-2 d-none d-lg-flex">
                    <span class="fz-10 fw-600 orange">Rp<?= $data['amount'] ?></span>
                </div>
            </div>
        </div>
    </div>

    <?php
     if($type == "JC"){
    ?>
    <!-- Opsi Pengiriman -->
    <div class="container bg-white py-4 mt-3">
        <div class="row">
            <div class="col-12 col-lg-4 d-flex gap-2 align-items-center">
                <span class="fz-16 yellow"><i class="ri-truck-fill"></i></span>
                <span class="fw-600 fz-12 border-b-2">Opsi Pengiriman</span>
            </div>
            <hr class="my-2 py-0 d-block d-lg-none" />
            <div class="col-lg-4 d-flex flex-column mt-2 mt-lg-0 d-none d-lg-flex">
                <span class="fz-10">Reguler</span>
                <span class="fz-10 abu">Estimasi sampai 10 - 14 Apr</span>
            </div>
            <a href="pengiriman.php" class="col-lg-2 d-none d-lg-flex align-items-center">
                <span class="fz-10 orange fw-600">Rp20.000.000</span>
                <span class="fz-14 orange fw-600 d-flex d-lg-none"><i class="ri-arrow-right-s-line"></i></span>
            </a>
            <!-- Mobile -->
            <div class="d-flex d-lg-none align-items-center justify-content-between">
                <div class="d-flex flex-column mt-lg-0">
                    <span class="fz-10">Reguler</span>
                    <span class="fz-10 abu">Estimasi sampai 10 - 14 Apr</span>
                </div>
                <a href="pengiriman.php" class="d-flex align-items-center">
                    <span class="fz-10 orange fw-600">Rp20.000.000</span>
                    <span class="fz-14 orange fw-600 d-flex d-lg-none"><i class="ri-arrow-right-s-line"></i></span>
                </a>
            </div>
            <!-- Desktop -->
            <div class="col-lg-2 d-none d-lg-flex">
                <a type="button" class="fz-11 blue" data-bs-toggle="modal" data-bs-target="#btnPengiriman">Ubah</a>
            </div>
            <!-- Modal Pengiriman -->
            <div class="modal fade" id="btnPengiriman" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fz-13" id="staticBackdropLabel">Opsi Pengiriman</h5>
                            <span class="yellow fz-18"><i class="ri-truck-fill"></i></span>
                        </div>
                        <div class="modal-body">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <p class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button d-flex align-items-center gap-2 collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            <div class="d-flex flex-column gap-2">
                                                <span class="fz-12 fw-600">Hemat</span>
                                                <span class="fz-10">Akan diterima pada tanggal 14 - 16 Apr</span>
                                            </div>
                                        </button>
                                    </p>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body position-relative">
                                            <label class="radioWrapper ps-4 d-flex align-items-start py-3">
                                                <div class="left me-3">
                                                    <img src="assets/img/jne.svg" alt="">
                                                </div>
                                                <div class="ps-1 pe-1 d-flex gap-2 flex-column">
                                                    <div class="right">
                                                        <span class="fw-600 fz-12">JNE</span>
                                                    </div>
                                                    <span class="fz-9" style="width: 90%">Menggunakan jasa
                                                        pengiriman JNE pastikan tersedia di kotamu</span>
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark me-2"></span>
                                                </div>
                                            </label>
                                            <label class="radioWrapper ps-4 d-flex align-items-start py-3">
                                                <div class="left me-3">
                                                    <img src="assets/img/sicepat.svg" alt="">
                                                </div>
                                                <div class="ps-1 pe-1 d-flex gap-2 flex-column">
                                                    <div class="right">
                                                        <span class="fw-600 fz-12">Sicepat </span>
                                                    </div>
                                                    <span class="fz-9" style="width: 90%">Menggunakan jasa
                                                        pengiriman SICEPAT pastikan tersedia di kotamu</span>
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark me-2"></span>
                                                </div>
                                            </label>
                                            <label class="radioWrapper ps-4 d-flex align-items-start py-3">
                                                <div class="left me-3">
                                                    <img src="assets/img/bni.svg" alt="">
                                                </div>
                                                <div class="ps-1 pe-1 d-flex gap-2 flex-column">
                                                    <div class="right">
                                                        <span class="fw-600 fz-12">J&T Express </span>
                                                    </div>
                                                    <span class="fz-9" style="width: 90%">Menggunakan jasa
                                                        pengiriman J&T Express pastikan tersedia di kotamu</span>
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark me-2"></span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <p class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button d-flex align-items-center gap-2 collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <div class="d-flex flex-column gap-2">
                                                <span class="fz-12 fw-600">Reguler</span>
                                                <span class="fz-10">Akan diterima pada tanggal 14 - 16 Apr</span>
                                            </div>
                                        </button>
                                    </p>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body mt-1">
                                            <label class="radioWrapper ps-4 d-flex align-items-start py-3">
                                                <div class="left me-3">
                                                    <img src="assets/img/jne.svg" alt="">
                                                </div>
                                                <div class="ps-1 pe-1 d-flex gap-2 flex-column">
                                                    <div class="right">
                                                        <span class="fw-600 fz-12">JNE </span>
                                                    </div>
                                                    <span class="fz-9" style="width: 90%">Menggunakan jasa
                                                        pengiriman JNE pastikan tersedia di kotamu</span>
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark me-2"></span>
                                                </div>
                                            </label>
                                            <label class="radioWrapper ps-4 d-flex align-items-start py-3">
                                                <div class="left me-3">
                                                    <img src="assets/img/sicepat.svg" alt="">
                                                </div>
                                                <div class="ps-1 pe-1 d-flex gap-2 flex-column">
                                                    <div class="right">
                                                        <span class="fw-600 fz-12">Sicepat </span>
                                                    </div>
                                                    <span class="fz-9" style="width: 90%">Menggunakan jasa
                                                        pengiriman SICEPAT pastikan tersedia di kotamu</span>
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark me-2"></span>
                                                </div>
                                            </label>
                                            <label class="radioWrapper ps-4 d-flex align-items-start py-3">
                                                <div class="left me-3">
                                                    <img src="assets/img/bni.svg" alt="">
                                                </div>
                                                <div class="ps-1 pe-1 d-flex gap-2 flex-column">
                                                    <div class="right">
                                                        <span class="fw-600 fz-12">J&T Express </span>
                                                    </div>
                                                    <span class="fz-9" style="width: 90%">Menggunakan jasa
                                                        pengiriman J&T Express pastikan tersedia di kotamu</span>
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark me-2"></span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <p class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button d-flex align-items-center gap-2 collapsed"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                            aria-controls="flush-collapseThree">
                                            <div class="d-flex flex-column gap-2">
                                                <span class="fz-12 fw-600">Kargo</span>
                                                <span class="fz-10">Akan diterima pada tanggal 14 - 16 Apr</span>
                                            </div>
                                        </button>
                                    </p>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body mt-1">
                                            <label class="radioWrapper ps-4 d-flex align-items-start py-3">
                                                <div class="left me-3">
                                                    <img src="assets/img/jne.svg" alt="">
                                                </div>
                                                <div class="ps-1 pe-1 d-flex gap-2 flex-column">
                                                    <div class="right">
                                                        <span class="fw-600 fz-12">JNE </span>
                                                    </div>
                                                    <span class="fz-9" style="width: 90%">Menggunakan jasa
                                                        pengiriman JNE pastikan tersedia di kotamu</span>
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark me-2"></span>
                                                </div>
                                            </label>
                                            <label class="radioWrapper ps-4 d-flex align-items-start py-3">
                                                <div class="left me-3">
                                                    <img src="assets/img/sicepat.svg" alt="">
                                                </div>
                                                <div class="ps-1 pe-1 d-flex gap-2 flex-column">
                                                    <div class="right">
                                                        <span class="fw-600 fz-12">Sicepat </span>
                                                    </div>
                                                    <span class="fz-9" style="width: 90%">Menggunakan jasa
                                                        pengiriman SICEPAT pastikan tersedia di kotamu</span>
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark me-2"></span>
                                                </div>
                                            </label>
                                            <label class="radioWrapper ps-4 d-flex align-items-start py-3">
                                                <div class="left me-3">
                                                    <img src="assets/img/bni.svg" alt="">
                                                </div>
                                                <div class="ps-1 pe-1 d-flex gap-2 flex-column">
                                                    <div class="right">
                                                        <span class="fw-600 fz-12">J&T Express </span>
                                                    </div>
                                                    <span class="fz-9" style="width: 90%">Menggunakan jasa
                                                        pengiriman J&T Express pastikan tersedia di kotamu</span>
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark me-2"></span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn fz-13" data-bs-dismiss="modal">Nanti
                                saja</button>
                            <button type="button" class="text-light btn btn-blue px-3 py-2 fz-13">Konfirmasi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-3 py-0 d-none d-lg-block">
        <div class="row d-none d-lg-flex">
            <!-- Desktop Voucher -->
            <div class="col-8 d-flex align-items-center">
                <img src="assets/img/voucher.svg" alt="" class="me-2">
                <span class="fz-11">Voucher</span>
            </div>
            <div class="col-2 d-flex align-items-center gap-2">
                <!-- <span class="fz-14 blue"><i class="ri-checkbox-circle-fill"></i></span>
                    <span class="text-light fz-10 fw-500 bg-yellow px-3">57% OFF</span> -->
            </div>
            <div class="col-2 d-flex align-items-center">
                <a type="button" class="fz-11 blue" data-bs-toggle="modal" data-bs-target="#btnVoucher">Pilih
                    Voucher</a>
                <!-- <span class="fz-11 blue">Ganti Voucher</span> -->
            </div>
        </div>
    </div>
    <?php }?>

    <!-- Modal Voucher -->
    <div class="modal fade" id="btnVoucher" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-block" style="border: none;">
                    <div class="col-12 d-flex justify-content-between">
                        <h5 class="modal-title fz-13" id="staticBackdropLabel">Pilih Voucher</h5>
                        <span class="blue fz-18 me-3"><i class="ri-coupon-2-line"></i></span>
                    </div>
                    <div class="col-12">
                        <form class="input-group d-flex align-items-center justify-content-between my-1 py-3 px-4 gap-4"
                            style="background-color: #F8F8F8;">
                            <h5 class="fz-10 mt-2">Tambah Voucher</h5>
                            <input class="voucherInput form-control bg-transparent py-1" type="search"
                                placeholder="Masukkan Kode Voucher" aria-label="Search"
                                style="width: 10rem; border-color:#C1C1C1; font-size: 12px">
                            <button class="btn fz-12 py-1" style="color: #c1c1c1;border-color:#C1C1C1;">Pakai</button>
                        </form>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-between gap-2 mb-3">
                        <span class="fz-12 fw-600">Voucher Gratis Ongkir</span>
                        <span class="fz-10">Pilih 1</span>
                    </div>

                    <label class="radioWrapper ps-1 d-flex align-items-start ">
                        <div class="card-body border-card py-0 px-0 d-flex justify-content-between gap-2">
                            <img src="assets/img/gratisongkir.png" class="" alt="">
                            <div class="d-block my-auto">
                                <h5 class="f-12 mt-3 me-4 ">Min.Belanja Rp200RB</h5>
                                <p class="f-10 text-prem">Berakhir dlm 9 jam</p>
                            </div>
                            <div class=" mt-auto me-2 mb-2">
                                <input type="radio" name="radio">
                                <span class="check mt-4 end-0"></span>
                                <p class="f-10 mb-0 ">S&K</p>
                            </div>
                        </div>
                    </label>
                    <label class="radioWrapper ps-1 d-flex align-items-start py-1">
                        <div class="card-body border-card py-0 px-0 d-flex justify-content-between gap-2">
                            <img src="assets/img/gratisongkir.png" class="" alt="">
                            <div class="d-block my-auto">
                                <h5 class="f-12 mt-3 me-4 ">Min.Belanja Rp200RB</h5>

                                <p class="f-10 text-prem">Berakhir dlm 9 jam</p>
                            </div>
                            <div class=" mt-auto me-2 mb-2">
                                <input type="radio" name="radio">
                                <span class="check mt-4 end-0"></span>
                                <p class="f-10 mb-0 ">S&K</p>
                            </div>
                        </div>
                    </label>
                    <label class="radioWrapper ps-1 d-flex align-items-start py-1">
                        <div class="card-body border-card py-0 px-0 d-flex justify-content-between gap-2">
                            <img src="assets/img/gratisongkir.png" class="" alt="">
                            <div class="d-block my-auto">
                                <h5 class="f-12 mt-3 me-4 ">Min.Belanja Rp200RB</h5>

                                <p class="f-10 text-prem">Berakhir dlm 9 jam</p>
                            </div>
                            <div class=" mt-auto me-2 mb-2">
                                <input type="radio" name="radio">
                                <span class="check mt-4 end-0"></span>
                                <p class="f-10 mb-0 ">S&K</p>
                            </div>
                        </div>
                    </label>
                    <label class="radioWrapper ps-1 d-flex align-items-start py-1">
                        <div class="card-body border-card py-0 px-0 d-flex justify-content-between gap-2">
                            <img src="assets/img/gratisongkir.png" class="" alt="">
                            <div class="d-block my-auto">
                                <h5 class="f-12 mt-3 me-4 ">Min.Belanja Rp200RB</h5>

                                <p class="f-10 text-prem">Berakhir dlm 9 jam</p>
                            </div>
                            <div class=" mt-auto me-2 mb-2">
                                <input type="radio" name="radio">
                                <span class="check mt-4 end-0"></span>
                                <p class="f-10 mb-0 ">S&K</p>
                            </div>
                        </div>
                    </label>
                    <label class="radioWrapper ps-1 d-flex align-items-start py-1">
                        <div class="card-body border-card py-0 px-0 d-flex justify-content-between gap-2">
                            <img src="assets/img/gratisongkiroff.png" class="" alt="">
                            <div class="d-block my-auto">
                                <h5 class="f-12 mt-3 me-4 ">Min.Belanja Rp200RB</h5>

                                <p class="f-10 text-prem">Berakhir dlm 9 jam</p>
                            </div>
                            <div class=" mt-auto me-2 mb-2">
                                <input type="radio" name="radio">
                                <span class="check mt-4 end-0"></span>
                                <p class="f-10 mb-0 ">S&K</p>
                            </div>
                        </div>
                    </label>
                    <label class="radioWrapper ps-1 d-flex align-items-start py-1">
                        <div class="card-body border-card py-0 px-0 d-flex justify-content-between gap-2">
                            <img src="assets/img/gratisongkiroff.png" class="" alt="">
                            <div class="d-block my-auto">
                                <h5 class="f-12 mt-3 me-4 ">Min.Belanja Rp200RB</h5>

                                <p class="f-10 text-prem">Berakhir dlm 9 jam</p>
                            </div>
                            <div class=" mt-auto me-2 mb-2">
                                <input type="radio" name="radio">
                                <span class="check mt-4 end-0"></span>
                                <p class="f-10 mb-0 ">S&K</p>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn fz-13" data-bs-dismiss="modal">Nanti
                        saja</button>
                    <button type="button" class="text-light btn btn-blue px-3 py-2 fz-13">Konfirmasi</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Voucher -->
    <div class="bg-white container py-3 mt-3 d-flex d-lg-none justify-content-between">
        <div class="bg-white d-flex align-items-center">
            <img src="assets/img/voucher.svg" alt="" class="me-2">
            <span class="fz-11">Voucher</span>
        </div>
        <!-- <div class="d-flex align-items-center gap-2">
            <span class="fz-9 blue"><i class="ri-checkbox-circle-fill"></i></span>
            <span class="text-light fz-8 fw-500 bg-yellow px-1">57% OFF</span>
        </div> -->
        <a href="voucher.php" class="fz-10 text-abu d-flex align-items-center">Gunakan / masukkan
            kode
            <span class="abu fz-12"><i class="ri-arrow-right-s-line"></i></span>
            <!-- <span class="fz-11 blue">Ganti Voucher</span> -->
        </a>
    </div>

    <!-- Metode Pembayaran -->
    <div class="container bg-white py-4 mt-3 mb-3">
        <!-- Desktop -->
        <div class="d-none d-lg-flex align-items-center justify-content-start gap-4">
            <div class="left gap-2 d-flex align-items-center">
                <i class="ri-money-dollar-circle-line orange"></i>
                <span class="fz-12 fw-600">Metode Pembayaran</span>
            </div>
            <div class="right d-flex align-items-center ps-3">
                <label onclick="toggleVisibility('Menu1');" class="card-payment cursor-pointer fw-500 px-2 py-1 fz-10">
                    <input type="radio" name="radioPayment" class="radio-payment" />
                    <span class="radio-btn variasi px-2 py-1 fz-10">Transfer Bank</span>
                </label>
            </div>
            <div class="right d-flex align-items-center ps-3">
                <label onclick="toggleVisibility('Menu2');" class="card-payment cursor-pointer fw-500 px-2 py-1 fz-10">
                    <input type="radio" name="radioPayment" class="radio-payment" />
                    <span class="radio-btn variasi px-2 py-1 fz-10">Alfamart</span>
                </label>
            </div>
            <div class="right d-flex align-items-center ps-3">
                <label onclick="toggleVisibility('Menu3');" class="card-payment cursor-pointer fw-500 px-2 py-1 fz-10">
                    <input type="radio" name="radioPayment" class="radio-payment" />
                    <span class="radio-btn variasi px-2 py-1 fz-10">Indomaret</span>
                </label>
            </div>
        </div>
        <hr class="my-3 py-0 d-none d-lg-block">
        <div class="container d-none d-lg-block">
            <div id="Menu1" style="display: none;">
                <label class="radioWrapper ps-3 row d-flex align-items-start py-3">
                    <div class="col-12 pe-1 d-flex align-items-start gap-2">
                        <div class="left">
                            <img src="assets/img/bca.svg" alt="" class="iconPay">
                        </div>
                        <div class="d-flex flex-column gap 2">
                            <span class="fw-600 fz-12 mt-1">Bank BCA </span>
                            <span class="fz-9" style="width: 90%">Hanya menerima dari Bank BCA. Metode Pembayaran
                                Lebih
                                Mudah</span>
                        </div>
                        <input type="radio" name="radio" onclick="paymentSelect('bca')">
                        <span class="checkmark position-absolute me-2"></span>
                    </div>
                </label>
                <label class="radioWrapper ps-3 row d-flex align-items-start py-3">
                    <div class="col-12 pe-1 d-flex align-items-start gap-2">
                        <div class="left">
                            <img src="assets/img/mandiri.svg" alt="" class="iconPay">
                        </div>
                        <div class="d-flex flex-column gap 2">
                            <span class="fw-600 fz-12 mt-1">Bank Mandiri </span>
                            <span class="fz-9" style="width: 90%">Hanya menerima dari Bank Mandiri termasuk Bank
                                Syariah
                                Metode Pembayaran Lebih Mudah</span>
                        </div>
                        <input type="radio" name="radio" onclick="paymentSelect('mandiri')">
                        <span class="checkmark position-absolute me-2"></span>
                    </div>
                </label>
                <label class="radioWrapper ps-3 row d-flex align-items-start py-3">
                    <div class="col-12 pe-1 d-flex align-items-start gap-2">
                        <div class="left">
                            <img src="assets/img/bni.svg" alt="" class="iconPay">
                        </div>
                        <div class="d-flex flex-column gap 2">
                            <span class="fw-600 fz-12 mt-1">Bank BNI </span>
                            <span class="fz-9" style="width: 90%">Hanya menerima dari Bank BNI
                                Metode Pembayaran Lebih Mudah</span>
                        </div>
                        <input type="radio" name="radio" onclick="paymentSelect('bni')">
                        <span class="checkmark position-absolute me-2"></span>
                    </div>
                </label>
                <hr class="my-3 py-0">
            </div>
            <div id="Menu2" style="display: none;">
                <label class="radioWrapper ps-3 row d-flex align-items-start py-3">
                    <div class="col-12 pe-1 d-flex align-items-start gap-2">
                        <div class="left">
                            <img src="assets/img/alfamart.svg" alt="" class="iconPay">
                        </div>
                        <div class="d-flex flex-column gap 2">
                            <span class="fw-600 fz-12 mt-1">Alfamart </span>
                            <span class="fz-9" style="width: 90%">Hanya menerima dari Alfamart. Metode Pembayaran
                                Lebih
                                Mudah</span>
                        </div>
                        <input type="radio" name="radio" onclick="paymentSelect('ALFAMART')">
                        <span class="checkmark position-absolute me-2"></span>
                    </div>
                </label>
                <hr class="my-3 py-0">
            </div>
            <div id="Menu3" style="display: none;">
                <label class="radioWrapper ps-3 row d-flex align-items-start py-3">
                    <div class="col-12 pe-1 d-flex align-items-start gap-2">
                        <div class="left">
                            <img src="assets/img/indomaret.svg" alt="" class="iconPay">
                        </div>
                        <div class="d-flex flex-column gap 2">
                            <span class="fw-600 fz-12 mt-1">Indomaret </span>
                            <span class="fz-9" style="width: 90%">Hanya menerima dari Indomaret
                                Metode Pembayaran Lebih Mudah</span>
                        </div>
                        <input type="radio" name="radio" onclick="paymentSelect('INDOMARET')">
                        <span class="checkmark position-absolute me-2"></span>
                    </div>
                </label>
                <hr class="my-3 py-0">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 d-flex align-items-center justify-content-between d-block d-lg-none">
                <div class="d-flex align-items-center gap-1">
                    <i class="ri-money-dollar-circle-line orange"></i>
                    <span class="fz-10 fw-600">Metode Pembayaran</span>
                </div>
                <div class="text-lg-end">
                    <a href="pembayaran.php" class="fz-10 text-abu d-flex align-items-center">Transfer Bank
                        <span class="abu fz-12"><i class="ri-arrow-right-s-line"></i></span>
                    </a>
                </div>
            </div>
            <?php
                if($type == "JC"){
            ?>
            <div class="d-flex align-items-center justify-content-between justify-content-lg-end">
                <div style="margin-right: -8rem;" class="col-lg-2 text-start">
                    <p class="fz-10">Subtotal untuk Produk</p>
                </div>
                <div class="col-lg-2 text-lg-end">
                    <p class="fz-10">Rp<?= $harga ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-flex align-items-center justify-content-between justify-content-lg-end">
                <div style="margin-right: -8rem;" class="col-lg-2 text-start">
                    <p class="fz-10">Total ongkos kirim</p>
                </div>
                <div class="col-lg-2 text-lg-end">
                    <p class="fz-10">Rp20.000</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-flex align-items-center justify-content-between justify-content-lg-end">
                <div style="margin-right: -8rem;" class="col-lg-2 text-start">
                    <p class="fz-10">Biaya pelayanan</p>
                </div>
                <div class="col-lg-2 text-lg-end">
                    <p class="fz-10">Rp1.000</p>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="row mb-4 mb-lg-0">
            <div class="d-flex align-items-center justify-content-between justify-content-lg-end">
                <div style="margin-right: -8rem;" class="col-lg-2 text-start">
                    <p class="fz-10 fw-600">Total Pembayaran</p>
                </div>
                <div class="col-lg-2 text-lg-end">
                    <p class="fz-16 orange fw-600">Rp<?= $data['amount'] ?></p>
                </div>
            </div>
        </div>
        <hr class="mt-2 mb-3 py-0 d-none d-lg-block">
        <div class="d-flex justify-content-end d-none d-lg-block">
            <a href="invoice.php" class="btn-blue fz-12 text-light px-3 py-2">Buat Pesanan</a>
        </div>
    </div>

    <!-- Navbar Bottom -->
    <div class="container bg-white navbarBottomCart start-0 end-0 bottom-0 py-3 d-block d-lg-none">
        <div class="d-flex align-items-center justify-content-end gap-3">
            <div class="left">
                <span class="fz-10 fw-500">Total Pembayaran</span>
                <span class="d-block fz-10 fw-600 orange text-end">Rp43.000</span>
            </div>

            <form method="POST" action="checkout.php" class="right d-flex d-lg-none h-100">
                <input type="hidden" name="reference" value="<?= $_GET['q'] ?>" require>
                <input type="hidden" name="payment" id="payment" require>
                <button type="submit" name="subs_pay"
                    class="right text-center h-100 bg-blue fz-10 text-light px-3 py-2 w-100 h-100 border-none">
                    Buat pesanan
                </button>
            </form>
        </div>
    </div>



    <script>
    var divs = ["Menu1", "Menu2", "Menu3"];
    var visibleDivId = null;

    function toggleVisibility(divId) {
        if (visibleDivId === divId) {
            //visibleDivId = null;
        } else {
            visibleDivId = divId;
        }
        hideNonVisibleDivs();
    }

    function hideNonVisibleDivs() {
        var i, divId, div;
        for (i = 0; i < divs.length; i++) {
            divId = divs[i];
            div = document.getElementById(divId);
            if (visibleDivId === divId) {
                div.style.display = "block";
            } else {
                div.style.display = "none";
            }
        }
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>
    function paymentSelect(a) {
        var payment = document.getElementById("payment");
        payment.value = a;
        console.log(payment.value);
    }
    </script>
</body>

</html>