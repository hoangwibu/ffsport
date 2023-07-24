<?php require_once APPROOT . '/views/includes/header.php'; ?>
<div class="padding-cart">
    <h2 class="text-center" style="padding:10px;background-color: #cecece; margin-bottom:10px">Đặt hàng</h2>
    <form class="container" method="POST" action="<?= URL_PRODUCT ?>/order">
    <h4>Thông tin nhận hàng:</h4><br>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" name="number" class="form-control" id="sdt" placeholder="Sdt" required>
            </div>
        </div>
        <div class="form-group">
            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Địa chỉ" required>
        </div>
        <div class="form-group">
            <label for="">Phương thức thanh toán:</label> <br>
            <div class="form-check">
                
                <input class="form-check-input" type="radio" id="defaultCheck1" checked>
                <label class="form-check-label" for="defaultCheck1">
                    Thanh toán khi nhận hàng
                </label>
            </div>
        </div>
        <table id="cart" class="table table-hover table-condensed">
            <h4>Đơn hàng của bạn:</h2>
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
                    <?php if (isset($_SESSION['cart'])) : $i = 1; $total = 0;
                        foreach ($_SESSION['cart'] as $key => $value) : extract($value[0]); ?>
                            <tr> <input type="hidden" name="cart[<?= $i - 1 ?>]['ma_hh']" value="<?= $ma_hh ?>">
                                <td data-th="STT"><?= $i ?></td>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-sm-2 hidden-xs"><img src="<?= IMAGE_PRODUCT . $hinh ?>" alt="Sản phẩm 1" class="img-responsive" width="100">
                                        </div>
                                        <div class="col-sm-10">
                                            <h4 class="nomargin"><?= $ten_hh ?></h4>
                                            <p style="font-size: smaller;">Giá gốc: <?= number_format($don_gia) ?>đ</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price" style="color:green"><?= $giam_gia ?>%</td>
                                </td>
                                <td data-th="Subtotal" class="text-center"><?= number_format($don_gia - ($don_gia * $giam_gia) / 100) ?> đ</td>
                                <td data-th="Quantity"><input class="form-control text-center" name="cart[<?= $i - 1 ?>]['so_luong']" value="<?=$_SESSION['order'][$i-1]['so_luong']?>" type="number" disabled>

                            </tr>
                    <?php $total = $total + ($don_gia - ($don_gia * $giam_gia)/100)*$_SESSION['order'][$i-1]['so_luong']; $i++; 
                        endforeach;
                    endif; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td><a href="javascript:history.back()" class="btn btn-warning"><i class="fa fa-angle-left"></i></a>
                        </td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td> Tổng: <b> <?=number_format($total)?> đ</b></td>
                        <td><button type="submit" name="order" class="btn btn-success btn-block">Đặt hàng<i class="fa fa-angleright-"></i></button>
                        </td>
                    </tr>
                </tfoot> <input type="hidden" name="total" value="<?=$total?>">
        </table>
    </form>
</div>
<?php require_once APPROOT . '/views/includes/footer.php'; ?>