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
    <section class="title-page-product">
        <div class="container-fluid">
            <div class="img_banner position-relative">
                <img src="./assets/img/productslide/Slider/banner.png" alt="">
                <div class="title text-center color-white-default">
                    <h2 class="fw-bolder">Sản Phẩm</h2>
                    <p class=" fs-2 ">của nhà <strong class="text-uppercase fw-bold">Shale Pizza</strong></p>
                </div>
            </div>
        </div>
    </section>
    <!-- END TITLE PAGE PRODUCT -->
    <section class="bar-status">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="barstatus">
                        <li class="d-inline-block fs14">
                            <a href="index.php">Trang chủ</a>
                        </li>
                        <li class="d-inline-block fs14">Sản phẩm</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- END BAR STATUS -->
    <section class=" page_product about">
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
                                    <a href="danh-muc.php?product=<?php echo urlencode('pizza'); ?>">
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
                                    <a href="danh-muc.php?product=<?php echo urlencode('bánh mì'); ?>">
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
                                    <a href="danh-muc.php?product=<?php echo urlencode('pizza sandwiches'); ?>">
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
                                    <a href="danh-muc.php?product=<?php echo urlencode('bánh ngọt'); ?>">
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
                                    <a href="danh-muc.php?product=<?php echo urlencode('đồ uông'); ?>">
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
    <?php include 'includes/footer.php' ?>
    <!-- END FOOTER -->
    <!-- Swiper JS -->
    <script src="./assets/library/swiperjs/swiper-bundle.min.js"></script>
    <!-- Dropdown JS - Đang lỗi -->
    <script src="./assets/js/dropdown.js"></script>
    <!-- Initialize Swiper -->
    <script src="./assets/js/slideinit.js"></script>
    <script src="./assets/js/slidercard.js"></script>
</body>

</html>