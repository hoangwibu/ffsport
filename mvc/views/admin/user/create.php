<?php require_once APPROOT . '/views/includes/a_header.php'; ?>
<div class="dash-content">
    <div class="activity">
        <div class="title">
            <i class="uil uil-clock-three"></i>
            <span class="text">Quản lý tài khoản</span>
        </div>
        <div class="container">
            <form action="<?= URL_ADMIN_USER ?>/create" method="POST" enctype="multipart/form-data">
                <div class="details personal">
                    <span class="title"> + Thêm tài khoản</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Họ tên</label>
                            <input type="text" name="name" placeholder="Tên sản phẩm" required>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="email" required>
                        </div>
                        <div class="input-field">
                            <label>Mật khẩu</label>
                            <input type="password" name="pass" placeholder="Mật khẩu" required>
                        </div>
                        <div class="input-field">
                            <label>Vai trò</label>
                            <select name="role">
                                <option value="0">User</option>
                                <option value="1">Admin</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Trạng thái</label>
                            <select name="status">
                                <option selected value="1">On</option>
                                <option value="0">Off</option>
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
            <span class="btn">Thêm</span>
        </button>
        </form>
    </div>
</div>
