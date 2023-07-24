<?php require_once APPROOT . '/views/includes/a_header.php'; ?>

<div class="dash-content">
    <div class="activity">
        <div class="title">
            <i class="uil uil-clock-three"></i>
            <span class="text">Quản lý sản phẩm</span>
        </div>
        <div class="container">
            <form action="<?= URL_ADMIN_PRODUCT ?>/create" method="POST" enctype="multipart/form-data">
                <div class="details personal">
                    <span class="title"> + Thêm sản phẩm</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Tên</label>
                            <input type="text" name="name" placeholder="Tên sản phẩm" required>
                        </div>
                        <div class="input-field">
                            <label>Đơn giá</label>
                            <input type="number" name="price" placeholder="VNĐ" required>
                        </div>
                        <div class="input-field">
                            <label>Giảm giá</label>
                            <input type="number" name="disc" placeholder="Phần trăm giảm giá" required>
                        </div>
                        <div class="input-field">
                            <label>Ngày nhập</label>
                            <input type="date" name="date" required>
                        </div>
                        <div class="input-field">
                            <label>Loại</label>
                            <select name="cate">
                                <?php if (!empty($data['cate'])) :
                                    foreach ($data['cate'] as $cate) : extract($cate);?>
                                        <option value="<?= $ma_loai ?>"><?= $ten_loai ?></option>
                                <?php endforeach;
                                endif ?>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Đặc biệt</label name="spec">
                            <select name="spec">
                                <option selected disabled>Giày theo vị trí</option>
                                <option value="Hậu vệ">Hậu vệ</option>
                                <option value="Tiền vệ">Tiền vệ</option>
                                <option value="Tiền vệ cánh">Tiền vệ cánh</option>
                                <option value="Tiền đạo">Tiền đạo</option>
                            </select>
                        </div>
                    </div>
                    <div class="field2">
                        <div class="input-field">
                            <input class="input-file" id="my-file" type="file" name="img">
                            <label tabindex="0" for="my-file" class="input-file-trigger"><i class="uil uil-image-plus"></i> Thêm hình ảnh</label>
                        </div>
                        <p class="file-return"></p>
                    </div>
                    <div class="input-field">
                        <label>Mô tả</label> <br>
                        <textarea name="text" cols="100%" rows="10"></textarea>
                    </div>

                </div>
        </div>
        <button class="sumbit" type="submit" name="submit">
            <span class="btn">Thêm</span>
        </button>
        </form>
    </div>
</div>
