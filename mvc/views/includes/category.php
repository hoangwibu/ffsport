<div class="category">
    <div class="title__category">
        <h3>DANH MỤC SẢN PHẨM</h3>
    </div>
    <div class="box__category">
        <ul class="main__category">
            <?php foreach ($data['cate'] as $cate) : extract($cate); ?>
            <li><a href="<?= URL_CATEGORY_COLLECTIONS. $ma_loai ?>"><?= $ten_loai ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>