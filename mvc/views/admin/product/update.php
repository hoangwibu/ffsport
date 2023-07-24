<?php require_once APPROOT . '/views/includes/a_header.php'; ?>
<div class="dash-content">
    <div class="activity">
        <div class="title">
            <i class="uil uil-clock-three"></i>
            <span class="text">Quản lý sản phẩm</span>
            <div class="create"><a href="<?= URLROOT ?>/a_product/create"><i class="uil uil-plus"></i></a></div>
        </div>
        <div class="container">
        <?php foreach ($data['findProduct'] as $product) : extract($product);?>
            <form action="<?= URL_ADMIN_PRODUCT ?>/update/<?= $ma_hh ?>" method="POST" enctype="multipart/form-data">
                <div class="details personal">
                    <span class="title"> + Cập nhật sản phẩm</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Tên</label>
                            <input type="text" name="name"  value="<?= $ten_hh ?>"  placeholder="Tên sản phẩm" required>
                        </div>
                        <div class="input-field">
                            <label>Đơn giá (vnd)</label>
                            <input type="number" name="price" value="<?= $don_gia ?>" placeholder="VNĐ" required>
                        </div>
                        <div class="input-field">
                            <label>Giảm giá (%) </label>
                            <input type="number" name="disc" value="<?= $giam_gia ?>" placeholder="Phần trăm giảm giá" required>
                        </div>
                        <div class="input-field">
                            <label>Ngày nhập</label>
                            <input type="date" name="date" value="<?= $ngay_nhap ?>" required>
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
                        <textarea name="text" cols="100%" rows="10"><?= $mo_ta ?>"</textarea>
                    </div>

                </div>
        </div>
        <button class="sumbit" type="submit" name="submit">
            <span class="btn">Cập nhật</span>
        </button>
        </form>
        <?php endforeach; ?>
    </div>
</div>

