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
                        <li class="d-inline-block fs14">Pizza</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- END BAR STATUS -->
    <section class="list_products mb30">
        <div class="container">
            <div class="row">
                <!-- sidebar left -->
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="left_sidebar mb30">
                        <h2 class="title color-default fw-bolder fs24 mb20">Danh mục sản phẩm</h2>
                        <div class="list__category">
                            <ul>
                                <li class="iflex-align-center flex-space-between">
                                    <a href="danh-muc.php?product=<?php echo urlencode('pizza'); ?>"
                                        class="that_category">Pizza</a>
                                    <i class="fa-solid fa-angle-right"></i>
                                </li>
                                <li class="iflex-align-center flex-space-between">
                                    <a href="danh-muc.php?product=<?php echo urlencode('bánh mì'); ?>"
                                        class="that_category">Bánh Mì bơ tỏi</a>
                                    <i class="fa-solid fa-angle-right"></i>
                                </li>
                                <li class="iflex-align-center flex-space-between">
                                    <a href="danh-muc.php?product=<?php echo urlencode('sandwiches'); ?>"
                                        class="that_category">Pizza Sandwiches</a>
                                    <i class="fa-solid fa-angle-right"></i>
                                </li>
                                <li class="iflex-align-center flex-space-between">
                                    <a href="danh-muc.php?product=<?php echo urlencode('bánh ngọt'); ?>"
                                        class="that_category">Món Tráng Miệng</a>
                                    <i class="fa-solid fa-angle-right"></i>
                                </li>
                                <li class="iflex-align-center flex-space-between">
                                    <a href="danh-muc.php?product=<?php echo urlencode('đồ uống'); ?>"
                                        class="that_category">Nước Giải Khát</a>
                                    <i class="fa-solid fa-angle-right"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="left_sidebar mb30">
                        <h2 class="title color-default fw-bolder fs24 mb20">Bộ lọc</h2>
                        <div class="list_filter">
                            <h6 class="bold">Khoảng giá</h6>
                            <div class="list_filter-wrapper">
                                <div class="checkbox-filter-row mt15">
                                    <label for="checkbox-filter1" class="checkbox-filter__item">
                                        <input type="checkbox" class="mr15" id="checkbox-filter1" name=""
                                            data-label="100.000đ — 200.000đ">
                                        100.000đ — 200.000đ
                                    </label>
                                </div>
                                <div class="checkbox-filter-row mt15">
                                    <label for="checkbox-filter2" class="checkbox-filter__item">
                                        <input type="checkbox" class="mr15" id="checkbox-filter2" name=""
                                            data-label="100.000đ — 200.000đ">
                                        200.000đ — 300.000đ
                                    </label>
                                </div>
                                <div class="checkbox-filter-row mt15">
                                    <label for="checkbox-filter3" class="checkbox-filter__item">
                                        <input type="checkbox" class="mr15" id="checkbox-filter3" name=""
                                            data-label="100.000đ — 200.000đ">
                                        300.000đ — 400.000đ
                                    </label>
                                </div>
                                <div class="checkbox-filter-row mt15">
                                    <label for="checkbox-filter4" class="checkbox-filter__item">
                                        <input type="checkbox" class="mr15" id="checkbox-filter4" name=""
                                            data-label="100.000đ — 200.000đ">
                                        400.000đ — 500.000đ
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="left_sidebar">
                        <button type="submit" name="" class="btn btn-submit-filter bg-default rounded-pill fs20">Lọc sản
                            phẩm</button>
                    </div>
                </div>
                <!-- sidebar right -->
                <div class="col-sm-8 col-md-9 col-lg-9">
                    <a href="#">
                        <img class="h300p w100" src="./assets/img/productslide/Background/banner4.webp" alt="">
                    </a>
                    <ul class="products__container mt30">
                        <?php

                        $product = isset($_GET['product']) ? urldecode($_GET['product']) : '';
                        $link = './admin/';
                        if (!empty($product)) {
                            $query = mysqli_query($con, "SELECT * FROM tbl_product WHERE prod_name LIKE '%$product%'");
                        } else {
                            $query = mysqli_query($con, "SELECT * FROM tbl_product");
                        }
                        while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <li class="products-item">
                                <div class="card swiper-slide">
                                    <a href="chi-tiet-san-pham.php?id=<?php echo $row['prod_id'] ?>">
                                        <div class="image-box portfolio-work">
                                            <img class="" src="<?php echo $link . trim($row['prod_thumb']) ?>" alt="" />
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
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END LIST PRODUCT -->
    <!-- <section class="pagination mt30 mb30">
        <div class="container ">
            <div class="pages d-flex justify-content-center">
                <span class="page-numbers current">1</span>
                <a href="#" class="page-numbers">2</a>
                <a href="#" class="page-numbers">3</a>
            </div>
        </div>
    </section> -->
    <!-- END pagination - phân trang -->
    <?php include 'includes/bar-header.php' ?>
    <!-- END BAR -->
    <?php include 'includes/footer.php' ?>
    <!-- Swiper JS -->
    <script src="./assets/library/swiperjs/swiper-bundle.min.js"></script>
    <!-- Dropdown JS - Đang lỗi -->
    <script src="./assets/js/dropdown.js"></script>
    <!-- Initialize Swiper -->
    <script src="./assets/js/slideinit.js"></script>
    <script src="./assets/js/slidercard.js"></script>
</body>

</html>