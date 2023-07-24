<?php require_once APPROOT . '/views/includes/a_header.php'; ?>
<div class="dash-content">
    <div class="activity">
        <div class="title">
            <i class="uil uil-clock-three"></i>
            <span class="text">Xem đơn hàng</span>
        </div>
        <div class="container">
            <?php extract($data['user']); ?>
            <form action="<?= URL_ADMIN_ORDER ?>/update/<?= $ma_dh ?>" method="POST">
                <div class="details personal">
                    <span class="title"> Người đặt hàng</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Tên khách hàng</label>
                            <input type="text" name="name" value="<?= $ten_kh ?>" disabled>
                        </div>
                        <div class="input-field">
                            <label>Số điện thoại</label>
                            <input type="number" name="number" value="<?= $sdt ?>" disabled>
                        </div>
                        <div class="input-field">
                            <label>Địa chỉ </label>
                            <input type="text" name="address" value="<?= $dia_chi ?>" disabled>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" name="email" value="<?= $email ?>" disabled>
                        </div>
                    </div>
                    <span class="title"> Hóa đơn <br><i class="uil uil-receipt-alt"> </i> </span>
                    <table id="customers">
                        <tr>
                            <th style="background-color: #e3e3ea;"><i class="uil uil-list-ol"></i>Mã sản phẩm</th>
                            <th style="background-color: #e3e3ea;"><i class="uil uil-paragraph"></i>Tên Sản phẩm</th>
                            <th style="background-color: #e3e3ea;"><i class="uil uil-image"></i>Hình</th>
                            <th style="background-color: #e3e3ea;"><i class="uil uil-pricetag-alt"></i>Đơn giá</th>
                            <th style="background-color: #e3e3ea;"><i class="uil uil-percentage"></i>Giảm giá</th>
                            <th style="background-color: #e3e3ea;"><i class="uil uil-direction"></i>Số lượng</th>
                            <th style="background-color: #e3e3ea;"><i class="uil uil-bill"></i>Thành tiền</th>
                        </tr>
                        <?php
                        if (!empty($data['bill'])) :
                            foreach ($data['bill'] as $bill) : extract($bill); ?>
                                <tr>
                                    <td><?= $ma_hh ?></td>
                                    <td></h2><?= $ten_hh ?><h2></td>
                                    <td><img src="<?= IMAGE_PRODUCT . $hinh ?>" width="80px" height="80px" style="object-fit: cover;"></td>
                                    <td><?= number_format($don_gia) ?>đ</td>
                                    <td><?= $giam_gia ?>%</td>
                                    <td><?= $so_luong ?></td>
                                    <td><?= number_format($thanh_tien) ?>đ</td>
                                </tr>
                        <?php endforeach;
                        endif; ?>
                    </table>
                    <div class="field2">
                        <div class="input-field">
                            <label>Tổng tiền:</label>
                            <input type="text" value="<?= number_format($tong_tien) ?> đ" disabled>
                        </div>
                    </div>
                    <div class="input-field">
                        <label>Trạng thái</label>
                        <select name="status">
                            <option selected value="Chưa xác nhận">Chưa xác nhận</option>
                            <option value="Đang lấy hàng">Đang lấy hàng</option>
                            <option value="Đang giao">Đang giao</option>
                            <option value="Đã giao">Đã giao</option>
                            <option value="Bị hủy">Bị hủy</option>
                        </select>
                    </div>
                </div>
        </div>
        <button class="sumbit" type="submit" name="submit">
            <span class="btn">Ok</span>
        </button>
        </form>
    </div>
</div>