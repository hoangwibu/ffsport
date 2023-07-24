<?php
class a_user extends Caller
{
    public function __construct()
    {
        $this->check_admin();
        //gọi model User
        $this->UserModel = $this->a_model('user');
    }

    public function index()
    {
        //gọi method getuser
        $user  = $this->UserModel->getUser();

        //gọi và show dữ liệu ra view
        $this->a_view_user('index', [
            'user' => $user,
            'title'=> 'Quản lý tài khoản' 
            
        ]);
    }

    public function create()
    {
        if (isset($_POST['submit'])) {
            $avt = save_file("avt",DIR_IMAGE_USER);
            $result = $this->UserModel->createUser($_POST['name'], $_POST['email'], $_POST['pass'], $avt, $_POST['role'], $_POST['status']);
            if ($result) {
                header('location:'.URL_ADMIN_USER);
            } else echo '<script>alert("falfasf")</script>';
        }
        $this->a_view_user('create',[
            'title'=> 'Thêm tài khoản' 

        ]);
    }



    public function update($id)
    {
        $findUser = $this->UserModel->findUserById($id);
        if (isset($_POST['submit'])) {
            $avt = save_file("avt",DIR_IMAGE_USER);
            $update = $this->UserModel->updateUser($id, $_POST['name'], $_POST['email'], $_POST['pass'], $avt, $_POST['role'], $_POST['status']);
            if ($update) {
                header('location:'.URL_ADMIN_USER);
            } else echo '<script>alert("update true")</script>';
        }
        $this->a_view_user('update', [
            'findUser' => $findUser,
            'title'=> 'Cập nhật tài khoản' 

        ]);
    }

    public function delete($id){
        $delete = $this->UserModel->deleteUser($id);
        if($delete){
            header('location:'.URL_ADMIN_USER);

        }
        $this->a_view_user('index');
    }
    public function test()
    {
        header('location:' .URL_ADMIN_USER);
    }
}
