<?php
class product
{
    private $db;
    public $table_product = "hang_hoa";
    public $product_id = "ma_hh";
    public $product_name = "ten_hh";
    public $product_price = "don_gia";
    public $product_disc = "giam_gia";
    public $product_img = "hinh";
    public $product_date = "ngay_nhap";
    public $product_text = "mo_ta";
    public $product_spec = "dac_biet";
    public $product_views = "so_luot_xem";
    public $product_cate_id = "ma_loai";

    public function __construct()
    {
        $this->db = new Database();
    }
    public function plusView($id)
    {
        $sql = "UPDATE $this->table_product SET $this->product_views = $this->product_views + 1 WHERE $this->product_id = $id";
        $this->db->execute($sql);
    }
    //GET Products ..
    public function getProduct()
    {
        $sql = "SELECT * FROM $this->table_product";
        $result = $this->db->select($sql);
        return $result;
    }   
    public function getProductByCate($id)
    {
        $sql = "SELECT * FROM $this->table_product WHERE $this->product_cate_id = $id LIMIT 15";
        $result = $this->db->select($sql);
        return $result;
    }
    public function getProductBySpec($id)
    {
        $sql = "SELECT * FROM $this->table_product WHERE $this->product_spec LIKE '%$id%' LIMIT 15";
        $result = $this->db->select($sql);
        return $result;
    }
    public function getProductHot($page)
    {
        $item = 4; //số sản phẩm mỗi trang
        $offset = ($page-1)*$item; // Trang 1 = Limit 4 OFFSET 0 => bắt đầu từ vị trí 0 sau đó lấy 4 item
        $sql = "SELECT * FROM $this->table_product WHERE $this->product_views > 0 ORDER BY $this->product_views DESC LIMIT $item OFFSET $offset";
        $result = $this->db->select($sql);
        return $result;
    }
    public function getProductSale()
    {
        $sql = "SELECT * FROM $this->table_product WHERE $this->product_disc > 0 LIMIT 5";
        $result = $this->db->select($sql);
        return $result;
    }
    //INSERT INTO `hang_hoa` (`ten_hh`, `giam_gia`, `hinh`, `ngay_nhap`  , `mo_ta`, `dac_biet`, `ma_loai`) 
    //                VALUES ('hh99',     '0'     ,   ''  , '20220-11-20', 'abc', 'gg', '1');
    public function createProduct($name, $price,$disc, $img, $date, $text, $spec, $cate_id)
    {
        $sql = "INSERT INTO $this->table_product ($this->product_name, $this->product_price, $this->product_disc, 
                                                  $this->product_img, $this->product_date,$this->product_text,  
                                                  $this->product_spec, $this->product_cate_id)
                VALUES ('$name','$price','$disc', '$img', '$date', '$text', '$spec', '$cate_id')";
        $result = $this->db->execute($sql);
        var_dump($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function findProductById($id)
    {
        $sql = "SELECT * FROM $this->table_product WHERE $this->product_id = '$id'";
        $result = $this->db->select($sql);
        return $result;
    }
    public function search($key)
    {
        $sql = "SELECT * FROM $this->table_product INNER JOIN loai ON hang_hoa.ma_loai = loai.ma_loai
        WHERE $this->product_name LIKE '%$key%' OR ten_loai LIKE '%$key%' LIMIT 10";
        $result = $this->db->select($sql);
        return $result;
    }
    public function updateProduct($id, $name, $price, $disc, $img, $date, $text, $spec, $cate_id)
    {
        $sql = "UPDATE $this->table_product SET $this->product_name = '$name',
                                    $this->product_price = '$price',
                                    $this->product_disc = '$disc',
                                    $this->product_img = '$img',
                                    $this->product_date = '$date',
                                    $this->product_text = '$text',
                                    $this->product_spec = '$spec',
                                    $this->product_cate_id = '$cate_id' 
                                WHERE $this->product_id = '$id'";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM $this->table_product WHERE $this->product_id = '$id'";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function getCate()
    {
        $sql = "SELECT * FROM `loai`";
        $result = $this->db->select($sql);
        return $result;
    }
    public function totalProduct()
    {
        $sql = "SELECT COUNT(*) as total_product FROM $this->table_product";
        $result = $this->db->select_One($sql);
        return $result;
    }
}
