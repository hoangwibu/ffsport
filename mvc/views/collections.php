<?php require_once APPROOT . '/views/includes/header.php'; ?>
<section class="app__content">
  <section class="content">
    <!-- margin auto content -->
    <div class="margin-auto__content">
      <!-- danh mục và sản phẩm -->
      <!-- category -->
      <?php require_once APPROOT . '/views/includes/category.php'; ?>

      <!-- product -->
      <div class="product">
        <div class="title__product">
          <h1><?php if (isset($data['c_title'])) {
                echo (isset($data['c_title'][0]['ten_loai']) ? $data['c_title'][0]['ten_loai'] : $data['c_title']);
              } else echo "Không tìm thấy danh mục" ?></h1>
        </div>
        <div class="box__card">
          <?php if (!empty($data['product'])) :
            foreach ($data['product'] as $product) : extract($product); ?>
              <div class="card">
                <a href="<?= URL_PRODUCT . '/product/' . $ma_hh ?>"><img src="<?= IMAGE_PRODUCT . $hinh ?>" alt="product1" style="width:120px"></a>
                <a href="<?= URL_PRODUCT . '/product/' . $ma_hh ?>">
                  <h3><?= $ten_hh ?></h3>
                </a>
                <a class="price"><?php if ($giam_gia > 0) {
                  echo '<del style="color: #817e7e; font-family:Cambria, serif">' . number_format($don_gia) . '</del>';
                  } echo number_format($don_gia - ($don_gia * $giam_gia) / 100) ?>đ</a>
                <?php if ($giam_gia > 0) { ?>
                  <div class="sale">
                    <p>Sale <b> <?= $giam_gia ?>%</b></p>
                  </div>
                <?php } ?>
                <a class="view" href="<?= URL_PRODUCT . '/product/' . $ma_hh ?>"><button>Xem sản phẩm</button></a>
              </div>
          <?php endforeach;
          endif; ?>
        </div>
      </div>
      <!-- end product -->

      <!-- danh mục -->



      <!-- info -->
      <?php require_once APPROOT . '/views/includes/footer.php'; ?>