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

    <title>Ubah Profil</title>
</head>

<body>

    <div class="d-none d-lg-block">
        <?php include "components/navbarAkun.php" ?>
    </div>
    <div class="bg-white pt-4 pb-3 mb-1 d-block d-lg-none">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <a onclick="history.back()" class="text-dark d-flex gap-2 align-items-center justify-content-start">
                    <span class="fz-20 mt-1"><i class="ri-arrow-left-s-line"></i></span>
                    <span class="fz-16 fw-600">Ubah Profil</span>
                </a>
                <div class="right">
                    <i class="blue fz-20 ri-check-fill"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Ubah Profil -->
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
                    <div class="bg-white borad-10-res p-3 p-lg-4">
                        <div class="d-flex justify-content-center">
                            <div class="d-flex flex-column align-items-center gap-3">
                                <div class="profileEdit position-relative">
                                    <div class="content-overlay d-flex align-items-center justify-content-center">
                                        <span class="fz-10 text-light m-auto mb-3">Ubah</span>
                                    </div>
                                    <img src="<?= ($_SESSION['picture']) ?  $_SESSION['picture'] : "assets/img/profile.jpg" ?>"
                                        alt="" class="profileImgBig">
                                </div>
                                <span class="text-dark fz-12">Gambar profil</span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white container mt-3 py-3">
                        <a href="ubah-nama.php" class="text-dark d-flex align-items-center justify-content-between">
                            <div class="text-dark d-flex align-items-center gap-2">
                                <span class="fz-12 fw-500">Nama</span>
                            </div>
                            <div class="right d-flex align-items-center">
                                <span class="fz-12">Mochammad Naufal</span>
                                <i class="ri-arrow-right-s-line"></i>
                            </div>
                        </a>
                        <hr>
                        <a href="ubah-username.php" class="text-dark d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <span class="fz-12 fw-500">Username</span>
                            </div>
                            <div class="right d-flex align-items-center">
                                <span class="fz-12">Naufal</span>
                                <i class="ri-arrow-right-s-line"></i>
                            </div>
                        </a>
                    </div>
                    <div class="bg-white container mt-3 py-3">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#jenisKelamin"
                            class="text-dark d-flex align-items-center justify-content-between">
                            <div href="pesanan-saya.php" class="text-dark d-flex align-items-center gap-2">
                                <span class="fz-12 fw-500">Jenis Kelamin</span>
                            </div>
                            <div class="right d-flex align-items-center">
                                <span class="fz-12">Pria</span>
                                <i class="ri-arrow-right-s-line"></i>
                            </div>
                        </a>
                        <!-- Modal Jenis Kelamin -->
                        <div class="modal fade" id="jenisKelamin" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <span class="fz-16 fw-bold d-flex justify-content-center">Jenis Kelamin</span>
                                        <div type="button" class="fz-14 my-4" data-bs-dismiss="modal">Pria
                                        </div>
                                        <div type="button" class="fz-14 my-4" data-bs-dismiss="modal">Perempuan
                                        </div>
                                        <div type="button" class="fz-14 my-4" data-bs-dismiss="modal">Lainnya
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#tglLahir"
                            class="text-dark d-flex align-items-center justify-content-between">
                            <div href="pesanan-saya.php" class="text-dark d-flex align-items-center gap-2">
                                <span class="fz-12 fw-500">Tanggal Lahir</span>
                            </div>
                            <div class="right d-flex align-items-center">
                                <span class="fz-12">01-11-2000</span>
                                <i class="ri-arrow-right-s-line"></i>
                            </div>
                        </a>
                        <!-- Modal Tanggal Lahir -->
                        <div class="modal fade" id="tglLahir" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <span class="fz-16 fw-600 d-flex justify-content-center">Pilih Tanggal</span>
                                        <div class="row my-4">
                                            <div class="col-4 px-0">
                                                <select class="form-select fz-9" aria-label="Default select example"
                                                    name="tanggal">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option selected value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                            </div>
                                            <div class="col-4 px-0">
                                                <select class="form-select fz-9" aria-label="Default select example"
                                                    name="bulan">
                                                    <option value="januari">Januari</option>
                                                    <option value="februari">Februari</option>
                                                    <option value="maret">Maret</option>
                                                    <option value="april">April</option>
                                                    <option value="mei">Mei</option>
                                                    <option value="juni">Juni</option>
                                                    <option value="juli">Juli</option>
                                                    <option value="agustus">Agustus</option>
                                                    <option value="september">September</option>
                                                    <option value="oktober">Oktober</option>
                                                    <option value="november">November</option>
                                                    <option selected value="desember">Desember</option>
                                                </select>
                                            </div>
                                            <div class="col-4 px-0">
                                                <select class="form-select fz-9" aria-label="Default select example"
                                                    name="tahun">
                                                    <option selected value="1999">1999</option>
                                                    <option value="2000">2000</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="fz-12 mx-3 btn text-dark"
                                                data-bs-dismiss="modal">Kembali</button>
                                            <button type="button" class="fz-12 mx-3 btn blue">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <a href="ubah-nomor.php" class="text-dark d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <span class="fz-12 fw-500">Nomor Telepon</span>
                            </div>
                            <div class="right d-flex align-items-center">
                                <span class="fz-12">********01</span>
                                <i class="ri-arrow-right-s-line"></i>
                            </div>
                        </a>
                        <hr>
                        <a href="ubah-email.php" class="text-dark d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <span class="fz-12 fw-500">Email</span>
                            </div>
                            <div class="right d-flex align-items-center">
                                <span class="fz-12">aw****@gmail.com</span>
                                <i class="ri-arrow-right-s-line"></i>
                            </div>
                        </a>
                    </div>
                    <div class="bg-white container mt-3 py-3">
                        <a href="ubah-sandi.php" class="text-dark d-flex align-items-center justify-content-between">
                            <div class="text-dark d-flex align-items-center gap-2">
                                <span class="fz-12 fw-500">Ubah Password</span>
                            </div>
                            <div class="right d-flex align-items-center">
                                <i class="ri-arrow-right-s-line"></i>
                            </div>
                        </a>
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