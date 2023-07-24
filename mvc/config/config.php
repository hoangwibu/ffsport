<?php 
/*Chú thích:
    - Trong controllers: file name admin & 'a_...'  là màng hình trang admin, phần còn lại là cho trang site
    - Trong models: model của trang admin nằm trong folder admin, phần còn lại là cho trang site
    - Trong views: view của trang admin nằm trong folder admin, thành phần view con của trang admin nằm chung 
                    với trang site trong includes, phần còn lại là cho trang site
*/
//sql
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','mvc');



//location
//site
define('APPROOT',dirname(dirname(__FILE__)));

define('URLROOT','http://localhost/ffsport');

define('URL_ACCOUNT',URLROOT.'/account');

define('URL_PRODUCT',URLROOT.'/view');

define('URL_CATEGORY',URLROOT.'/category');

define('URL_CATEGORY_SPEC',URLROOT.'/category/spec/');

define('URL_CATEGORY_COLLECTIONS',URLROOT.'/category/collections/');

define('URL_CATEGORY_SEARCH',URLROOT.'/category/search');

//admin
define('URL_ADMIN_ROOT', URLROOT.'/admin');

define('URL_ADMIN_USER',URLROOT.'/a_user');

define('URL_ADMIN_CATE',URLROOT.'/a_cate');

define('URL_ADMIN_PRODUCT',URLROOT.'/a_product');

define('URL_ADMIN_COMMENT',URLROOT.'/a_comment');

define('URL_ADMIN_ORDER',URLROOT.'/a_order');


//image css
define('IMAGE', URLROOT.'/public/img');

define('IMAGE_USER', URLROOT.'/public/img/user/');

define('IMAGE_PRODUCT', URLROOT.'/public/img/product/');

define('IMAGE_CONTENT', URLROOT.'/public/img/content/');

define('DIR_IMAGE_USER', $_SERVER["DOCUMENT_ROOT"].'/ffsport/public/img/user/');

define('DIR_IMAGE_PRODUCT', $_SERVER["DOCUMENT_ROOT"].'/ffsport/public/img/product/');

define('CSS', URLROOT.'/public/css/');

// Thư viện nhỏ
// upload ảnh
function save_file($fieldname, $target_dir){
    $file_uploaded = $_FILES[$fieldname];
    $file_name = basename($file_uploaded["name"]);
    $target_path = $target_dir . $file_name;
    if ( strlen($file_name) > 0) {
        move_uploaded_file($file_uploaded["tmp_name"], $target_path);
    } else $file_name = "user.jpg";
    return $file_name;
    }
// time format
function get_time_ago( $time )
{
    $time_difference = (time()+21600) - $time;

    if( $time_difference < 1 ) { return '1 giây trước'; }
    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'năm',
                30 * 24 * 60 * 60       =>  'tháng',
                24 * 60 * 60            =>  'ngày',
                60 * 60                 =>  'h',
                60                      =>  'p',
                1                       =>  's'
    );
    foreach( $condition as $secs => $str )
    {
        $d = $time_difference / $secs;

        if( $d >= 1 )
        {
            $t = round( $d );
            return  $t . $str . ' trước';
        }
    }
}
 function getPage($number_page)
 {
    $page = [];
        $page[1] = (int)$number_page;
        if ($page[1] > 1) {
            $page[0] = $number_page - 1;
        } else{
            $page[0] = 1;
        }
        $page[2] = $number_page + 1;
    return $page;
 }
?>