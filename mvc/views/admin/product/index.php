<?php require_once APPROOT . '/views/includes/a_header.php'; ?>
<div class="dash-content">
  <div class="activity">
    <div class="title">
      <i class="uil uil-gold"></i>
      <span class="text">Quản lí sản phẩm</span>
      <div class="create"><a href="<?= URLROOT ?>/a_product/create"><i class="uil uil-plus"></i></a></div>
    </div>

    <table id="customers">
      <tr>
        <th><i class="uil uil-list-ol"></i> ID</th>
        <th><i class="uil uil-paragraph"></i> Tên sản phẩm</th>
        <th><i class="uil uil-dollar-sign"></i> Đơn giá</th>
        <th><i class="uil uil-percentage"></i> Giảm giá</th>
        <th><i class="uil uil-calender"></i> Ngày nhập</th>
        <th><i class="uil uil-image"></i> Hình</th>
        <th><i class="uil uil-chart-pie-alt"></i> Đặc biệt</th>
        <th><i class="uil uil-list-ui-alt"></i> Loại</th>
        <th> <i class="uil uil-file-edit-alt"></i> Action</th>
      </tr>
      <?php
  if (!empty($data['product'])) :
    //view("index, data = ["product" => $product "got User From Model" ]")
    //$product = [""]
    foreach ($data['product'] as $product) : extract($product); ?>
      <tr>
        <td><?= $ma_hh ?></td>
        <td>
          </h2><?= $ten_hh ?><h2>
        </td>
        <td><?= number_format($don_gia) ?>đ</td>
        <td><?= $giam_gia ?></td>
        <td>
          <p><?= $ngay_nhap ?></p>
        </td>
        <td><img src="<?= IMAGE_PRODUCT . $hinh ?>" width="80px" height="80px" style="object-fit: cover;"></td>
        <td>
          <p><?= $dac_biet ?></p>
        </td>
        <td>
          <p><?= $ma_loai ?></p>
        </td>
        <td style="font-size: 30px;"><a style="margin-right: 10px;" href="<?= URLROOT .'/a_product/update/'.$ma_hh?>"><i class="uil uil-edit-alt"></i></a>
          <a onclick="return confirm('Bạn có chắc muốn xóa?')" href="<?= URLROOT .'/a_product/delete/'.$ma_hh?>"><i class="uil uil-trash"></i></a>
        </td>
      </tr>
  <?php endforeach;
  endif; ?>
    </table>
  </div>
</div>
