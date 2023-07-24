<?php require_once APPROOT . '/views/includes/a_header.php';?>

<div class="dash-content">
  <div class="activity">
    <div class="title">
      <i class="uil uil-gold"></i>
      <span class="text">Quản lí loại</span>
      <div class="create"><a href="<?= URLROOT ?>/a_cate/create"><i class="uil uil-plus"></i></a></div>
    </div>

    <table id="customers">
      <tr>
        <th><i class="uil uil-list-ol"></i> Mã loại</th>
        <th><i class="uil uil-paragraph"></i> Tên loại</th>
        <th> <i class="uil uil-file-edit-alt"></i> Action</th>
      </tr>
      <?php
  if (!empty($data['cate'])) :
    //view("index, data = ["product" => $product "got User From Model" ]")
    //$product = [""]
    foreach ($data['cate'] as $cate) : extract($cate); ?>
      <tr>
        <td><?= $ma_loai ?></td>
        <td>
          </h2><?= $ten_loai ?><h2>
        <td style="font-size: 30px;">
            <a style="margin-right: 10px;" href="<?= URLROOT ?>/a_cate/update/<?= $ma_loai ?>"><i class="uil uil-edit-alt"></i></a>
            <a onclick="return confirm('Bạn có chắc muốn xóa?')" href="<?= URLROOT ?>/a_cate/delete/<?= $ma_loai ?>"><i class="uil uil-trash"></i></a>
        </td>
      </tr>
  <?php endforeach;
  endif; ?>
    </table>
  </div>
</div>