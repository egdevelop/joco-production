<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/img/favicon.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/style2.css?<?php echo time(); ?>">
    <!-- icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <title>Voucher</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="back-blue navbar navbar-light fixed-top mb-5">
        <div class="container-fluid position-relative pt-3 ">
            <a class="d-flex text-decoration-none" onclick="history.back()">
                <i class="ri-arrow-left-s-line f-24 me-4 text-light"></i>
                <h1 class="f-16 fw-bold text-light pt-2 mt-1 me-auto">Pilih Voucher</h1>
            </a>
            <form class="input-group d-flex ms-auto w-100 my-1 py-1">
                <input class="form-control py-3 me-0 f-10 text-prem" type="search" placeholder="Masukkan Kode Voucher"
                    aria-label="Search">
                <a class="btn bg-second position-absolute end-0 me-1 py-2  px-3 mt-1 ">Pakai</a>
            </form>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-- CONTENT -->
    <section id="ongkir" class="bg-second position-relative pt-5 mt-5">
        <!-- Gratis Ongkir -->
        <div class="gratis-ongkir mt-5 ">
            <div class="card mt-5 pt-3 px-3">
                <div class="d-flex justify-content-between  my-1">
                    <h1 class="f-12 fw-bold text-dark">Voucher Gratis Ongkir</h1>
                    <p class="f-10">Pilih 1</p>
                </div>
                <div class="card-body border-card py-0 px-0 d-flex justify-content-between ">
                    <div class="col-3 me-4">

                        <img src="assets/img/free.png" class="  h-100 me-4" alt="">
                    </div>
                    <div class="col-8 ms-3 d-flex justify-content-between">

                        <div class="d-block ms-4 my-auto  me-0">
                            <h5 class="f-12 mt-3 pt-3 ms-1 me-4">Min. Belanja Rp200RB</h5>
                            <p class="f-10 text-prem mt-2 ms-1 pb-3">Berakhir dlm 9 jam</p>
                        </div>
                        <div class=" mt-auto me-4 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mb-4" viewBox="0 0 24 24" width="12"
                                height="12">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path
                                    d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-.997-6l7.07-7.071-1.414-1.414-5.656 5.657-2.829-2.829-1.414 1.414L11.003 16z"
                                    fill="rgba(41,170,227,1)" />
                            </svg>
                            <p class="f-10 mb-1 ">S&K</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3 mb-2">
                    <p class="f-8 text-center mt-2 ">Tampilkan Semua </p>
                    <i class="ri-arrow-down-s-line ms-2"></i>
                </div>
            </div>
        </div>
        <!-- voucher -->
        <div class="voucher ">
            <div class="card mt-2 pt-3 px-3">
                <h1 class="f-12 fw-bold text-dark my-2 pb-2">Voucher Diskon</h1>
                <div class="card-body border-card py-0 px-0 d-flex justify-content-between ">
                    <div class="col-3 me-3">

                        <img src="assets/img/disc.png" class="h-100 me-3" alt="">
                    </div>
                    <div class="col-8 ms-4 d-flex justify-content-between">
                        <div class="d-block my-auto ms-4 me-0">
                            <h5 class=" f-10 w-75 mt-3 me-0 ">Diskon 50% <br>untuk pembelian Grosir</h5>
                            <p class="f-10 resfont mt-1">Min. Belanja Rp300RB </p>
                            <p class="f-10 resfont text-prem">Hingga 24.04.2022</p>
                        </div>
                        <div class=" mt-auto me-4 mb-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mb-4" viewBox="0 0 24 24" width="12"
                                height="12">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path
                                    d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-.997-6l7.07-7.071-1.414-1.414-5.656 5.657-2.829-2.829-1.414 1.414L11.003 16z"
                                    fill="rgba(41,170,227,1)" />
                            </svg>
                            <p class="f-10 mb-0 ">S&K</p>
                        </div>
                    </div>
                </div>
                <div class="card-body border-card py-0 px-0 my-3 d-flex justify-content-between ">
                    <div class="col-3 me-3">

                        <img src="assets/img/disc.png" class="h-100 me-3" alt="">
                    </div>
                    <div class="col-8 ms-4 d-flex justify-content-between">
                        <div class="d-block my-auto ms-4 me-0">
                            <h5 class=" f-10 w-75 mt-3 me-0 ">Diskon 50% <br>untuk pembelian Grosir</h5>
                            <p class="f-10 resfont mt-1">Min. Belanja Rp300RB </p>
                            <p class="f-10 resfont text-prem">Hingga 24.04.2022</p>
                        </div>
                        <div class=" mt-auto me-4 mb-2 ">

                            <p class="f-10 mb-0 ">S&K</p>
                        </div>
                    </div>
                </div>
                <div class="card-body border-card py-0 px-0 my-3 d-flex justify-content-between ">
                    <div class="col-3 me-3">

                        <img src="assets/img/disc.png" class="h-100 me-3" alt="">
                    </div>
                    <div class="col-8 ms-4 d-flex justify-content-between">
                        <div class="d-block my-auto ms-4 me-0">
                            <h5 class=" f-10 w-75 mt-3 me-0 ">Diskon 50% <br>untuk pembelian Grosir</h5>
                            <p class="f-10 resfont mt-1">Min. Belanja Rp300RB </p>
                            <p class="f-10 resfont text-prem">Hingga 24.04.2022</p>
                        </div>
                        <div class=" mt-auto me-4 mb-2 ">

                            <p class="f-10 mb-0 ">S&K</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-start mt-3 mb-2 pb-5">
                    <p class="col-4 f-10 fw-bold mt-2  ">Semua Vouchermu telah ditampilkan </p>
                </div>
            </div>
        </div>

        <!-- modal trigger -->
        <button class="btn back-blue py-3 text-light f-16 fw-bold d-grid w-100 fixed-bottom" data-bs-toggle="modal"
            data-bs-target="#reg-modal">
            Konfirmasi
        </button>
        <div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="f-16 text-prem" id="modal-title">Konfirmasi voucher</h5>
                        <img type="button" class="" data-bs-dismiss="modal" aria-label="close"
                            src="assets/img/iconV.svg" alt="">
                    </div>
                    <div class="modal-body py-4">
                        <p>Are you sure about that ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary back-blue">Konfirmasi</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>