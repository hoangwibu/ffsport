
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?= URLROOT ?>/public/img/content/favicona.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title><?= $data['title'] ?></title>
    <link rel="stylesheet" href="<?=CSS?>admin2.css">
    <link rel="stylesheet" href="<?=CSS?>adminForm.css">
</head>

<body>
    <nav class="menu-admin">
        <div class="logo-name">
            <div class="logo-image">
                <!--<img src="images/logo.png" alt="">-->
            </div>

            <a href="<?= URLROOT?>" target="_blank" rel="noopener noreferrer"><span class="logo_name">FFSPORT</span></a>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="<?php echo URL_ADMIN_ROOT; ?>">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Home</span>
                    </a></li>
                <li><a href="<?php echo URL_ADMIN_CATE; ?>">
                    <i class="uil uil-bars"></i>
                        <span class="link-name">Loại</span>
                    </a></li>
                <li><a href="<?php echo URL_ADMIN_PRODUCT; ?>">
                    <i class="uil uil-gold"></i>
                        <span class="link-name">Sản phẩm</span>
                    </a></li>
                <li><a href="<?php echo URL_ADMIN_USER; ?>">
                    <i class="uil uil-users-alt"></i>
                        <span class="link-name">Tài khoản</span>
                    </a></li>
                <li><a href="<?php echo URL_ADMIN_COMMENT; ?>">
                        <i class="uil uil-comments"></i>
                        <span class="link-name">Bình luận</span>
                    </a></li>
                <li><a href="<?php echo URL_ADMIN_ORDER; ?>">
                    <i class="uil uil-postcard"></i>
                        <span class="link-name">Đơn hàng</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li><a href="<?= URL_ACCOUNT.'/logout' ?>">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a></li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input id="live-search" type="text" placeholder="Search...">
            </div>

            <!--<img src="images/profile.jpg" alt="">-->
        </div>

    
<script src="<?php echo URLROOT ?>/public/js/admin.js"></script>


