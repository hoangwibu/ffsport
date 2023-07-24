<?php
class user
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

    public function createUser($name, $mail, $pass, $avt, $role, $status)
    {
        $sql = "INSERT INTO $this->table_user ($this->user_name, $this->user_email, $this->user_pass, $this->user_avt, $this->user_role, $this->user_status)
                VALUES ('$name','$mail','$pass', '$avt', '$role', '$status')";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
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
    public function totalUser()
    {
        $sql = "SELECT COUNT(*) as total_user FROM $this->table_user WHERE $this->user_role = 0";
        $result = $this->db->select_One($sql);
        return $result;
    }
}
