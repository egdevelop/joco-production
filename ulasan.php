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

    <title>Penilaian Produk</title>
</head>

<body style="background: #fff">

    <div class="body-wrapper">
        <!-- Navbar -->
        <div class="text-dark py-4 d-block d-md-none">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <a onclick="history.back()" class="text-dark left d-flex align-items-center gap-2">
                        <span class="blue"><i class="ri-arrow-left-s-line"></i></span>
                        <span class="fw-500 fz-14">Penilaian</span>
                    </a>
                    <div class="right d-flex align-items-center gap-2">
                        <img src="assets/img/products1.jpg" alt="" class="ulasanImg">
                    </div>
                </div>
            </div>
        </div>

        <div class="container row mt-3 d-flex align-items-center justify-content-center mx-auto">
            <label class="col-4 card-ulasan px-0">
                <input type="radio" name="radioUlasan" class="radio-ulasan" />
                <div class="radio-btn bg-ulasan text-center mx-1 px-1 py-2 fz-8">
                    <span class="d-block">Semua</span>
                    <span class="d-block">(115)</span>
                </div>
            </label>
            <label class="col-4 card-ulasan px-0">
                <input type="radio" name="radioUlasan" class="radio-ulasan" />
                <div class="radio-btn bg-ulasan text-center mx-1 px-1 py-2 fz-8">
                    <span class="d-block ">Dgn Komentar</span>
                    <span class="d-block ">(34)</span>
                </div>
            </label>
            <label class="col-4 card-ulasan px-0">
                <input type="radio" name="radioUlasan" class="radio-ulasan" />
                <div class="radio-btn bg-ulasan text-center mx-1 px-1 py-2 fz-8">
                    <span class="d-block">Dgn Foto/Video</span>
                    <span class="d-block">(33)</span>
                </div>
            </label>
        </div>

        <div class="mt-2 container row d-flex align-items-center justify-content-center mx-auto">
            <label class="col-3 card-ulasan px-0">
                <input type="radio" name="radioUlasan" class="radio-ulasan" />
                <div class="radio-btn bg-ulasan text-center mx-1 px-2 py-2 fz-8 d-flex flex-column align-items-center">
                    <div class="d-flex yellow">
                        <span><i class="ri-star-fill"></i></span>
                        <span><i class="ri-star-fill"></i></span>
                        <span><i class="ri-star-fill"></i></span>
                        <span><i class="ri-star-fill"></i></span>
                        <span><i class="ri-star-fill"></i></span>
                    </div>
                    <span class="d-block yellow">(115)</span>
                </div>
            </label>
            <label class="col-3 card-ulasan px-0">
                <input type="radio" name="radioUlasan" class="radio-ulasan" />
                <div class="radio-btn bg-ulasan text-center mx-1 px-2 py-2 fz-8 d-flex flex-column align-items-center">
                    <div class="d-flex yellow">
                        <span><i class="ri-star-fill"></i></span>
                        <span><i class="ri-star-fill"></i></span>
                        <span><i class="ri-star-fill"></i></span>
                        <span><i class="ri-star-fill"></i></span>
                    </div>
                    <span class="d-block yellow">(115)</span>
                </div>
            </label>
            <label class="col-2 card-ulasan px-0">
                <input type="radio" name="radioUlasan" class="radio-ulasan" />
                <div class="radio-btn bg-ulasan text-center mx-1 px-2 py-2 fz-8 d-flex flex-column align-items-center">
                    <div class="d-flex yellow">
                        <span><i class="ri-star-fill"></i></span>
                        <span><i class="ri-star-fill"></i></span>
                        <span><i class="ri-star-fill"></i></span>
                    </div>
                    <span class="d-block yellow">(115)</span>
                </div>
            </label>
            <label class="col-2 card-ulasan px-0">
                <input type="radio" name="radioUlasan" class="radio-ulasan" />
                <div class="radio-btn bg-ulasan text-center mx-1 px-2 py-2 fz-8 d-flex flex-column align-items-center">
                    <div class="d-flex yellow">
                        <span><i class="ri-star-fill"></i></span>
                        <span><i class="ri-star-fill"></i></span>
                    </div>
                    <span class="d-block yellow">(115)</span>
                </div>
            </label>
            <label class="col-2 card-ulasan px-0">
                <input type="radio" name="radioUlasan" class="radio-ulasan" />
                <div class="radio-btn bg-ulasan text-center mx-1 px-2 py-2 fz-8 d-flex flex-column align-items-center">
                    <div class="d-flex yellow">
                        <span><i class="ri-star-fill"></i></span>
                    </div>
                    <span class="d-block yellow">(115)</span>
                </div>
            </label>
        </div>
        <hr style="margin-left: -50px; margin-right: -50px">
        <div class="container">
            <div class="row d-flex my-4 ms-sm-4">
                <div class="col-1 profile">
                    <img src="assets/img/profile.jpg" alt="" class="profileImg">
                </div>
                <div class="col-9 d-flex flex-column">
                    <span class="fz-10">Achmad</span>
                    <div class="star">
                        <span class="fz-10 yellow"><i class="ri-star-fill"></i></span>
                        <span class="fz-10 yellow"><i class="ri-star-fill"></i></span>
                        <span class="fz-10 yellow"><i class="ri-star-fill"></i></span>
                        <span class="fz-10 yellow"><i class="ri-star-fill"></i></span>
                        <span class="fz-10 yellow"><i class="ri-star-fill"></i></span>
                    </div>
                    <span class="fz-10">2022-04-05 11:58 | Variasi: N - MERAH MUDA
                    </span>
                    <span class="fz-12 mt-3">Alhamdulilah Barang sudah sampai dipacking dengan rapi.. bagus
                        tidak
                        rusak.
                        Terima kasih
                    </span>
                    <div class="d-flex gap-2">
                        <img src="assets/img/imgUlasan.jpg" alt="" class="imgUlasan mt-3">
                        <img src="assets/img/imgUlasan.jpg" alt="" class="imgUlasan mt-3">
                        <img src="assets/img/imgUlasan.jpg" alt="" class="imgUlasan mt-3">
                    </div>
                </div>
            </div>
            <hr />
            <div class="row d-flex my-4 ms-sm-4">
                <div class="col-1 profile">
                    <img src="assets/img/profile.jpg" alt="" class="profileImg">
                </div>
                <div class="col-9 d-flex flex-column">
                    <span class="fz-10">Achmad</span>
                    <div class="star">
                        <span class="fz-10 yellow"><i class="ri-star-fill"></i></span>
                        <span class="fz-10 yellow"><i class="ri-star-fill"></i></span>
                        <span class="fz-10 yellow"><i class="ri-star-fill"></i></span>
                        <span class="fz-10 yellow"><i class="ri-star-fill"></i></span>
                        <span class="fz-10 yellow"><i class="ri-star-fill"></i></span>
                    </div>
                    <span class="fz-10">2022-04-05 11:58 | Variasi: N - MERAH MUDA
                    </span>
                    <span class="fz-12 mt-3">Alhamdulilah Barang sudah sampai dipacking dengan rapi.. bagus
                        tidak
                        rusak.
                        Terima kasih
                    </span>
                    <div class="d-flex gap-2">
                        <img src="assets/img/imgUlasan.jpg" alt="" class="imgUlasan mt-3">
                        <img src="assets/img/imgUlasan.jpg" alt="" class="imgUlasan mt-3">
                        <img src="assets/img/imgUlasan.jpg" alt="" class="imgUlasan mt-3">
                    </div>
                </div>
            </div>
        </div>
        <hr />
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>