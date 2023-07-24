<?php require_once APPROOT . '/views/includes/a_header.php';?>
<h1>This is admin index</h1>
<div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Thống kê</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-gold"></i>
                        <span class="text">Sản phẩm</span>
                        <span class="number"><?php echo $data['product'][0]?></span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-users-alt"></i>
                        <span class="text">Người dùng</span>
                        <span class="number"><?php echo $data['totalUser'][0]?></span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-comments"></i>
                        <span class="text">Tổng bình luận</span>
                        <span class="number"><?php echo $data['totalcomment'][0]?></span>
                    </div>
                </div>
            </div>
        </div>