<?php require_once APPROOT . '/views/includes/a_header.php'; ?>
<div class="dash-content">
    <div class="activity">
        <div class="title">
            <i class="uil uil-clock-three"></i>
            <span class="text">Quản lý tài khoản</span>
            <div class="create"><a href=""><i class="uil uil-plus"></i></a></div>
        </div>
        <div class="container">
            <?php foreach ($data['findUser'] as $user) : extract($user); ?>
                <form action="<?= URL_ADMIN_USER ?>/update/<?= $ma_kh ?>" method="POST" enctype="multipart/form-data">
                    <div class="details personal">
                        <span class="title"> + Cập nhật tài khoản</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>Họ tên</label>
                                <input type="text" name="name" value="<?= $ten_kh ?>" placeholder="Tên sản phẩm" required>
                            </div>
                            <div class="input-field">
                                <label>Email</label>
                                <input type="email" name="email" value="<?= $email ?>" placeholder="email" required>
                            </div>
                            <div class="input-field">
                                <label>Mật khẩu</label>
                                <input type="password" name="pass" value="<?= $mat_khau ?>" placeholder="Mật khẩu" required>
                            </div>
                            <div class="input-field">
                                <label>Vai trò</label>
                                <select name="role">
                                    <option value="0" <?php if ($vai_tro == 0) echo "selected" ?>>User</option>
                                    <option value="1" <?php if ($vai_tro == 1) echo "selected" ?>>Admin</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>Trạng thái</label>
                                <select name="status">
                                    <option value="1" <?php if ($kich_hoat == 1) echo "selected" ?>>On</option>
                                    <option value="0" <?php if ($kich_hoat == 0) echo "selected" ?>>Off</option>
                                </select>
                            </div>
                        </div>
                        <div class="field2">
                            <div class="input-field">
                                <input class="input-file" id="my-file" type="file" name="avt">
                                <label tabindex="0" for="my-file" class="input-file-trigger"><i class="uil uil-image-plus"></i> Thêm hình ảnh</label>
                            </div>
                            <p class="file-return"></p>
                        </div>

                    </div>
        </div>
        <button class="sumbit" type="submit" name="submit">
            <span class="btn">Update</span>
        </button>
        </form>
    <?php endforeach; ?>
    </div>
</div>