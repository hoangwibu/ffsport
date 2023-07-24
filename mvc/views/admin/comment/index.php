<?php require_once APPROOT . '/views/includes/a_header.php';
//time format

var_dump($data['page'][0])
?>

<div class="dash-content">
  <div class="activity">
    <div class="title">
      <i class="uil uil-gold"></i>
      <span class="text">Quản lí bình luận</span>
    </div>

    <table id="customers">
      <tr>
        <th><i class="uil uil-list-ol"></i> ID cmt</th>
        <th><i class="uil uil-paragraph"></i> ID user</th>
        <th><i class="uil uil-n-a"></i> Họ tên</th>
        <th><i class="uil uil-key-skeleton-alt"></i> Mã sản phẩm</th>
        <th><i class="uil uil-text-fields"></i> Nội dung</th>
        <th><i class="uil uil-clock"></i> Thời gian bl</th>
        <th> <i class="uil uil-file-edit-alt"></i> Action</th>
      </tr>

      <?php
      if (!empty($data['comment'])) :
        //view("index, data = ["product" => $product "got Comment From Model" ]")
        //$product = [""]
        foreach ($data['comment'] as $comment) : extract($comment); ?>
          <tr>
            <td><?= $ma_bl ?></td>
            <td>
              </h2><?= $ma_kh ?><h2>
            </td>
            <td><?= $ten_kh ?></td>
            <td>
              <p><?= $ma_hh ?></p>
            </td>
            <td>
              <p><?= $noi_dung ?></p>
            </td>
            <td>
              <p><?= $ngay_bl ?></p>
            </td>
            <td style="font-size: 30px;">
              <a onclick="return confirm('Bạn có chắc muốn xóa?')" href="<?= URLROOT ?>/a_comment/delete/<?= $ma_bl ?>"><i class="uil uil-trash"></i></a>
            </td>
          </tr>
      <?php endforeach;
      endif; if (isset($data['page'])) ?>
    </table>
    <div class="page" style="float: right; margin: 10px 10px 20px 10px">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="<?= URLROOT ?>/a_comment/page/<?= $data['page'][0] ?>">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#"><?= $data['page'][1] ?></a></li>
          <li class="page-item"><a class="page-link" href="<?= URLROOT ?>/a_comment/page/<?= $data['page'][2] ?>">Next</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#live-search").keyup(function() {
      if (input != '') {
        var input = $(this).val()
        $("#customers").css("display", "")
        $.ajax({
          url: '<?= URL_ADMIN_COMMENT . "/search" ?>',
          method: 'POST',
          data: {
            input: input
          },
          success: function(data) {
            $("#customers").html(data);
          }
        })
      } else {
        $("#a").css("display", "none")
      }
    })
  })
</script>