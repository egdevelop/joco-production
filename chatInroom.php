<?php
require $_SERVER['DOCUMENT_ROOT'] . '/server/config/functions.php';
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

    <title>Chat Detail</title>
</head>

<body style="background: #F5F5F5;">

    <div class="body-wrapper container">
        <div class="position-fixed start-0 end-0 top-0 bg-white z-3">
            <div class="container pt-2 pb-3 mb-1 d-block d-lg-none">
                <a onclick="history.back()"
                    class="text-dark d-flex gap-2 align-items-center justify-content-start borbot">
                    <span class="fz-20 mt-1"><i class="ri-arrow-left-s-line"></i></span>
                    <span class="fz-16 fw-600">Chat</span>
                </a>
                <div class="text-dark d-flex align-items-center justify-content-start gap-2 mt-2">
                    <div class="left">
                        <img src="assets/img/products1.jpg" alt="" style="width: 4rem">
                    </div>
                    <div class="right">
                        <span class="fz-14 fw-600">Topi Fashion
                            Anak Laki - Laki & Perempuan.</span>
                    </div>
                </div>
            </div>
        </div>
        <div style="max-height: 450px;" class="imessage mt-5 pt-5">
            <div class="d-flex align-items-center gap-3 my-3 mt-5 pt-5">
                <div class="d-flex align-items-end">
                    <p class="from-them-res margin-b_one">Halo kak,ada yang bisa dibantu ?</p>
                    <span class="fz-9 text">19:01 PM</span>
                </div>
            </div>
            <div class="d-flex align-items-end justify-content-end my-3">
                <span class="fz-9 text-dark">19:01 PM</span>
                <p class="from-me-res">Nanti malam saya order yah</p>
            </div>
            <div class="d-flex align-items-center gap-3 my-3">
                <div class="d-flex align-items-end">
                    <p class="from-them-res margin-b_one">Terimakasih ditunggu ordernya kk</p>
                    <span class="fz-9 text">19:01 PM</span>
                </div>
            </div>
            <div class="d-flex align-items-end justify-content-end my-3">
                <span class="fz-9 text-dark">19:01 PM</span>
                <p class="from-me-res">Okee siap ditunggu aja</p>
            </div>
            <div class="d-flex align-items-end justify-content-end my-3">
                <span class="fz-9 text-dark">19:01 PM</span>
                <p class="from-me-res">Nanti malam saya order yah</p>
            </div>
            <div class="d-flex align-items-center gap-3 my-3">
                <div class="d-flex align-items-end">
                    <p class="from-them-res margin-b_one">Terimakasih ditunggu ordernya kk</p>
                    <span class="fz-9 text">19:01 PM</span>
                </div>
            </div>
            <div class="d-flex align-items-end justify-content-end my-3">
                <span class="fz-9 text-dark">19:01 PM</span>
                <p class="from-me-res">Okee siap ditunggu aja</p>
            </div>
        </div>
        <div class="ketik2 bg-white py-3">
            <div class="row container d-flex align-items-center justify-content-between">
                <div class="col-2 bg-blue-link d-flex align-items-center justify-content-center">
                    <span class="text-light mt-1" style="font-size:1.4rem"><i class="ri-attachment-line"></i></span>
                </div>
                <div class="col-10">
                    <input type="text" style="border:none; border-radius: 30px;"
                        class="form-control bg-abu fz-12 py-2 mt-1" placeholder="Kirim pesan">
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d005399.js"></script>
    <script>
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
    </script>
</body>

</html>