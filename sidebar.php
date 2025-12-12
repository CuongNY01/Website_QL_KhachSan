<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="img/user.png" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"><?php echo $user['name'];?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Quản Lý</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
    <?php 
        if (isset($_GET['dashboard'])){ ?>
            <li class="active">
                <a href="index.php?dashboard"><em class="fa fa-dashboard"> </em>
                    Bảng Điều Khiển
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?dashboard"><em class="fa fa-dashboard"> </em>
                    Bảng Điều Khiển
                </a>
            </li>
        <?php }
        if (isset($_GET['reservation'])){ ?>
            <li class="active">
            <a href="index.php?reservation"><em class="fa fa-calendar"> </em>
                    Đặt Phòng
                </a>
            </li>
        <?php } else{?>
            <li>
            <a href="index.php?reservation"><em class="fa fa-calendar"> </em>
                    Đặt Phòng
                </a>
            </li>
        <?php }
        if (isset($_GET['room_mang'])){ ?>
            <li class="active">
                <a href="index.php?room_mang"><em class="fa fa-bed"> </em>
                    Quản Lý Phòng
                </a>
            </li>
        <?php } else{?>
            <li>
            <a href="index.php?room_mang"><em class="fa fa-bed"> </em>
                    Quản Lý Phòng
                </a>
            </li>
        <?php }
        if (isset($_GET['staff_mang'])){ ?>
            <li class="active">
                <a href="index.php?staff_mang"><em class="fa fa-users"> </em>
                    Quản Lý Nhân Viên
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?staff_mang"><em class="fa fa-users"> </em>
                    Quản Lý Nhân Viên
                </a>
            </li>
        <?php }
        if (isset($_GET['complain'])){ ?>
            <li class="active">
                <a href="index.php?complain"><em class="fa fa-comments"> </em>
                    Quản Lý Phản Hồi
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?complain"><em class="fa fa-comments"> </em>
                    Quản Lý Phản Hồi
                </a>
            </li>
        <?php }
        ?>

        <?php
        if (isset($_GET['statistics'])){ ?>
            <li class="active">
                <a href="index.php?statistics"><em class="fa fa-pie-chart"> </em>
                    Thống Kê
                </a>
            </li>
        <?php } else{?>
        <li>
            <a href="index.php?statistics"><em class="fa fa-pie-chart"> </em>
                Thống Kê
            </a>
        </li>
<?php }?>

        
    </ul>
</div><!--/.sidebar-->