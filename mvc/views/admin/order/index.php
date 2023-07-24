<?php require_once APPROOT . '/views/includes/a_header.php';
?>
<div class="dash-content">
  <div class="activity">
    <div class="title">
      <i class="uil uil-gold"></i>
      <span class="text">Quản lí đơn hàng</span>
    </div>

    <table id="customers">
      <tr>
        <th><i class="uil uil-list-ol"></i> Mã đơn hàng</th>
        <th><i class="uil uil-paragraph"></i> ID user</th>
        <th><i class="uil uil-usd-square"></i> Tổng tiền</th>
        <th><i class="uil uil-clock"></i> Ngày đặt</th>
        <th><i class="uil uil-text-fields"></i> Trạng thái</th>
        <th> <i class="uil uil-file-edit-alt"></i> Action</th>
      </tr>
      <?php
  if (!empty($data['order'])) :
    //view("index, data = ["product" => $product "got Order From Model" ]")
    //$product = [""]
    foreach ($data['order'] as $order) : extract($order); ?>
      <tr>
      <td><?= $ma_dh ?></td>
    <td></h2><?= $ma_kh ?><h2></td>
    <td><?= number_format($tong_tien) ?>đ</td>
    <td><p><?= $ngay_tao ?></p></td>
    <td><p><?= $trang_thai?></p></td>
        <td style="font-size: 30px;">
            <a href="<?= URLROOT ?>/a_order/update/<?= $ma_dh ?>"><i class="uil uil-edit"></i></a>
            <a onclick="return confirm('Bạn có chắc muốn xóa?')" href="<?= URLROOT ?>/a_order/delete/<?= $ma_dh ?>"><i class="uil uil-trash"></i></a>
        </td>
      </tr>
  <?php endforeach;
  endif; ?>
    </table>
  </div>
</div>