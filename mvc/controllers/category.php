<?php

use function PHPSTORM_META\type;

class category extends Caller
{
    public function __construct()
    {
        //gọi model Product
        $this->ProductModel = $this->a_model('product');
        $this->CateModel = $this->a_model('cate');
    }

    public function index()
    {
        $cate  = $this->CateModel->getCate();
        $ALLproduct  = $this->ProductModel->getProduct();
        $name_cate = 'Danh mục sản phẩm';
        $this->view_collections('collections', [
            'c_title' => $name_cate,
            'product' => $ALLproduct,
            'cate' => $cate
        ]);
        
    }
    public function collections($id)
    {
        $product  = $this->ProductModel->getProductByCate($id);
        $cate  = $this->CateModel->getCate();
        $name_cate = $this->CateModel->findCateById($id);
        $this->view_collections('collections', [
            'c_title' => $name_cate,
            'product' => $product,
            'cate' => $cate
        ]);
        
    }
    public function spec($id)
    {
        
        $id = str_replace('%20',' ',$id);
        $product  = $this->ProductModel->getProductBySpec($id);
        $cate  = $this->CateModel->getCate();
        $name_cate = $product[0]['dac_biet'] ? 'Giày cho '. $product[0]['dac_biet'] : "Không tìm thấy sản phẩm" ;
        $this->view_collections('collections', [
            'c_title' => $name_cate,
            'product' => $product,
            'cate' => $cate
        ]);
        
    }
    public function search()
    {
        if (isset($_POST['submit'])) {
            $product  = $this->ProductModel->search($_POST['key']);
            $name_cate = $product[0] ? 'Kết quả tìm kiếm cho "'.$_POST['key'].'"' : "Không tìm thấy sản phẩm" ;
            $cate  = $this->CateModel->getCate();
        
            $this->view_collections('collections', [
                'c_title' => $name_cate,
                'product' => $product,
                'cate' => $cate
            ]);
        } else {
            echo 'Ko co gi ca';
        }
        
        
        
    }
}
