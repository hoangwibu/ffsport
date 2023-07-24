<?php
class account extends Caller
{
    public function __construct()
    {
        //gọi model User
        $this->AccountModel = $this->model('accountModel');
    }

    public function index()
    {
        
        $account  = $this->AccountModel->getUser();

        //gọi và show dữ liệu ra view
        $this->view_account('index', [
            'account' => $account
        ]);
    }

    public function register()
    {
        if (isset($_POST['submit'])) {
            $result = $this->AccountModel->register( $_POST['name'], $_POST['email'],$_POST['pass']);
            if ($result) {
                header('location:'.URLROOT);
            } else echo '<script>alert("false")</script>';
        }
        $this->view_account('register');
    }
    public function login()
        {
            if (isset($_POST['submit'])) {
                $result = $this->AccountModel->login($_POST['email'], $_POST['pass']);
                if ($result) {
                    if ($_SESSION['account']['vai_tro']==1) {
                        header('location:'.URL_ADMIN_ROOT);
                    } else header('location:'.URLROOT);
                } else echo '<script>alert("Email hoặc mật khẩu!")</script>';
            }
            $this->view_account('login');
        }
        
    public function logout()
            {
                unset($_SESSION["account"]);
                echo '<script>alert("Da dang xuat!")</script>';
                header('location:'.URLROOT);
            }
    public function update($id)
    {
        $findUser = $this->UserModel->findUserById($id);
        if (isset($_POST['submit'])) {
            $avt = save_file("avt",DIR_IMAGE_USER);
            $update = $this->UserModel->updateUser($id, $_POST['name'], $_POST['email'], $_POST['pass'], $avt, $_POST['role'], $_POST['status']);
            if ($update) {
                header('location:'.URL_ADMIN_USER);
            } else echo '<script>alert("update false")</script>';
        }
        $this->a_view_user('update', [
            'findUser' => $findUser
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
