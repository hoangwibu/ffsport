<?php require_once APPROOT . '/views/includes/a_header.php'; ?>
<div class="dash-content">
    <div class="activity">
        <div class="title">
            <i class="uil uil-clock-three"></i>
            <span class="text">Quản lý loại</span>
        </div>
        <div class="container">
        <?php foreach ($data['findCate'] as $cate) : extract($cate); ?>
            <form action="<?= URL_ADMIN_CATE.'/update/'.$ma_loai?>" method="POST">
                <div class="details personal">
                    <span class="title"> + Thêm loại</span>
                    <div class="fields">
                        <div class="input-field">
                            <input type="text" name="cate_name" value="<?= $ten_loai ?>" required>
                        </div>
                </div>
        </div>
        <button class="sumbit" type="submit" name="submit">
            <span class="btn">Update</span>
        </button>
        </form> <?php endforeach; ?>
    </div>
</div>
