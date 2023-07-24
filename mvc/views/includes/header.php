<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?= URLROOT ?>/public/img/content/favicon.ico">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- reset css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jgthms/minireset.css@master/minireset.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title><?=(isset($data['title'])? $data['title'] : 'FreeSport')?></title>
    <!-- lienket css -->

    <link rel="stylesheet" href="<?= CSS ?>about.css">
    <link rel="stylesheet" href="<?= CSS ?>contract.css">
    <link rel="stylesheet" href="<?= CSS ?>khachhang.css">
    <link rel="stylesheet" href="<?= CSS ?>store.css">
    <link rel="stylesheet" href="<?= CSS ?>support.css">
    <link rel="stylesheet" href="<?= CSS ?>detail3.css">
    <link rel="stylesheet" href="<?= CSS ?>stylee.css">
    <link rel="stylesheet" href="<?= CSS ?>category.css">
    <link rel="stylesheet" href="<?= CSS ?>reponsive1.css">
</head>

<body>
    <div class="app">
        <div class="container__header">
            <header class="header">
                <div class="logo"><a href="<?php echo URLROOT; ?>">FREESPORT</a></div>
                <div class="search">
                    <form class="search__form" action="<?= URL_CATEGORY_SEARCH ?>" method="post">
                        <input class="search__ipt" name="key" type="text" placeholder="Search...">
                        <button class="btn-search" name="submit" type="submit"><i class="fa-sharp fa-solid
                                        fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
                <div class="cart">
                    <a href="<?= URL_PRODUCT ?>/cart"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="user">
                    <a href="<?php if (isset($_SESSION['account'])) {
                                    echo '#';
                                } else echo URL_ACCOUNT . '/login' ?>" class="account">
                        <i class="fa-solid fa-user" style="color: #fff;"></i><b> <?php if (isset($_SESSION['account'])) {
                                                                                        echo $_SESSION['account']['ten_kh'];
                                                                                    } else echo 'Tài khoản' ?> </b>
                    </a>
                    <?php if (isset($_SESSION['account'])) : ?>
                        <ul class="drop__down logout">
                            <li><a href="<?= URL_ACCOUNT . '/logout' ?>"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                        </ul>
                    <?php endif ?>
                </div>
            </header>
        </div>
        <div class="container__menu">
            <div id="grid__menu">
                <div id="toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <nav class="menu">
                    <ul class="main_menu">
                        <li><a href="<?php echo URLROOT; ?>"><i class="fa-solid fa-house-user"></i> Trang chủ</a></li>
                        <li><a href="<?= URL_CATEGORY ?>"><i class="fa-solid fa-bars"></i> Danh mục <i class="fa-solid fa-caret-down"></i></a>
                            <ul class="drop__down">
                                <?php foreach ($data['cate'] as $cate) : extract($cate); ?>
                                    <li><a href="<?= URL_CATEGORY_COLLECTIONS . $ma_loai ?>"><?= $ten_loai ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li><a href="<?= URLROOT?>/home/about"><i class="fa-solid fa-address-card"></i> Về chúng tôi</a></li>
                        <li><a href="<?= URLROOT?>/home/contact"><i class="fa-solid fa-address-book"></i> Liên Hệ</a></li>
                        <li><a href="<?= URLROOT?>/home/support"><i class="fa-solid fa-tty"></i> Hỏi đáp</a></li>
                        <li><a href="<?= URLROOT?>/home/store"><i class="fa-solid fa-shop"></i> Hệ thống cửa hàng</a></li>
                        <li><a href="<?= URLROOT?>/home/customer"><i class="fa-solid fa-users"></i> Khách hàng</a></li>
                    </ul>
                </nav>
            </div>
        </div>