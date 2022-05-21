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

    <title>Gagal Daftar Member</title>
</head>

<body style="background: #29AAE3;">

    <div class="body-wrapper">
        <!-- Mobile Navbar -->
        <div class="bg-blue text-light py-4">
            <div class=" container">
                <div class="d-flex justify-content-start">
                    <a onclick="history.back()" class="cursor-pointer text-light left d-flex align-items-center gap-2">
                        <i class="ri-arrow-left-s-line"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Gagal Daftar -->
        <div class="container px-5 pt-3 pb-5 mb-lg-5">
            <div class="d-flex flex-column align-items-center justify-content-center text-center gap-5">
                <i style="font-size: 5rem;" class="text-light ri-close-circle-line d-block d-lg-none"></i>
                <i style="font-size: 10rem;" class="text-light ri-close-circle-line d-none d-lg-block"></i>
                <span class="text-light fz-16 fw-bold">Proses Pendaftaran Member Mu Gagal</span>
                <a href="daftar.php" class="btn bg-light blue fz-16 fw-bold px-4 w-100 d-block d-lg-none">Coba
                    Ulangi</a>
                <a href="daftar.php" class="btn bg-light blue fz-16 fw-bold px-4 d-none d-lg-block">Coba Ulangi</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>