<?php
class bill
{
    private $db;
    //bảng đơn hàng
    public $table_order         = "don_hang";
    public $order_id            = "ma_dh";
    public $order_user_id       = "ma_kh";
    public $order_user_number   = "sdt";
    public $order_user_address  = "dia_chi";
    public $order_total_money   = "tong_tien";
    public $order_date          = "ngay_tao";
    public $order_status        = "trang_thai";

    //bảng hóa đơn
    public $table_bill = "hoa_don";
    public $bill_order_id = "ma_dh";
    public $bill_product_id = "ma_hh";
    public $bill_amount = "so_luong";
    
    public function __construct()
    {
        $this->db = new Database();
    }
    //get
    public function getOrder()
    {
        $sql = "SELECT * FROM $this->table_order
        ORDER BY $this->order_id desc";
        $result = $this->db->select($sql);
        return $result;
    }

    public function createOrder($user_id, $user_number,$user_address,$total_money)
    {
        $sql = "INSERT INTO $this->table_order ($this->order_user_id, $this->order_user_number, 
                                                $this->order_user_address,$this->order_total_money)
                VALUES ('$user_id','$user_number','$user_address','$total_money')";
        $result = $this->db->execute($sql);
        $last_id = $this->db->conn->insert_id;
        if ($result) {
            return $last_id;
        } else {
            return false;
        }
    }
    public function createBill($order_id, $product_id,$amount)
    {
        $sql = "INSERT INTO $this->table_bill ($this->bill_order_id, $this->bill_product_id, $this->bill_amount)
                VALUES ('$order_id','$product_id','$amount')";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function findBillById($id)
    {
        $sql = "SELECT hoa_don.ma_hh,ten_hh,hinh,don_gia,giam_gia,hoa_don.so_luong, 
        (don_gia-(don_gia*giam_gia)/100)*hoa_don.so_luong AS thanh_tien FROM hoa_don 
        INNER JOIN don_hang ON don_hang.ma_dh = hoa_don.ma_dh
        INNER JOIN hang_hoa ON hang_hoa.ma_hh = hoa_don.ma_hh
        WHERE don_hang.ma_dh = '$id'";
        $result = $this->db->select($sql);
        return $result;
    }
    public function findUserOrderById($id)
    {
        $sql = "SELECT ma_dh,don_hang.ma_kh,ten_kh,dia_chi,sdt,email,tong_tien FROM don_hang 
        INNER JOIN khach_hang ON don_hang.ma_kh = khach_hang.ma_kh
        WHERE don_hang.ma_dh = '$id'";
        $result = $this->db->select($sql);
        return $result[0];
    }
    public function deleteOrder($id)
    {
        $sql = "DELETE FROM $this->table_order WHERE $this->order_id = '$id'";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function updateOrder($id, $status)
    {
        $sql = "UPDATE $this->table_order SET $this->order_status = '$status'
                                WHERE $this->order_id = '$id'";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function totalOder()
    {
        $sql = "SELECT COUNT(*) as total_order FROM $this->table_order";
        $result = $this->db->select_One($sql);
        return $result;
    }
}
