<?php
class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $name = DB_NAME;
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->name);
    }

    //lấy dữ liệu
    public function select($sql)
    {
        $data = null;
        $result = $this->conn->query($sql);
        if ( $result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else return $data;
    }
    public function select_One($sql)
    {
        $data = null;
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_all()) {
                $data[] = $row[0];
            }
            return $data[0];
        } else return $data;
    }
    // thêm sửa xóa
    public function execute($sql)
    {
        $result = $this->conn->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    
}
/* sql query
SELECT * FROM hoa_don 
INNER JOIN don_hang ON don_hang.ma_dh = hoa_don.ma_dh
INNER JOIN khach_hang ON don_hang.ma_kh = khach_hang.ma_kh
INNER JOIN hang_hoa ON hang_hoa.ma_hh = hoa_don.ma_hh
 */
