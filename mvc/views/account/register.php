<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/form.css">
    <title>Đăng ký tài khoản</title>
</head>

<body>
    <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 login-sec">
                    <h2 class="text-center">Register Now</h2>
                    <form class="login-form" method="POST" action="<?= URL_ACCOUNT ?>/register">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Họ và tên</label>
                            <input type="text" name="name" class="form-control" placeholder="Tên của bạn" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-uppercase">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Nhập email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                            <input type="password" name="pass" class="form-control" placeholder="Nhập mật khẩu" required>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                <small>Remember Me</small>
                            </label>
                            <button type="submit" name="submit" class="btn btn-login float-right">Đăng ký</button>
                        </div>
                        <div style="width: 100%; margin-top: 30px; font-family:'Times New Roman', Times, serif;
                        font-weight: 500;">
                            <p>Đã có tài khoản? Đăng nhập <a style="width: 100%; margin-top: 30px; font-family:'Times New Roman', Times, serif;
                                font-weight: 500;" href="<?= URL_ACCOUNT ?>/login">Tại đây</a> nha</p>
                        </div>
                    </form>
                    <div class="copy-text">Created with <i class="fa fa-heart"></i> by FREESPORT</div>
                </div>
                <div class="col-md-8 banner-sec"></div>
            </div>
    </section>
</body>

</html>
