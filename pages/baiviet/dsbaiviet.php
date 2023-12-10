<head>

</head>

<body>
    <section class="news-page">
        <div class="container">
            <!-- <div class="section-title text-center">
                <h2 class="section-title__title">TIN TỨC & BÀI VIẾT</h2>
            </div> -->
            <!-- <div class="product__showing-text-box">
                <p class="product__showing-text mr-bot-new">Hiện thị 1–9 trên 12 bài viết</p>
            </div> -->
            <div class="row">

    <?php 
        $bien = 0;
        $list_bv = getAllBaiViet();
        foreach ($list_bv as $bv) {
            extract($bv);

            $hinhpath = "admin/baiviet/img/" . $hinh_anh;
            if (is_file($hinhpath)) {
                $url = $hinhpath;
            } else {
                $url = ""; //link anh vao day
            }

            if($duyet == 1){
                

                $list_bl = getBinhLuanBaiVietByMaBaiViet($ma_bai_viet);

                $soluong = 0;
                foreach ($list_bl as $bl) {
                    $soluong ++;
                }
                $kh = getKhachHangById($ma_kh);
                foreach ($kh as $ctkh) {
                    extract($ctkh);
                }
                
                echo'
                
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="'.$url.'" alt="">
                                </div>
                            </div>
                            <div class="news-one__content-box">
                                <ul class="news-one__meta list-unstyled">
                                    <li>
                                        <a href="index.php?tkh=chitietbaiviet&mabv='.$ma_bai_viet.'"><i class="fa fa-tag"></i>'.$ma_bai_viet.'</a>
                                    </li>
                                    <li>
                                        <a href="index.php?tkh=chitietbaiviet&mabv='.$ma_bai_viet.'"><i class="fas fa-user-circle"></i>'.$ten_kh.'</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="index.php?tkh=chitietbaiviet&mabv='.$ma_bai_viet.'">'.$ten_bai_viet.'</a></h3>
                                <div class="news-one__bottom">
                                    <div class="news-one__read-more">
                                        <a href="index.php?tkh=chitietbaiviet&mabv='.$ma_bai_viet.'">Xem thêm</a>
                                    </div>
                                    <div class="news-one__comment">
                                        <a href="index.php?tkh=chitietbaiviet&mabv='.$ma_bai_viet.'"><i class="fas fa-comments"></i>'.$soluong.'</a>
                                    </div>
                                </div>
                                <div class="news-one__date">
                                    <p>'.$ngay_dang.'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->

                ';
                $bien++;
                if($bien == 9) break;
            }
            
        }
        if($bien == 0) echo'Chưa có bài viết';
    ?>
                


            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="shop-page__pagination">
                        <ul class="pg-pagination list-unstyled">
                            <li class="count"><a href="#">01</a></li>
                            <li class="count"><a href="#">02</a></li>
                            <li class="count"><a href="#">....</a></li>
                            <li class="count"><a href="#">05</a></li>
                            <li class="next">
                                <a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Page End-->
</body>