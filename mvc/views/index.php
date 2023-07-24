<?php require_once APPROOT . '/views/includes/header.php'; ?>
<section class="app__content">
  <!-- slide -->
  <div class="slide">
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="<?= IMAGE_CONTENT ?>/slideshow_4.png" style="width:100%;">
      </div>

      <div class="mySlides fade">
        <img src="<?= IMAGE_CONTENT ?>/slideshow_2.jpg" style="width:100%">
      </div>

      <div class="mySlides fade">
        <img src="<?= IMAGE_CONTENT ?>/slideshow_3.jpg" style="width:100%">
      </div>
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
  </div>
  <!-- end slide -->
  <!-- product -->
  <div class="row__product">
    <div class="product_txt">
      <h1>SẢN PHẨM HOT</h1>
    </div>
    <div class="box__product">
      <?php if (!empty($data['productHot'])) :
        foreach ($data['productHot'][0] as $productHot) : extract($productHot); ?>
          <div class="product">
            <a href="<?= URL_PRODUCT . '/product/' . $ma_hh ?>"><img src="<?= IMAGE_PRODUCT . $hinh ?>" alt="">
            </a>
            <div class="product__info">
              <a href="<?= URL_PRODUCT . '/product/' . $ma_hh ?>"><?= $ten_hh ?></a>
            </div>
            <div class="product__price">
              <a href="<?= URL_PRODUCT . '/product/' . $ma_hh ?>">
                <?php if ($giam_gia > 0) {
                  echo '<del style="color: #817e7e; font-family:Cambria, serif;font-size:small">' . number_format($don_gia) . '</del>';
                }
                echo number_format($don_gia - ($don_gia * $giam_gia) / 100) ?>đ</a>
            </div>
            <?php if ($giam_gia > 0) {?>
              <div class="sale">
                <p>Sale <b> 12%</b></p>
              </div>
            <?php } ?>
          </div>
      <?php endforeach;
      endif; ?>
    </div>
    <div class="box__product">
      <?php if (!empty($data['productHot'])) :
        foreach ($data['productHot'][1] as $productHot) : extract($productHot); ?>
          <div class="product">
            <a href="<?= URL_PRODUCT . '/product/' . $ma_hh ?>"><img src="<?= IMAGE_PRODUCT . $hinh ?>" alt="">
            </a>
            <div class="product__info">
              <a href="<?= URL_PRODUCT . '/product/' . $ma_hh ?>"><?= $ten_hh ?></a>
            </div>
            <div class="product__price">
              <a href="<?= URL_PRODUCT . '/product/' . $ma_hh ?>">
                <?php if ($giam_gia > 0) {
                  echo '<del style="color: #817e7e; font-family:Cambria, serif;font-size:small">'.number_format($don_gia).'</del>';
                }
                echo number_format($don_gia - ($don_gia * $giam_gia) / 100) ?>đ</a>
            </div>
            <?php if ($giam_gia > 0) {?>
              <div class="sale">
                <p>Sale <b> <?=$giam_gia?>%</b></p>
              </div>
            <?php } ?>
          </div>
      <?php endforeach;
      endif; ?>
    </div>
  </div>
  <div class="row__product" style="padding: 0 15px">
    <div class="product_txt">
      <h1>ĐANG KHUYẾN MÃI</h1>
    </div>
    <div class="box__product">
      <?php if (!empty($data['productSale'])) :
        foreach ($data['productSale'] as $productSale) : extract($productSale); ?>
          <div class="product">
            <a href="<?= URL_PRODUCT . '/product/' . $ma_hh ?>"><img src="<?= IMAGE_PRODUCT . $hinh ?>" alt="">
            </a>
            <div class="product__info">
              <a href="<?= URL_PRODUCT . '/product/' . $ma_hh ?>"><?= $ten_hh ?></a>
            </div>
            <div class="product__price">
              <a href="<?= URL_PRODUCT . '/product/' . $ma_hh ?>"> <?php if ($giam_gia > 0) {
                echo '<del style="color: #817e7e; font-family:Cambria, serif;font-size:small">' . number_format($don_gia).'</del>';
                } echo number_format($don_gia - ($don_gia * $giam_gia) / 100) ?>đ</a>
            </div>
            <?php if ($giam_gia > 0) {?>
              <div class="sale">
                <p>Sale <b> <?=$giam_gia?>%</b></p>
              </div>
            <?php } ?>
          </div>
      <?php endforeach;
      endif; ?>
    </div>

  </div>
  <!-- end product -->

  <!-- danh mục -->
  <div class="row__category">
    <div class="category__title">
      <p class="title">CHỌN GIÀY THEO VỊ TRÍ</p>
    </div>
    <div class="box__category">
      <div class="box">
        <a href="<?= URL_CATEGORY_SPEC ?>Hau ve"><img src="<?= IMAGE_CONTENT ?>/position_banner_1.jpg" alt="HẬU VỆ"></a>
        <h3 class="txt">HẬU VỆ</h3>
        <p class="sp-txt">PHÒNG NGỰ CHẮC CHẮN</p>
      </div>

      <div class="box">
        <a href="<?= URL_CATEGORY_SPEC ?>Tien ve"><img src="<?= IMAGE_CONTENT ?>/position_banner_2.jpg" alt="TIỀN VỆ TRUNG TÂM"></a>
        <h3 class="txt">TIỀN VỆ</h3>
        <p class="sp-txt">CHUYỂN BÓNG, KIỂM SOÁT BÓNG</p>
      </div>

      <div class="box">
        <a href="<?= URL_CATEGORY_SPEC ?>tien dao canh"><img src="<?= IMAGE_CONTENT ?>/position_banner_3.jpg" alt="TIỀN VỆ CÁNH"></a>
        <h3 class="txt">TIỀN ĐẠO CÁNH</h3>
        <p class="sp-txt">TỐC ĐỘ, KỸ THUẬT, THĂNG BẰNG</p>
      </div>

      <div class="box">
        <a href="<?= URL_CATEGORY_SPEC ?>tien đao"><img src="<?= IMAGE_CONTENT ?>/position_banner_4.jpg" alt="TIỀN ĐẠO"></a>
        <h3 class="txt">TIỀN ĐẠO</h3>
        <p class="sp-txt">DỨT ĐIỂM CHÍNH XÁC</p>
      </div>
    </div>
  </div>
  <!-- end danh mục -->


  <!-- info -->
  <?php require_once APPROOT . '/views/includes/footer.php'; ?>
</section>
<script>
  let slideIndex = 0;
  showSlides();

  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 2000); // thay đổi slideshow theo giây
  }
</script>
<script>
  $(document).ready(function() {
    $('#toggle').click(function() {
      $('nav').slideToggle();
    });
  })
</script>
<script src="https://uhchat.net/code.php?f=e14e24"></script>