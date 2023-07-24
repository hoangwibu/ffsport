<?php require_once APPROOT . '/views/includes/header.php'; ?>
<div class="container__content">
    <div class="grid__content">
        <div class="image__left">
            <img src="<?= IMAGE_PRODUCT . $data['product'][0]['hinh'] ?>" alt="">
        </div>
        <div class="info__right">
            <div class="title">
                <h3><?= $data['product'][0]['ten_hh'] ?></h3>
            </div>
            <div class="product__price">
                <?php if ($data['product'][0]['giam_gia'] > 0) {
                    echo '<del style="color: #817e7e; font-family:Cambria, serif">' . number_format($data['product'][0]['don_gia']) . '</del>';
                }
                echo "<span>". number_format($data['product'][0]['don_gia'] - ($data['product'][0]['don_gia'] * $data['product'][0]['giam_gia']) / 100) ."</span>" ?>
            </div>
            <div class="ncc">
                <span style="font-size: 1rem; color: #555">Nhà cung cấp: FREESPORT</span>
            </div>
            <form method="POST" action="<?php echo URL_PRODUCT?>/cart" class="button__buy mt-4">    
                <input type="hidden" name="idProduct" value="<?=$data['product'][0]['ma_hh']?>">
                <button class="btn btn-danger" name="submit" type="submit"><a style="color: #fff" ;>Mua
                        ngay</a></button>
                <button class="btn btn-info" name="submit" type="submit"><a style="color: #fff" ;>Thêm vào giỏ
                        hàng</a></button>
            </form>
        </div>
        <div class="mota">
            <p class="mota__title">MÔ TẢ SẢN PHẨM</p>
            <p class="mota__p">
                <?= $data['product'][0]['mo_ta'] ?>
            </p>
            <div class="comment" style="margin-top: 30px;">
                <h3>Bình luận <br></h3>
                <?php if (isset($_SESSION["account"])) : ?>
                    <form class="cmt-input" method="POST" <?php if (!isset($_SESSION["account"])) echo 'style="display: none;"'; ?>>
                        <textarea name="text" id="text" cols="70" rows="2" placeholder="Để lại cảm nhận của bạn..."></textarea> <br>
                        <button name="submit" type="submit">Đăng bình luận</button>
                    </form>
                <?php else : ?>
                    <div class="no-login" style="font-size: 20px;">
                        <a style="font-size: 20px; color:blue" href="<?= URL_ACCOUNT ?>/login">Đăng nhập</a> Để bình luận
                    </div>
                <?php endif ?>

                <div class="comment-area">
                    <hr>
                    <?php if (!empty($data['comment'])) :
                    foreach ($data['comment'] as $comment) : extract($comment); ?>
                    <div class="comment-item">
                        <div class="user-info">
                            <div class="avatar">
                                <img src="<?= IMAGE_USER.$hinh ?>" alt="user avatar">
                            </div>
                            <div class="username">
                                <b><?=$ten_kh .'  '?></b>| <?=get_time_ago(strtotime($ngay_bl))?>
                            </div> 
                        </div>
                        <div class="comment-text">
                            <p class="cmt"><?=$noi_dung?></p>
                        </div>
                    </div>
                    <?php endforeach;
                    endif; ?>
                </div>
            </div>
        </div>

    </div>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>