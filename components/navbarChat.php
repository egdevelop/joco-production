<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!-- Mobile Navbar -->
<div class="bg-blue position-fixed top-0 start-0 end-0 pt-4 pb-3 mb-1 d-block d-md-none">
    <div class="container">
        <a onclick="history.back()" class="text-light d-flex gap-2 align-items-center justify-content-start">
            <span class="fz-20"><i class="ri-arrow-left-s-line"></i></span>
            <span class="fz-16 fw-600">Chat</span>
        </a>
        <form class="pb-1 pt-3 d-flex gap-3 align-items-center justify-content-center nosubmit">
            <input style="font-size: 12px;" class="nosubmit z-1 form-control" type="search" placeholder="Cari chat"
                aria-label="Search">
        </form>
    </div>
</div>

<!-- Desktop Navbar -->
<div class="bg-blue py-2 w-100 position-fixed z-3 d-none d-md-block">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="left d-flex gap-2 align-items-center">
                <span class="fz-12 text-light">Ikuti kami di</span>
                <span class="text-light"><i class="ri-instagram-fill"></i></span>
            </div>
            <div class="cursor-pointer kanan d-flex align-items-center gap-2 position-relative">
                <?php if (!$_SESSION['email']) : ?>
                <a href="daftar.php" class="fz-12 text-light">Daftar</a>
                <span class="fz-12 text-light">|</span>
                <a href="login.php" class="fz-12 text-light">Login</a>
                <?php else : ?>
                <div class="dropdown">
                    <div class="dropbtn d-flex align-items-center me-2">
                        <img src="<?= $_SESSION['picture'] ?>" alt="" class="imgSmall">
                        <span class="fz-12 text-light ms-2"><?= $_SESSION['name'] ?></span>
                    </div>
                    <div class="dropdown-content">
                        <a href="profilDetail.php" class="listProfile w-100 fz-12 m-auto">
                            Akun saya
                        </a>
                        <a href="pesanan-saya.php" class="listProfile w-100 fz-12 m-auto">
                            Pesanan saya
                        </a>
                        <a href="server/Login/logout.php" class="fz-12 m-auto listProfile w-100">
                            Logout
                        </a>
                        <!-- <div class="panah"></div> -->
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <form class="d-flex gap-5 align-items-center justify-content-center nosubmit">
            <a href="index.php">
                <img src="assets/img/logo.svg" alt="">
            </a>
            <input class="nosubmit z-1 form-control" type="search" placeholder="Cari produk" aria-label="Search">
            <a href="keranjang.php" class="ms-3 text-light iconNavbar z-1"><i class="ri-shopping-cart-line"></i></a>
            <a href="#" class="ms-3 text-light iconNavbar z-1"><i class="me-3 ri-customer-service-2-line"></i></a>
        </form>
    </div>
</div>