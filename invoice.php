<?php
session_start();
include "server/config/functions.php";
$type = substr($_GET['ref'], 0, 2);

if ($type == "JS") {
    $data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM subscription_orders WHERE reference = '$_GET[ref]'"));
    $method = $data['method'];
    $amount = $data['amount'];
    $response = json_decode(getDetailTripay($data['third_ref']),true);
    $steps = $response['data']['instructions'][0]['steps'];
}

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

    <title>Invoice Pembayaran</title>
</head>

<body class="bg-white-invoice">

    <div class="body-wrapper">
        <!-- Mobile Navbar -->
        <div class="bg-blue text-light py-4 d-block d-lg-none">
            <div class="container">
                <div class="d-flex justify-content-start">
                    <a onclick="history.back()" class="text-light left d-flex align-items-center gap-2">
                        <i class="ri-arrow-left-s-line"></i>
                        <span class="fw-bold fz-14">Pembayaran</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Desktop Navbar -->
        <div class="bg-blue w-100 position-fixed z-3 d-none d-lg-block">
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
                            <span class="fz-12 fw-bold">Pembayaran</span>
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

        <!-- Invoice -->
        <div class="container bg-white pt-3 pb-5 mt-invoice mb-lg-5">
            <a onclick="history.back()"
                class="cursor-pointer text-dark d-none d-lg-flex gap-2 align-items-center borbot">
                <i class="ri-arrow-left-s-line"></i>
                <span class="fz-14 fz-500">Pembayaran</span>
            </a>
            <div class="mt-3 btn-outline-yellow d-flex align-items-center gap-2 ps-lg-3 ps-2 py-2">
                <i class="ri-alert-fill yellow"></i>
                <span class="fz-12 text-dark">Pastikan semua info dimulai dari nominal dan tujuan rekening
                    sama,diharapkan untuk cek ulang agar tidak ada kekliruan</span>
            </div>
            <div class="row mt-3 d-flex justify-content-center pb-5">
                <div class="col-12 col-lg-6">
                    <div class="d-flex justify-content-between borbot">
                        <div class="left">
                            <span class="fz-12 text-dark">Total Pembayaran</span>
                        </div>
                        <div class="right">
                            <span class="fz-12 fw-600 orange">Rp<?= $amount ?></span>
                        </div>
                    </div>
                    <div class="mt-2 d-flex gap-2 align-items-center">
                        <img src="assets/img/<?= strtolower($method) ?>.svg" alt="">
                        <span class="fz-12 text-dark"><?= strtolower($method) ?></span>
                    </div>
                    <?php if($method == "BCA"){ ?>
                    <div class="mt-3 d-flex flex-column gap-2">
                        <span class="fz-12 text-dark">No. Rekening:</span>
                        <div class="d-flex align-items-center justify-content-start gap-3">
                            <span class="fz-14 fw-600 orange">2312 38129</span>
                            <span class="fz-10 fw-600">( Atas Nama Abdul )</span>
                            <span class="fz-10 fw-600 blue text-uppercase">salin</span>
                        </div>
                    </div>
                    <?php }elseif($method == "BNI"){ ?>
                    <div class="mt-3 d-flex flex-column gap-2">
                        <span class="fz-12 text-dark">No. Rekening:</span>
                        <div class="d-flex align-items-center justify-content-start gap-3">
                            <span class="fz-14 fw-600 orange">2312 38129</span>
                            <span class="fz-10 fw-600">( Atas Nama Abdul )</span>
                            <span class="fz-10 fw-600 blue text-uppercase">salin</span>
                        </div>
                    </div>
                    <?php }elseif($method == "Mandiri"){ ?>
                    <div class="mt-3 d-flex flex-column gap-2">
                        <span class="fz-12 text-dark">No. Rekening:</span>
                        <div class="d-flex align-items-center justify-content-start gap-3">
                            <span class="fz-14 fw-600 orange">2312 38129</span>
                            <span class="fz-10 fw-600">( Atas Nama Abdul )</span>
                            <span class="fz-10 fw-600 blue text-uppercase">salin</span>
                        </div>
                    </div>
                    <?php }elseif($method == "ALFAMART"){ ?>
                    <div class="mt-3 d-flex flex-column gap-2">
                        <span class="fz-12 text-dark">Kode Pembayaran:</span>
                        <div class="d-flex align-items-center justify-content-start gap-3">
                            <span class="fz-14 fw-600 orange"><?= $response['data']['pay_code'] ?></span>
                            <span class="fz-10 fw-600 blue text-uppercase">salin</span>
                        </div>
                        <?php }elseif($method == "Indomart"){ ?>
                        <div class="mt-3 d-flex flex-column gap-2">
                            <span class="fz-12 text-dark">No. Rekening:</span>
                            <div class="d-flex align-items-center justify-content-start gap-3">
                                <span class="fz-14 fw-600 orange">2312 38129</span>
                                <span class="fz-10 fw-600">( Atas Nama Abdul )</span>
                                <span class="fz-10 fw-600 blue text-uppercase">salin</span>
                            </div>
                            <?php } ?>
                            <div class="mt-3 borbot">
                                <span class="fz-12 text-dark fw-600">Petunjuk Transfer</span>
                            </div>
                            <ul class="listInvoice mt-3 fz-12 fw-600">
                                <?php
                            foreach ($steps as $step) {
                        ?>
                                <li><?= $step ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Navbar Bottom -->
                <?php include "components/navbar-bottom.php"; ?>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous">
            </script>
</body>

</html>