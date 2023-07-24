<?php
class a_product extends Caller
{
    public function __construct()
    {
        $this->check_admin();
        //gọi model Product
        $this->ProductModel = $this->a_model('product');
    }

    public function index()
    {
        //gọi method getproduct
        $product  = $this->ProductModel->getProduct();

        //gọi và show dữ liệu ra view
        $this->a_view_product('index', [
            'product' => $product,
            'title'=> 'Quản lý sản phẩm'
        ]);
    }

    public function create()
    {
        $cate = $this->ProductModel->getCate();
        if (isset($_POST['submit'])) {
            $img = save_file("img",DIR_IMAGE_PRODUCT);
            $result = $this->ProductModel->createProduct($_POST['name'], $_POST['price'], $_POST['disc'], $img, $_POST['date'], $_POST['text'], $_POST['spec'], $_POST['cate']);
            if ($result) {
                header('location:'.URL_ADMIN_PRODUCT);
            } else echo '<script>alert("falfasf")</script>';
        }
        $this->a_view_product('create',[
            'cate'=>$cate,
            'title'=> 'Thêm sản phẩm' 
        ]);
    }

    public function update($id)
    {
        $cate = $this->ProductModel->getCate();
        $findProduct = $this->ProductModel->findProductById($id);
        if (isset($_POST['submit'])) {
            $img = save_file("img",DIR_IMAGE_PRODUCT);
            $update = $this->ProductModel->updateProduct($id, $_POST['name'], $_POST['price'], $_POST['disc'], $img, $_POST['date'], $_POST['text'], $_POST['spec'], $_POST['cate']);
            if ($update) {
                header('location:'.URL_ADMIN_PRODUCT);
            } else echo '<script>alert("update FALSE")</script>';
        }
        $this->a_view_product('update', [
            'findProduct' => $findProduct,
            'cate' => $cate,
            'title'=> 'Cập nhật sản phẩm' 
        ]);
    }

    public function delete($id){
        $delete = $this->ProductModel->deleteProduct($id);
        if($delete){
            header('location:'.URL_ADMIN_PRODUCT);

        }
        $this->a_view_product('index');
    }
    public function test()
    {
        header('location:' .URL_ADMIN_PRODUCT);
    }
}
