<?php
class comment
{
    private $db;
    public $table_comment = "binh_luan";
    public $comment_id = "ma_bl";
    public $comment_user_id = "ma_kh";
    public $comment_product_id = "ma_hh";
    public $comment_text = "noi_dung";
    public $comment_date = "ngay_bl";
    
    public function __construct()
    {
        $this->db = new Database();
    }
    //get
    public function getComment($page)
    {
        $item = 4; //số sản phẩm mỗi trang
        $offset = ($page-1)*$item; // Trang 1 = Limit 4 OFFSET 0 => bắt đầu từ vị trí 0 sau đó lấy 4 item
        $sql = "SELECT ma_bl,khach_hang.ma_kh,ten_kh,hang_hoa.ma_hh,noi_dung,ngay_bl
        FROM binh_luan
        INNER JOIN khach_hang ON khach_hang.ma_kh = binh_luan.ma_kh
        INNER JOIN hang_hoa ON hang_hoa.ma_hh = binh_luan.ma_hh
        ORDER BY ma_bl desc LIMIT $item OFFSET $offset";
        $result = $this->db->select($sql);
        return $result;
    }
    public function showComment($idProduct)
    {
        $sql = "SELECT ten_kh,noi_dung,khach_hang.hinh,ngay_bl
        FROM binh_luan
        INNER JOIN khach_hang ON khach_hang.ma_kh = binh_luan.ma_kh
        INNER JOIN hang_hoa ON hang_hoa.ma_hh = binh_luan.ma_hh
        WHERE hang_hoa.ma_hh = $idProduct ORDER BY ma_bl desc LIMIT 7";
        $result = $this->db->select($sql);
        return $result;
    }

    public function createComment($comment_text, $comment_user_id, $comment_product_id)
    {
        $sql = "INSERT INTO $this->table_comment ($this->comment_text, $this->comment_user_id, $this->comment_product_id)
                VALUES ('$comment_text','$comment_user_id','$comment_product_id')";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function findCommentById($id)
    {
        $sql = "SELECT * FROM $this->table_comment WHERE $this->comment_id = '$id'";
        $result = $this->db->select($sql);
        return $result;
    }

    public function deleteComment($id)
    {
        $sql = "DELETE FROM $this->table_comment WHERE $this->comment_id = '$id'";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function search($key)
    {
        $sql = "SELECT * FROM $this->table_comment 
        INNER JOIN khach_hang ON khach_hang.ma_kh = binh_luan.ma_kh
        WHERE $this->comment_text LIKE '%$key%'
             OR ten_kh LIKE '%$key%'";
        $result = $this->db->select($sql);
        return $result;
    }
    public function totalComment()
    {
        $sql = "SELECT COUNT(*) as total_comment FROM $this->table_comment";
        $result = $this->db->select_One($sql);
        return $result;
    }
}
