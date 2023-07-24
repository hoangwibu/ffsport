<?php
class view extends Caller
{
    public function __construct()
    {
        //gọi model Product
        $this->ProductModel = $this->a_model('product');
        $this->CommentModel = $this->a_model('comment');
        $this->OrderModel = $this->a_model('bill');
        $this->CateModel = $this->a_model('cate');
    }

    public function product($id)
    {
        $this->ProductModel->plusView($id);
        $cate  = $this->CateModel->getCate();
        $comment = $this->CommentModel->showComment($id);
        if (isset($_POST['submit'])) {
            if ($_POST['text']!='') {
                $id_user  = $_SESSION['account']['ma_kh'];
                $this->CommentModel->createComment($_POST['text'],$id_user,$id);
                header("Refresh:0");
            }
        }
        $product  = $this->ProductModel->findProductById($id);
        $this->view_product('product', [
            'product' => $product,
            'comment' => $comment,
            'cate' => $cate
        ]);
        
    }
    public function cate($id)
    {
        $product  = $this->ProductModel->getProductByCate($id);
        $this->view_product('product', [
            'product' => $product
        ]);
    }
    public function cart()
    {
        $cate  = $this->CateModel->getCate();
        if (isset($_POST['submit'])) {
            $id = $_POST['idProduct'];
            $product  = $this->ProductModel->findProductById($id);
            $_SESSION['cart'][] = $product; 
        }
        $this->view_product('cart', [
            'cate' => $cate
        ]);
    }
    public function deleteCart($key)
    {
        unset($_SESSION['cart'][$key]);
        header('location:'.URL_PRODUCT.'/cart');
    }
    public function order()
    {
        $cate  = $this->CateModel->getCate();
        if (!isset($_SESSION['account'])) {
            header('location:'.URL_ACCOUNT.'/login');
        }
        else{
            if (isset($_POST['submit'])) {
            $_SESSION['order'] = $_POST['cart'];
            }
            $this->view_product('order', [
                'cate' => $cate ]);
            if(isset($_POST['order'])) { //createBill($order_id, $product_id,$amount)
                $id_order = $this->OrderModel->createOrder($_SESSION['account']['ma_kh'], $_POST['number'],$_POST['address'],$_POST['total']);
                foreach ($_SESSION['order'] as $product) : extract($product);
                    $this->OrderModel->createBill($id_order, $ma_hh,$so_luong);
                endforeach;
                unset($_SESSION['cart']);
                echo "<script>alert('Đặt hàng thành công!')</script>";
                }
            
        }
        
    }
}
