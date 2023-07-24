<?php require_once APPROOT . '/views/includes/a_header.php';?>
<div class="dash-content">
  <div class="activity">
    <div class="title">
      <i class="uil uil-gold"></i>
      <span class="text">Quản lí tài khoản</span>
      <div class="create"><a href="<?= URLROOT ?>/a_user/create"><i class="uil uil-plus"></i></a></div>
    </div>

    <table id="customers">
      <tr>
        <th><i class="uil uil-list-ol"></i> ID User</th>
        <th><i class="uil uil-paragraph"></i> Họ tên</th>
        <th><i class="uil uil-envelope"></i> Email</th>
        <th><i class="uil uil-key-skeleton-alt"></i> Mật khẩu</th>
        <th><i class="uil uil-image"></i> Hình</th>
        <th><i class="uil uil-presentation-edit"></i> Vai trò</th>
        <th><i class="uil uil-toggle-on"></i> Trạng thái</th>
        <th> <i class="uil uil-file-edit-alt"></i> Action</th>
      </tr>
      <?php
  if (!empty($data['user'])) :
    //view("index, data = ["product" => $product "got User From Model" ]")
    //$product = [""]
    foreach ($data['user'] as $user) : extract($user); ?>
      <tr>
      <td><?= $ma_kh ?></td>
    <td></h2><?= $ten_kh ?><h2></td>
    <td><?= $email ?></td>
    <td><p><?= $mat_khau ?></p></td>
    <td><img src="<?= IMAGE_USER . $hinh ?>" width="80px" height="80px" style="object-fit: cover;"></td>
    <td><p><?= $vai_tro==0? "user": "admin";?></p></td>
    <td><p><?= $kich_hoat==1? "Hoạt động": "Tắt"; ?></p></td>
        <td style="font-size: 30px;">
            <a style="margin-right: 10px;" href="<?= URLROOT ?>/a_user/update/<?= $ma_kh ?>"><i class="uil uil-edit-alt"></i></a>
            <a onclick="return confirm('Bạn có chắc muốn xóa?')" href="<?= URLROOT ?>/a_user/delete/<?= $ma_kh ?>"><i class="uil uil-trash"></i></a>
        </td>
      </tr>
  <?php endforeach;
  endif; ?>
    </table>
  </div>
</div>