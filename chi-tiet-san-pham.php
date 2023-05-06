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
    <?php include 'includes/header.php'; ?>
    <!-- END HEADER -->
    <section class="bar-status">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="barstatus">
                        <li class="d-inline-block fs14">
                            <a href="index.php">Trang chủ</a>
                        </li>
                        <li class="d-inline-block fs14">Sản phẩm</li>
                        <?php
                        $id = intval($_GET['id']);
                        $query = mysqli_query($con, "SELECT * FROM tbl_product JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id WHERE prod_id = '$id'");
                        while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <li class="d-inline-block fs14">
                                <?php echo $row['category_name'] ?>
                            </li>
                            <li class="d-inline-block fs14">
                                <?php echo $row['prod_name'] ?>
                            </li>
                            <?php
                        }
                        ?>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- END BAR STATUS -->
    <!-- <section class="site-product">
        <div class="container">
            <div class="shale-notices-wrapper">
                <div class="shale-message alert alert-success iflex-align-center w100 justify-content-between fs14">
                    <p class="mb-0"><i class="fa-solid fa-circle-check mr15"></i>"Tên sản phẩm" đã được thêm vào giỏ
                        hàng</p>
                    <a href="gio-hang.php" class="shale-forward ">Xem giỏ hàng</a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END NOCICES -->
    <section class="product_detail mb50">
        <div class="container">
            <div class="row">
                <?php
                $id = intval($_GET['id']);
                $link = './admin/';
                $query = mysqli_query($con, "SELECT * FROM tbl_product JOIN tbl_sub_category ON tbl_product.sub_id = tbl_sub_category.sub_id WHERE prod_id = '$id'");
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <div class="col-sm-5 col-md-5 portfolio-work">
                        <img class="h500p border-tl-br-30 zoom" id="MainImg" src="<?php echo $link . $row['prod_thumb'] ?>"
                            alt="">
                        <div class="small-img-group mt15 iflex-align-center ">
                            <div class="small-img-col">
                                <img width="100" height="100" class="small-img wh100p"
                                    src="<?php echo $link . $row['prod_thumb'] ?>" alt="">
                            </div>
                            <div class="small-img-col">
                                <img width="100" height="100" class="small-img wh100p"
                                    src="<?php echo $link . trim($row['prod_img1']) ?>" alt="">
                            </div>
                            <div class="small-img-col">
                                <img width="100" height="100" class="small-img wh100p"
                                    src="<?php echo $link . trim($row['prod_img2']) ?>" alt="">
                            </div>
                            <div class="small-img-col">
                                <img width="100" height="100" class="small-img wh100p"
                                    src="<?php echo $link . trim($row['prod_img3']) ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-7 info_product">
                        <h6 class="fs14 mb10 color-default fw-lighter">
                            <?php echo $row['sub_name'] ?>
                        </h6>
                        <h3 class="fw-bold fs28 mb20">
                            <?php echo $row['prod_name'] ?>
                        </h3>
                        <h5 class="fs20 mb10">
                            <?php echo $row['prod_current_price'] ?> <span>VNĐ</span>
                        </h5>
                        <div class="desc fs14">
                            <?php echo $row['prod_desc'] ?>
                        </div>
                        <div class="free-ship fs14">
                            <p><i class="fa-sharp fa-solid fa-truck-fast mr15"></i>Miễn phí giao hàng từ 500k ( vận chuyển 3
                                - 5 ngày )
                            </p>
                        </div>
                        <form action="gio-hang.php?action=add" method="post"
                            class="cart">
                            <input type="number" name="quantity[<?php echo $_GET['id'] ?>]" value="1" class="w40p mb20" id="" min="1">
                            <div class="list-btn">
                                <button type="button" name="" class="btn buy-now btn-primary border-0 bg-default rounded-pill">Chụp
                                    ảnh</button>
                                <button type="submit" name="btn-add"
                                    class="btn add-cart btn-primary border-0 bg-default rounded-pill">Thêm vào giỏ</button>
                            </div>
                        </form>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- END PRODUCT DETAILS -->
    <?php include 'includes/footer.php' ?>
    <!-- END FOOTER -->
    <!-- Swiper JS -->
    <script src="./assets/library/swiperjs/swiper-bundle.min.js"></script>
    <!-- Dropdown JS - Đang lỗi -->
    <script src="./assets/js/dropdown.js"></script>
    <!-- Initialize Swiper -->
    <script src="./assets/js/slideinit.js"></script>
    <script src="./assets/js/slidercard.js"></script>
    <script src="./assets/js/galery.js"></script>
</body>

</html>