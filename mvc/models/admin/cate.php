<?php
class Cate
{
    private $db;
    public $table_cate = "loai";
    public $cate_id = "ma_loai";
    public $cate_name = "ten_loai";
    
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getCate()
    {
        $sql = "SELECT * FROM $this->table_cate";
        $result = $this->db->select($sql);
        return $result;
    }

    public function createCate($name)
    {
        $sql = "INSERT INTO $this->table_cate ($this->cate_name)
                VALUES ('$name')";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function findCateById($id)
    {
        $sql = "SELECT * FROM $this->table_cate WHERE $this->cate_id = '$id'";
        $result = $this->db->select($sql);
        return $result;
    }

    public function updateCate($id, $name)
    {
        $sql = "UPDATE $this->table_cate SET $this->cate_name = '$name'
                                WHERE $this->cate_id = '$id'";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteCate($id)
    {
        $sql = "DELETE FROM $this->table_cate WHERE $this->cate_id = '$id'";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
