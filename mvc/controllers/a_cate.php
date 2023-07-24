<?php
class a_cate extends Caller
{
    public function __construct()
    {
        $this->check_admin();
        //gọi model Cate
        $this->CateModel = $this->a_model('cate');
    }

    public function index()
    {
        //gọi method getCate
        $cate  = $this->CateModel->getCate();

        //gọi và show dữ liệu ra view
        $this->a_view_cate('index', [
            'cate' => $cate,
            'title'=> 'Quản lý loại' 
        ]);
    }

    public function create()
    {
        if (isset($_POST['submit'])) {
            $result = $this->CateModel->createCate($_POST['cate_name']);
            if ($result) {
                header('location:'.URL_ADMIN_CATE);
            }
        }
        $this->a_view_cate('create', [
            'title'=> 'Thêm loại' 
        ]);
        
    }



    public function update($id)
    {
        $findCate = $this->CateModel->findCateById($id);

        if (isset($_POST['submit'])) {
            $update = $this->CateModel->updateCate($id, $_POST['cate_name']);
            if ($update) {
                header('location:'.URL_ADMIN_CATE);

            }
        }

        $this->a_view_cate('update', [
            'findCate' => $findCate,
            'title'=> 'Cập nhật loại' 
        ]);
    }

    public function delete($id){
        $delete = $this->CateModel->deleteCate($id);
        if($delete){
            header('location:'.URL_ADMIN_CATE);

        }
        $this->a_view_cate('index');
    }
    public function test()
    {
        header('location:' .URL_ADMIN_CATE);
    }
}
