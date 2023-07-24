<?php
class admin extends Caller
{
    public function __construct()
    {
        $this->check_admin();
        //gọi model user & account
        $this->ProductModel = $this->a_model('product');
        $this->UserModel = $this->a_model('user');
        $this->CommentModel = $this->a_model('comment');
        $this->AccountModel = $this->model('accountModel');
    }

    public function index()
    {
        //gọi method getuser
        $user  = $this->UserModel->getUser();
        $totalUser = $this->UserModel->totalUser();
        $product  = $this->ProductModel->totalProduct();
        $totalcomment  = $this->CommentModel->totalComment();
        //gọi và show dữ liệu ra view
        $this->a_view('index', [
            'user' => $user,
            'product' => $product,
            'totalUser' => $totalUser,
            'totalcomment' => $totalcomment,
            'title'=> 'FFSPORT - ADMIN'
        ]);
    }
}
