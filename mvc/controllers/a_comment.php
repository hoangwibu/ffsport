<?php
class a_comment extends Caller
{
    public function __construct()
    {
        $this->check_admin();
        //gọi model Comment
        $this->CommentModel = $this->a_model('comment');
    }

    public function index()
    {
        //gọi method getcomment
        $comment  = $this->CommentModel->getComment(1);
        $page = [1,1,2];
        //gọi và show dữ liệu ra view
        $this->a_view_comment('index', [
            'comment' => $comment,
            'title' => 'Quản lý bình luận',
            'page' => $page
        ]);
    }
    public function page($number_page)
    {
        $comment  = $this->CommentModel->getComment($number_page);
        $page = getPage($number_page);
        $this->a_view_comment('index', [
            'comment' => $comment,
            'title' => 'Bình luận - Trang ' . $number_page,
            'page' => $page
        ]);
    }
    public function delete($id)
    {
        $delete = $this->CommentModel->deleteComment($id);
        if ($delete) {
            header('location:' . URL_ADMIN_COMMENT);
        }
        $this->a_view_comment('index');
    }
    public function search()
    {
        if (isset($_POST['input'])) {
            $key = $_POST['input'];
            $comments  = $this->CommentModel->search($key);
            if ($comments!=null) { ?>
                <tr>
                    <th><i class="uil uil-list-ol"></i> ID cmt</th>
                    <th><i class="uil uil-paragraph"></i> ID user</th>
                    <th><i class="uil uil-key-skeleton-alt"></i> Mã sản phẩm</th>
                    <th><i class="uil uil-text-fields"></i> Nội dung</th>
                    <th><i class="uil uil-clock"></i> Thời gian bl</th>
                    <th> <i class="uil uil-file-edit-alt"></i> Action</th>
                </tr>

                <?php
                    foreach ($comments as $comment) : extract($comment); ?>
                        <tr>
                            <td><?= $ma_bl ?></td>
                            <td>
                                </h2><?= $ma_kh ?><h2>
                            </td>
                            <td>
                                <p><?= $ma_hh ?></p>
                            </td>
                            <td>
                                <p><?= $noi_dung ?></p>
                            </td>
                            <td>
                                <p><?= $ngay_bl ?></p>
                            </td>
                            <td style="font-size: 30px;">
                                <a onclick="return confirm('Bạn có chắc muốn xóa?')" href="<?= URLROOT ?>/a_comment/delete/<?= $ma_bl ?>"><i class="uil uil-trash"></i></a>
                            </td>
                        </tr>
                <?php endforeach;
            } else echo 'Không tìm thấy "'.$key.'"';
        }
    }
}
