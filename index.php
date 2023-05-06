<?php
session_start();
include 'config/config.php';
include 'includes/function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shale-PIZZAAsss | Không ăn thì cuts</title>
    <link rel="shortcut icon" href="./assets/img/logo/logo1.png" type="image/x-icon">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="./assets/library/bootstrap/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Swiper JS -->
    <link rel="stylesheet" href="./assets/library/swiperjs/swiper-bundle.min.css">

    <!-- Icon CDN -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./assets/icons/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Customer CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php include 'includes/header.php' ?>
    <!-- END HEADER -->
    <?php include 'includes/bar-header.php' ?>
    <!-- END BAR HEADER -->
    <section id="slide">
        <div class="container-fluid">
            <!-- Swiper -->
            <div class="main swiper mySwiper">
                <div class="wrapper swiper-wrapper">
                    <?php
                    $id = '1';
                    $link = './admin/';
                    $query = mysqli_query($con, "SELECT * FROM tbl_slider WHERE slider_on_page = '$id'");
                    while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <div class="slide swiper-slide">
                            <img src="<?php echo $link . $row['slider_img'] ?>" alt="" class="image" />
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- END SLIDER -->
    <section class="top__products mt30">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box-item">
                        <div class="img">
                            <a href="san-pham.php">
                                <img src="./assets/img/productslide/Sale/discount1.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-item">
                        <div class="img">
                            <a href="san-pham.php">
                                <img src="./assets/img/productslide/Sale/discount2.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-item">
                        <div class="img">
                            <a href="san-pham.php">
                                <img src="./assets/img/productslide/Sale/discount3.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TOP PRODUCTS -->
    <section class="quanlity">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box-item">
                        <div class="img img-fix text-center fs40 color-default">
                            <i class="fa-solid fa-phone-volume"></i>
                        </div>
                        <div class="info text-center">
                            <h2 class="title h3-h2 fs24 text-uppercase">Hỗ trợ 24/7</h2>
                            <p class="desc plr50 fs12">
                                Chúng tôi luôn muốn mang đến cho quý khách những trải nghiệm tốt nhất khi đến với chúng
                                tôi với Hotline : 035 902 1323 – 036 766 7366
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-item">
                        <div class="img img-fix text-center fs40 color-default">
                            <i class="fa-sharp fa-solid fa-truck-fast"></i>
                        </div>
                        <div class="info text-center">
                            <h2 class="title h3-h2 fs24 text-uppercase">GIAO HÀNG MIỄN PHÍ</h2>
                            <p class="desc plr50 fs12">
                                Nếu bạn có người yêu, chắc chắn khi nhận được món quà mà không mất thêm phí vận chuyển
                                nào (trong nội thành Hà Nội) sẽ làm bạn rất vui.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-item">
                        <div class="img img-fix text-center fs40 color-default">
                            <i class="fa-solid fa-sack-dollar"></i>
                        </div>
                        <div class="info text-center">
                            <h2 class="title h3-h2 fs24 text-uppercase">Không rẻ không lấy tiền</h2>
                            <p class="desc plr50 fs12">
                                Đến với Shale Pizza, chúng tôi luôn muốn mang đến cho quý khách dịch vụ tốt và giá thành
                                rẻ nhất.
                                Chúc quý khách ngon miệng
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END QUANLITY -->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-4 hl">
                    <div class="left">
                        <div class="item__highlight">
                            <a href="danh-muc.php">
                                <div class="img">
                                    <img class="dark-img" src="./assets/img/productslide/Pizza/pizza1.4.jpeg" alt="">
                                </div>
                                <div class="info">
                                    <p class="title lh-lg">PIZZA ITALIA 2023</p>
                                    <h2 class="name">Shale Pizza</h2>
                                    <p class="desc fs14 mt15 lh-lg plr10 text-center">
                                        Shale Pizza chuyên phục vụ các loại pizza thơm ngon, từ pizza cổ điển đến pizza
                                        đặc biệt, phục vụ với các loại nước sốt và nguyên liệu tươi ngon. Bên cạnh đó,
                                        cửa hàng còn cung cấp một số món ăn khác như salad, khoai tây chiên, bánh mỳ
                                        nướng, và đồ uống.

                                        Khách hàng có thể tùy chọn pizza của mình với nhiều loại topping khác nhau như
                                        rau củ, thịt, phô mai và gia vị, tùy theo sở thích cá nhân. Các đầu bếp tại
                                        Shale Pizza đề cao việc sử dụng nguyên liệu tươi ngon và cẩn thận trong quá
                                        trình chuẩn bị món ăn.
                                    </p>
                                    <span class="read__more">Xem thêm</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="right__list-img">
                        <div class="row">
                            <div class="col-md-4 col-xs-6 col-sm-6 position-relative mb20 hl">
                                <div class="box__img">
                                    <a href="danh-muc.php?product=pizza">
                                        <div class="img">
                                            <img class="dark-img" src="./assets/img/productslide/Pizza/pizza1.5.jpeg"
                                                alt="">
                                        </div>
                                        <div class="title fst-italic fw-bolder">
                                            <h3>Pizza cao cấp</h3>
                                        </div>
                                        <span class="read__more">Chi tiết</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6 col-sm-6 position-relative mb20 hl">
                                <div class="box__img">
                                    <a href="danh-muc.php?product=bread">
                                        <div class="img">
                                            <img class="dark-img"
                                                src="./assets/img/productslide/Garlic Breads/bread3.1.jpg" alt="">
                                        </div>
                                        <div class="title fst-italic fw-bolder">
                                            <h3>Bánh mì bơ tỏi</h3>
                                        </div>
                                        <span class="read__more">Chi tiết</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6 col-sm-6 position-relative mb20 hl">
                                <div class="box__img">
                                    <a href="danh-muc.php?product=sandwiches">
                                        <div class="img">
                                            <img class="dark-img"
                                                src="./assets/img/productslide/Pizza Sandwiches/pizzasand1.webp" alt="">
                                        </div>
                                        <div class="title fst-italic fw-bolder">
                                            <h3>Pizza Sandwiches</h3>
                                        </div>
                                        <span class="read__more">Chi tiết</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6 col-sm-6 position-relative hl">
                                <div class="box__img">
                                    <a href="danh-muc.php?product=desserts">
                                        <div class="img">
                                            <img class="dark-img" src="./assets/img/productslide/Desserts/desserts6.jpg"
                                                alt="">
                                        </div>
                                        <div class="title fst-italic fw-bolder">
                                            <h3>Món tráng miệng</h3>
                                        </div>
                                        <span class="read__more">Chi tiết</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6 col-sm-6 position-relative hl">
                                <div class="box__img">
                                    <a href="danh-muc.php?product=beverages">
                                        <div class="img">
                                            <img class="dark-img" src="./assets/img/productslide/Beverages/drink1.webp"
                                                alt="">
                                        </div>
                                        <div class="title fst-italic fw-bolder">
                                            <h3>Đồ uống</h3>
                                        </div>
                                        <span class="read__more">Chi tiết</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT -->
    <section class="top-products mb50">
        <div class="container">
            <h3 class="top-products__title text-uppercase text-center mt30 color-default fw-bolder mb50">Sản Phẩm Nổi
                Bật</h3>
            <div class="swiper">
                <div class="slide-container m-0">
                    <div class="card-wrapper swiper-wrapper">
                        <?php
                        $link = './admin/';
                        $query = mysqli_query($con, "SELECT * FROM tbl_product ORDER BY prod_current_price DESC LIMIT 6");
                        while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <div class="card swiper-slide">
                                <a href="chi-tiet-san-pham.php?id=<?php echo $row['prod_id'] ?>">
                                    <div class="image-box">
                                        <img src="<?php echo $link . trim($row['prod_thumb']) ?>" alt="" />
                                    </div>
                                    <div class="profile-details">
                                        <!-- <img src="./assets/img/productslide/Pizza/pizza1.3.jpeg" alt="" /> -->
                                        <div class="name-price">
                                            <h3 class="name">
                                                <?php echo $row['prod_name'] ?>
                                            </h3>
                                            <h4 class="price">
                                                <?php echo $row['prod_current_price'] ?> VNĐ
                                            </h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TOP PRODUCT -->
    <section class="branch">
        <div class="container">
            <div class="branch-head mb30">
                <div class="row">
                    <div class="col-md-6 row">
                        <p class="text-capitalize m-0">Địa điểm</p>
                        <h1 class="text-uppercase fw-bolder fs40 m-0 align-items-end">Hệ thống cửa hàng</h1>
                    </div>
                    <div class="col-md-6 row align-items-end text-end">
                        <a href="" class="">
                            <button class="border-0 bg-default px10-py20 rounded-3">
                                <i class="fa-solid fa-location-dot"></i>
                                Tìm kiếm cơ sở
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="branch-body">
                <div class="row">
                    <div class="col-md-7">
                        <div class="item h500p ">
                            <img class="rounded-3" src="./assets/img/store/store5.jpeg" alt="">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="item h500p">
                            <img class="rounded-3" src="./assets/img/store/store6.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- EMD BRANCH -->
    <section class="feed__back">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title m-t">
                        <p class="top">Khách hàng</p>
                        <p class="bot">Nói về chúng tôi</p>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial mySwiper">
                        <div class="testi-content swiper-wrapper">
                            <div class="slide swiper-slide">
                                <img src="./assets/img/productslide/User/hung.jpg" alt="" class="image" />
                                <p>
                                    Nguyễn Việt Hưng là một tác giả và nhà phát triển phần mềm có nhiều năm kinh nghiệm
                                    trong lĩnh vực công nghệ thông tin. Ông đã viết nhiều tác phẩm văn học, trong đó có
                                    những tiểu thuyết, truyện ngắn và kịch bản phim. Ngoài ra, ông còn có nhiều đóng góp
                                    quan trọng cho ngành công nghiệp phần mềm bằng cách phát triển nhiều ứng dụng và
                                    công cụ phần mềm có tầm ảnh hưởng lớn trong cộng đồng.
                                </p>

                                <i class="fa-solid fa-quote-left quote-icon"></i>

                                <div class="details">
                                    <span class="name">Nguyễn Việt Hưng</span>
                                    <span class="job">Web Developer</span>
                                </div>
                            </div>
                            <div class="slide swiper-slide">
                                <img src="./assets/img/productslide/User/lam.jpg" alt="" class="image" />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                                    saepe provident dolorem a quaerat quo error facere nihil deleniti
                                    eligendi ipsum adipisci, fugit, architecto amet asperiores
                                    doloremque deserunt eum nemo.
                                </p>

                                <i class="fa-solid fa-quote-left quote-icon"></i>


                                <div class="details">
                                    <span class="name">Sái Ngọc Lâm</span>
                                    <span class="job">Deo lam gi ca</span>
                                </div>
                            </div>
                            <div class="slide swiper-slide">
                                <img src="./assets/img/productslide/User/tram.jpg" alt="" class="image" />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                                    saepe provident dolorem a quaerat quo error facere nihil deleniti
                                    eligendi ipsum adipisci, fugit, architecto amet asperiores
                                    doloremque deserunt eum nemo.
                                </p>

                                <i class="fa-solid fa-quote-left quote-icon"></i>


                                <div class="details">
                                    <span class="name">Nguyễn Ngọc Trâm</span>
                                    <span class="job">Deo lam gi ca</span>
                                </div>
                            </div>
                            <div class="slide swiper-slide">
                                <img src="./assets/img/productslide/User/minh.jpg" alt="" class="image" />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                                    saepe provident dolorem a quaerat quo error facere nihil deleniti
                                    eligendi ipsum adipisci, fugit, architecto amet asperiores
                                    doloremque deserunt eum nemo.
                                </p>

                                <i class="fa-solid fa-quote-left quote-icon"></i>


                                <div class="details">
                                    <span class="name">Nguyễn Hiếu Minh</span>
                                    <span class="job">Deo lam gi ca</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FEEDBACK -->
    <?php include 'includes/footer.php' ?>
    <!-- END FOOTER -->
    <!-- Swiper JS -->
    <script src="./assets/library/swiperjs/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script src="./assets/js/slideinit.js"></script>
    <script src="./assets/js/slidercard.js"></script>
</body>

</html>