
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Chuyển trang -->
        <a class="navbar-brand colortwo" href="<?php echo $link ?>">LSD - ADMIN</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li><a href="<?php echo $link ?>">LSD - Kênh ẩm thực</a></li>


        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <b
                    class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>



    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse colorone">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="./index.php"> Trang Chủ</a>
            </li>
            <li>
                <a href="./index.php?act=adddm&danhmuc=home"> Danh Mục</a>
            </li>
            <li>
                <a href="./index.php?act=addct&congthuc=home"> Công thức</a>
            </li>
            <li>
                <a href="./index.php?act=addbv&hanghoa=home"> Bài viết</a>
            </li>
            <li>
                <a href="./index.php?act=khachhang&khachhang=home"> Khách Hàng</a>
            </li>
            <li>
                <a href="./index.php?act=binhluan&binhluan=home"> Bình Luận</a>
            </li>
            <li>
                <a href="./index.php?act=thongke&thongke=home"> Thống Kê</a>
            </li>




        </ul>
    </div>



    <!-- /.navbar-collapse -->
</nav>