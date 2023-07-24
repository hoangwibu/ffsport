<?php
class accountModel
{
    private $db;
    public $table_user = "khach_hang";
    public $user_id = "ma_kh";
    public $user_name = "ten_kh";
    public $user_email = "email";
    public $user_pass = "mat_khau";
    public $user_avt = "hinh";
    public $user_role = "vai_tro";
    public $user_status = "kich_hoat";
    
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getUser()
    {
        $sql = "SELECT * FROM $this->table_user";
        $result = $this->db->select($sql);
        return $result;
    }

    public function register($name, $mail, $pass)
    {
        $sql = "INSERT INTO $this->table_user ($this->user_name, $this->user_email, $this->user_pass)
                VALUES ('$name','$mail','$pass')";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function login($mail, $pass)
        {
            $sql = "SELECT * FROM $this->table_user WHERE $this->user_email = '$mail' AND $this->user_pass = '$pass'";
            $result = $this->db->select($sql);
            if ($result == null) {
                return false;
            } else {
                $_SESSION['account']=$result[0];
                return true;
            }
        }
    public function findUserById($id)
    {
        $sql = "SELECT * FROM $this->table_user WHERE $this->user_id = '$id'";
        $result = $this->db->select($sql);
        return $result;
    }

    public function updateUser($id, $name, $mail, $pass, $avt, $role, $status)
    {
        $sql = "UPDATE $this->table_user SET $this->user_name = '$name',
                                    $this->user_email = '$mail',
                                    $this->user_pass = '$pass',
                                    $this->user_avt = '$avt',
                                    $this->user_role = '$role',
                                    $this->user_status = '$status'
                                WHERE $this->user_id = '$id'";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM $this->table_user WHERE $this->user_id = '$id'";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
