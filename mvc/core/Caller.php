<?php
class Caller{
    //method gọi model
    public function model($model){
        require_once './mvc/models/'.$model.'.php';
        return new $model;
    }

    public function a_model($model){
        require_once './mvc/models/admin/'.$model.'.php';
        return new $model;
    }
    
    //method gọi view

    //admin views
    public function a_view($view, $data = []){
        require_once './mvc/views/admin/'.$view.'.php';
    }
    public function a_view_user($view, $data = []){
        require_once './mvc/views/admin/user/'.$view.'.php';
    }
    public function a_view_cate($view, $data = []){
        require_once './mvc/views/admin/cate/'.$view.'.php';
    }
    public function a_view_product($view, $data = []){
        require_once './mvc/views/admin/product/'.$view.'.php';
    }
    public function a_view_comment($view, $data = []){
        require_once './mvc/views/admin/comment/'.$view.'.php';
    }
    public function a_view_order($view, $data = []){
        require_once './mvc/views/admin/order/'.$view.'.php';
    }
    //site views
    public function view($view, $data = []){
        require_once './mvc/views/'.$view.'.php';
    }
    public function view_account($view, $data = []){
        require_once './mvc/views/account/'.$view.'.php';
    }
    public function view_product($view, $data = []){
        require_once './mvc/views/'.$view.'.php';
    }
    public function view_collections($view, $data = []){
        require_once './mvc/views/'.$view.'.php';
    }
    public function check_admin()
    {
        if (!isset($_SESSION['account'])||$_SESSION['account']['vai_tro']==0) {
            //ko phai admin thi cut 
            header('location:'.URLROOT);
        } 
    }
}

