<?php require_once APPROOT . '/views/includes/a_header.php';?>

<div class="dash-content">
    <div class="activity">
        <div class="title">
            <i class="uil uil-clock-three"></i>
            <span class="text">Quản lý loại</span>
        </div>
        <div class="container">
            <form action="<?= URL_ADMIN_CATE ?>/create" method="POST">
                <div class="details personal">
                    <span class="title"> + Thêm loại</span>
                    <div class="fields">
                        <div class="input-field">
                            <input type="text" name="cate_name" placeholder="Tên loại" required>
                        </div>
                </div>
        </div>
        <button class="sumbit" type="submit" name="submit">
            <span class="btn">Thêm</span>
        </button>
        </form>
    </div>
</div>