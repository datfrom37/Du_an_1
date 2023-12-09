<?php
if (isset($_POST['GuiBinhLuan']) && ($_POST['GuiBinhLuan'])) {
    $noi_dung_binh_luan = $_POST['NoiDungBinhLuan'];
    createBinhLuanBaiViet($noi_dung_binh_luan, $_GET['mabv'], $_SESSION['user']);

}
if (isset($_GET['ma_bl_xoa']) && ($_GET['ma_bl_xoa'])) {
    deleteBinhLuanBaiViet($_GET['ma_bl_xoa']);
}
?>


<head>
    <link rel="stylesheet" href="../public/css/chitietbv.css">
</head>

<body>
    <?php
    $listbv = getBaiVietByMaBaiViet($_GET['mabv']);
    foreach ($listbv as $bv) {
        extract($bv);
        $hinhpath = "admin/congthuc/img/" . $hinh_anh;
        if (is_file($hinhpath)) {
            $url = $hinhpath;
        } else {
            $url = ""; //link anh vao day
        }
        $listkh = getKhachHangById($ma_kh);
        foreach ($listkh as $kh) {
            extract($kh);
        }
        ?>
        <!--News Details Start-->
        <section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                            <div class="news-details__img">
                                <img src="<?php echo $url; ?>" alt="">
                                <div class="news-details__date">
                                    <p>
                                        <?php echo $ngay_dang; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="news-details__content">
                                <ul class="list-unstyled news-details__meta">
                                    <li><a href="news-details.html"><i class="fas fa-tag"></i>
                                            <?php echo $ma_bai_viet; ?>
                                        </a>
                                    </li>
                                    <li><a href="news-details.html"><i class="fas fa-user-circle"></i>by <b>
                                                <?php echo $ten_kh; ?>
                                            </b></a>
                                    </li>
                                </ul>
                                <h3 class="news-details__title">
                                    <?php echo $ten_bai_viet; ?>
                                </h3>
                                <p class="news-details__text-1">
                                    <?php echo $noi_dung; ?>
                                </p>
                                <!-- <p class="news-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit
                                amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus
                                nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus
                                interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet
                                pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.</p> -->
                            </div>
                            <div class="news-details__bottom">
                                <p class="news-details__tags">
                                    <span>Tags</span>
                                    <a href="#" class="thm-btn">Dairy</a>
                                    <a href="#" class="thm-btn">Food</a>
                                </p>
                                <div class="news-details__social-list">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>



                            <!-- bình luận -->

                            <?php
                            if(isset($_SESSION['user'])){
                                $soluongbinhluan = getBinhLuanBaiVietByMaBaiViet($ma_bai_viet);
                                $soLuongbl = 0;
                                foreach ($soluongbinhluan as $bl) {
                                    $soLuongbl++;
                                }

                                $khachhanguser = getKhachHangById($_SESSION['user']);
                                foreach ($khachhanguser as $khuser) {
                                    extract($khuser);
                                    $hinhpath = "admin/khachhang/img/" . $hinh_anh;
                                    if (is_file($hinhpath)) {
                                        $url = $hinhpath;
                                    } else {
                                        $url = ""; //link anh vao day
                                    }
                                    ?>
                                    <div class="container mt-5">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <div class="line">
                                                    <div class="comm cq-active">BÌNH LUẬN (
                                                        <?php echo $soLuongbl; ?>)
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container binhl">
                                        <div class="row">
                                            <div class="col-1">
                                                <img class='img' src='<?php echo $url; ?>'>
                                            </div>
                                            <div class="col-11 main-cmt">
                                                <form class="buttons" method="post"
                                                    action="index.php?tkh=chitietbaiviet&mabv=<?php echo $_GET['mabv']; ?>">
                                                    <div class="row">
                                                        <div class="div col-12">
                                                            <?php echo $ten_kh; ?>
                                                        </div>
                                                        <div class="col-12">
                                                            <textarea class="comment-input" name="NoiDungBinhLuan"
                                                                placeholder="Nhập nội dung đánh giá"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-9"></div>
                                                        <div class="col-3">
                                                            <input type="submit" class="button" name="GuiBinhLuan"
                                                                value="Gửi đánh giá" style="padding-top:10px">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }else{
                                echo '
                                <div class="container mt-5">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="line">
                                            <div class="comm cq-active">BÌNH LUẬN (
                                                <?php echo $soLuongbl; ?>)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container binhl">
                                <div class="row">
                                    
                                    <div class="col-11 main-cmt">
                                        <form class="buttons" method="post">
                                            <div class="row">
                                                <div class="div col-12">
                                                    <?php echo $ten_kh; ?>
                                                </div>
                                                <div class="col-12">
                                                    <textarea class="comment-input" name="NoiDungBinhLuan"
                                                        placeholder="Đăng nhập để bình luận" disabled></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                                ';
                            }
                            ?>
                            <!-- END bình luận -->


                            <!-- danh sach binh luan -->
                            <?php
                            $listbl = getBinhLuanBaiVietByMaBaiViet($ma_bai_viet);
                            foreach ($listbl as $bl) {
                                extract($bl);
                                $khachhangbl = getKhachHangById($ma_kh);
                                foreach ($khachhangbl as $khbl) {
                                    extract($khbl);
                                    $hinhpath = "admin/khachhang/img/" . $hinh_anh;
                                    if (is_file($hinhpath)) {
                                        $url = $hinhpath;
                                    } else {
                                        $url = ""; //link anh vao day
                                    }
                                    echo '
                                        <div class="container binhl">
                                            <div class="row">
                                                <div class="col-1">
                                                    <img class="img-list" src="' . $url . '" >
                                                </div>
                                                <div class="col-11">
                                                    <div class="buttons " method="post">
                                                        <div class="row">
                                                            <div class="div-list col-9">' . $ten_kh . '</div>
                                                            <div class="col-3 sua-xoabl">
                                                                <suax><a href="">SỬA</a></suax> |
                                                                <suax><a href="index.php?tkh=chitietbaiviet&mabv=' . $_GET['mabv'] . '&ma_bl_xoa=' . $ma_binh_luan . '">XÓA</a></suax>
                                                            </div>
                                                            <div class="col-12 date-list">' . $ngay_binh_luan . '</div>
                                                            <div class="col-12">
                                                                <p class="titless">' . $noi_dung . '</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                               
                                    ';
                                }
                            }

                            ?>

                            <!-- END danh sach binh luan -->





                        </div>
                    </div>



                    <!-- sidebar -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search here">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Bài viết mới</h3>
                                <ul class="sidebar__post-list list-unstyled">

                                    <?php
                                    $list_new_posts = getAllBaiViet();
                                    $biendem = 0;
                                    foreach (array_reverse($list_new_posts) as $new_post) {
                                        extract($new_post);
                                        if ($ma_bai_viet == $_GET['mabv'])
                                            continue;
                                        $hinhpath = "admin/baiviet/img/" . $hinh_anh;
                                        if (is_file($hinhpath)) {
                                            $img = $hinhpath;
                                        } else {
                                            $img = ""; //anh tuy chinh
                                        }
                                        if ($duyet == 1) {
                                            $list_bl = getBinhLuanBaiVietByMaBaiViet($ma_bai_viet);
                                            $count = 0;
                                            foreach ($list_bl as $bl) {
                                                $count++ ;
                                            }
                                            echo '
                                                <li>
                                                    <div class="sidebar__post-image">
                                                        <img src="' . $img . '" alt="">
                                                    </div>
                                                    <div class="sidebar__post-content">
                                                        <h3>
                                                            <span class="sidebar__post-content-meta"><i
                                                                    class="fas fa-comments"></i>'.$count.'</span>
                                                            <a href="index.php?tkh=chitietbaiviet&mabv='.$ma_bai_viet.'">' . $ten_bai_viet . '</a>
                                                        </h3>
                                                    </div>
                                                </li>
                                            ';
                                            $biendem++;
                                        }
                                        if ($biendem == 7)
                                            break;
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--END sidebar -->

                </div>
            </div>
        </section>
        <!--News Details End-->

        <?php
    }

    ?>
</body>