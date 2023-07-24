<?php
class a_order extends Caller
{
    public function __construct()
    {
        $this->check_admin();
        //gọi model Order
        $this->OrderModel = $this->a_model('bill');
    }

    public function index()
    {
        //gọi method getorder
        $order  = $this->OrderModel->getOrder();

        //gọi và show dữ liệu ra view
        $this->a_view_order('index', [
            'order' => $order,
            'title'=> 'Quản lý đơn hàng'
        ]);
    }
    public function update($id)
    {
        $user = $this->OrderModel->findUserOrderById($id);
        $bill = $this->OrderModel->findBillById($id);
        if (isset($_POST['submit'])) {
            $update = $this->OrderModel->updateOrder($id, $_POST['status']);
            if ($update) {
                header('location:'.URL_ADMIN_ORDER);

            }
        }
        $this->a_view_order('update', [
            'user' => $user,
            'bill' => $bill,
            'title'=> 'Đơn hàng '.$id
        ]);
    }
    public function delete($id){
        $delete = $this->OrderModel->deleteOrder($id);
        if($delete){
            header('location:'.URL_ADMIN_ORDER);

        }
        $this->a_view_order('index');
    }
}
