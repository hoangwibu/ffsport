<?php
class home extends Caller
{
    public function __construct()
    {
        //gọi model User
        $this->HomeModel = $this->model('accountModel');
        $this->ProductModel = $this->a_model('product');
        $this->CateModel = $this->a_model('cate');
        
    }
    public function index()
    {
        //gọi method get
        $user  = $this->HomeModel->getUser();
        $cate  = $this->CateModel->getCate();
        $productHot[0]  = $this->ProductModel->getProductHot(1);
        $productHot[1]  = $this->ProductModel->getProductHot(2);
        $productSale = $this->ProductModel->getProductSale();
        //gọi và show dữ liệu ra view
        $this->view('index', [
            'user' => $user,
            'cate' => $cate,
            'productHot'=>$productHot,
            'productSale'=>$productSale,
        ]);
    }
    public function about()
    {
        $cate  = $this->CateModel->getCate();
        //gọi và show dữ liệu ra view
        $this->view('about', [
            'cate' => $cate,
            'title'=>'About'
        ]);
    }
    public function contact()
    {
        $cate  = $this->CateModel->getCate();
        //gọi và show dữ liệu ra view
        $this->view('contact', [
            'cate' => $cate,
            'title'=>'contact'
        ]);
    }
    public function customer()
    {
        $cate  = $this->CateModel->getCate();
        //gọi và show dữ liệu ra view
        $this->view('customer', [
            'cate' => $cate,
            'title'=>'customer'
        ]);
    }
    public function store()
    {
        $cate  = $this->CateModel->getCate();
        //gọi và show dữ liệu ra view
        $this->view('store', [
            'cate' => $cate,
            'title'=>'store'
        ]);
    }
    public function support()
    {
        $cate  = $this->CateModel->getCate();
        //gọi và show dữ liệu ra view
        $this->view('support', [
            'cate' => $cate,
            'title'=>'support'
        ]);
    }
}
