<?php

include "server/config/functions.php";

session_start();

if(isset($_POST)){
    regisSubs($_POST);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style2.css?<?php echo time(); ?>">
    <title>Daftar Member</title>
</head>

<body>
    <div class="pb-5 mb-5 pb-xl-0 mb-xl-5">
        <div class="container position-relative mb-5 pb-5 pb-xl-0 mb-xl-5">
            <div class="row d-flex justify-content-start align-items-center h-100 pb-5 mb-5 pb-xl-0 mb-xl-5">
                <div class="col-xl-6 col-12 col-lg-10 mx-auto mx-xl-0 mt-3 pt-3 mt-md-5 pt-md-5">
                    <div class="d-none d-md-flex">
                        <div class="col-12">
                            <h1 class="f-40 fw-bold">Daftar Member</h1>
                            <p class="f-24 pt-3">Nikmati harga grosir dengan bergabung bersama kami</p>
                        </div>
                    </div>
                    <div class="d-flex d-md-none">
                        <div class="col-12 mx-auto">
                            <h1 class="f-24 text-center fw-bold">Daftar Member </h1>
                            <p class=" f-16 text-center px-5 py-2">Nikmati harga grosir dengan bergabung bersama kami
                            </p>
                        </div>
                    </div>
                    <div class="d-none d-md-flex">
                        <img src="assets/img/underline.png" class="position-absolute " style="margin-top: -10px;"
                            alt="">
                    </div>
                    <div class="d-flex d-md-none justify-content-center">
                        <img src="assets/img/underline.png" class="position-absolute pt-2" style="margin-top: -10px;"
                            alt="">
                    </div>

                    <form action="daftar.php" method="post">
                        <div class="col-11 col-xl-7 pt-1 pt-md-4 mt-4 mx-auto mx-md-0 ">
                            <input type="number" class="form-control padding f-12 py-3 ps-3" id="inputNama"
                                aria-describedby="nama" name="no" required placeholder="Masukkan no.Whatsapp">
                        </div>
                        <div class="col-11 col-xl-7 mt-0 mx-auto mx-md-0 ">
                            <label for="nama" class="form-label f-12 ">*Optional</label>
                            <input type="text" class="form-control padding  f-12 py-3 mt-2 ps-3" id="inputNama"
                                aria-describedby="nama" name="ig" required placeholder="Masukkan Username instagram">
                        </div>
                        <div class="col-11 col-xl-7 mt-0 mx-auto mx-md-0 ">
                            <label for="nama" class="form-label f-12 ">*Optional</label>
                            <input type="text" class="form-control padding  f-12 py-3 mt-2 ps-3" id="inputNama"
                                aria-describedby="nama" required disabled value="<?= $_GET['paket'] ?>">
                            <input type="hidden" class="form-control padding  f-12 py-3 mt-2 ps-3" id="inputNama"
                                aria-describedby="nama" name="paket" required value="<?= $_GET['paket'] ?>">
                            <input type="hidden" class="form-control padding  f-12 py-3 mt-2 ps-3" id="hargaInput"
                                aria-describedby="nama" name="harga" required value="<?= $_GET['paket'] ?>">
                            <input type="hidden" class="form-control padding  f-12 py-3 mt-2 ps-3" id="userid"
                                aria-describedby="nama" name="userid" required value="<?= $_SESSION['userid'] ?>">
                            <div class="d-block pt-2">
                                <label class="fw-bold">Harga</label>
                                <p class="" id="harga">Rp. 5000</p>
                            </div>
                            <button type="submit" class="btn btn-success">Bayar
                                Sekarang</button>
                    </form>

                </div>
            </div>
            <div class="d-none d-xl-flex col-xl-6 h-100 position-fixed top-0 bottom-0 end-0">
                <img src="assets/img/backgroundd.svg"
                    class=" d-flex-justify-content-end align-items-end position-absolute end-0 h-100" alt="">
            </div>
            <footer class="d-flex d-md-none py-4 mt-4 fixed-bottom" style="background-color: #29AAE3;">
                <div class="col-10 mx-auto mt-2">
                    <a href="#"><button class="btnmobile py-3  fw-semibold w-100">Bayar Sekarang</button> </a>
                    <p class="f-12 text-light text-center  mx-5 mt-4 fw-semibold">FAQ:join member untuk dapatkan
                        akses
                        pembelian
                        lebih banyak</p>
                    <p class="f-12 text-light text-center mt-3 fw-semibold">Copyright @ 2022</p>
                </div>
            </footer>
        </div>
    </div>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script>
var hargaText = document.getElementById('harga');
var hargaInput = document.getElementById('hargaInput');
var paket = "<?= $_GET['paket'] ?>";
if (paket == "2bulan") {
    hargaText.innerHTML = "Rp. 5000";
    hargaInput.value = 5000;
} else if (paket == "5bulan") {
    hargaText.innerHTML = "Rp. 10000";
    hargaInput.value = 10000;
} else if (paket == "1tahun") {
    hargaText.innerHTML = "Rp. 20000";
    hargaInput.value = 20000;
}
</script>
</body>


</html>