<?php require_once APPROOT . '/views/includes/header.php'; ?>
<div class="padding-cart">
        <h2 class="text-center" style="padding:10px;background-color: #cecece;margin-bottom:10px">Giỏ hàng</h2>
        <?php if(isset($_SESSION['cart'])) :?>
        <form class="container" method="POST" action="<?= URL_PRODUCT?>/order">
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th style="width:3%">STT</th>
                        <th style="width:54%">Tên sản phẩm</th>
                        <th style="width:10%">Giảm giá</th>
                        <th style="width:22%" class="text-center">Thành tiền</th>
                        <th style="width:8%">Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($_SESSION['cart'])) : $i = 1;
                        foreach ($_SESSION['cart'] as $key => $value) : extract($value[0]); ?>
                        <tr> <input type="hidden" name="cart[<?=$i-1?>][ma_hh]" value="<?= $ma_hh ?>">
                            <td data-th="STT"><?=$i?></td>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-2 hidden-xs"><img src="<?= IMAGE_PRODUCT . $hinh ?>" alt="Sản phẩm 1"
                                            class="img-responsive" width="100">
                                    </div>
                                    <div class="col-sm-10">
                                        <h4 class="nomargin"><?= $ten_hh ?></h4>
                                        <p style="font-size: smaller;">Giá gốc: <?= number_format($don_gia) ?>đ</p>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price" style="color:green"><?= $giam_gia ?>%</td>
                            </td>
                            <td data-th="Subtotal" class="text-center"><?=number_format($don_gia - ($don_gia * $giam_gia) / 100)?> đ</td>
                            <td data-th="Quantity"><input class="form-control text-center" name="cart[<?=$i-1?>][so_luong]" value="1" type="number">
                            <td class="actions" data-th="">
                                <a href="<?= URL_PRODUCT.'/deleteCart/'.$key?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr> 
                        <?php $i++; endforeach;endif; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td><a href="javascript:history.back()" class="btn btn-warning"><i class="fa fa-angle-left"></i>
                                Quay về</a>
                        </td>
                        <td colspan="2" class="hidden-xs"> </td>
                        </td>
                        <td><button type="submit" name="submit" class="btn btn-success btn-block">Đặt hàng<i
                                    class="fa fa-angle-right"></i></button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form> <?php endif ?>
    </div>
    <?php require_once APPROOT . '/views/includes/footer.php'; ?>