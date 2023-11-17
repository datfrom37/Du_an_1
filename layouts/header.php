<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet"
            href="./public/bootstrap-5.3.2/dist/css/bootstrap.css">
        <script src="./public/bootstrap-5.3.2/dist/js/bootstrap.js"></script>
         <!-- Sử dụng thư viện Font Awesome -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
         integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
         crossorigin="anonymous" referrerpolicy="no-referrer">
        <link rel="stylesheet" href="../public/css/index.css">
        <link rel="stylesheet" href="../public/css/home.css">
    </head>
    <body>
    <header class="main-header-two">
            <div class="main-header-two__top">
                <div class="container">
                    <div class="main-header-two__top-inner">
                        <div class="main-header-two__logo">
                            <a href="index.php"><img src="../images/logo2.png" alt="" width="170vw"></a>
                        </div>
                        <div class="main-header-two__right">
                            <ul class="list-unstyled main-header-two__contact-list">
                                <li class="contact-item">
                                    <div class="icon">
                                        <i class="fas fa-mobile"></i>
                                    </div>
                                    <div class="text">
                                        <a href="tel:923076806860">+ 84 123 456 789</a>
                                    </div>
                                </li>
                                <li class="contact-item">
                                    <div class="icon">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="text">
                                        <a href="mailto:lsdfood@gmail.com">lsdfood@gmail.com</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="main-header-two__search-cart-box">
                                <div class="main-header-two__search-form-box">
                                    <form class="main-header-two__search-form mc-form" data-url="MC_FORM_URL"
                                        novalidate="novalidate">
                                        <div class="main-header-two__search-input-box">
                                            <div class="main-header-two__search-icon"><i class="fas fa-search fa-lg" style='margin-bottom: 0.5vh;'></i></div>
                                            <input type="search" placeholder="Nhập từ khóa" name="search">
                                            <button type="submit"
                                                class="main-header-two__search-btn thm-btn"> Tìm kiếm</button>
                                        </div>
                                    </form>
                                    <div class="mc-form__response"></div>
                                </div>
                                <div class="main-header-two__cart-box">
                                    <a href="menu.html" class="main-header-two__cart fas fa-bars"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>










            <nav class="main-menu main-menu-two">
                <div class="main-menu-two__wrapper">
                    <div class="container">
                        <div class="main-menu-two__wrapper-inner">
                            <div class="main-header-two__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="main-menu-two__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="current megamenu">
                                        <a href="index.php">TRANG CHỦ</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="index.php?tkh=dscongthuc">CÔNG THỨC</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="team.html">Our Team</a></li>
                                            <li><a href="team-carousel.html">Team Carousel</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">DANH MỤC</a>
                                        <ul class="sub-menu">
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                            <li><a href="portfolio-carousel.html">Portfolio Carousel</a>
                                            </li>
                                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                            <li><a href="testimonials.html">Testimonials</a></li>
                                            <li><a href="testimonials-carousel.html">Testimonials
                                                    Carousel</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li><a href="pricing-carousel.html">Pricing Carousel</a></li>
                                            <li><a href="faq.html">FAQs</a></li>
                                            <li><a href="404.html">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">BÀI VIẾT</a>
                                        <ul class="sub-menu">
                                            <li><a href="products.html">Products</a></li>
                                            <li><a href="product-list.html">Product List</a></li>
                                            <li><a href="product-details.html">Product Details</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">LIÊN HỆ</a>
                                        
                                    </li>
                                </ul>
                            </div>
                            <div class="main-menu-two__right">
                                <ul class="list-unstyled main-menu-two__login">
                                    <li class="active"><a href="./pages/dangky_dangnhap.php">Đăng Nhập</a></li>
                                    <li><span>/</span></li>
                                    <li><a href="./pages/dangky.php">Đăng Ký</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
    </header>
