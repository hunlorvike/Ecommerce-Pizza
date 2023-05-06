<?php
session_start();
include 'config/config.php';
include 'includes/function.php';
if (isset($_POST['search'])) {
    $value = $_POST['value-search'];
    $query = mysqli_query($con, "SELECT * FROM tbl_product WHERE prod_name LIKE '%$value%'");
}
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
    <!-- ENd HEADER -->
    <section class="title-page-product">
        <div class="container-fluid">
            <div class="img_banner position-relative">
                <img src="./assets/img/productslide/Slider/banner.png" alt="">
                <div class="title text-center color-white-default">
                    <h2 class="fw-bolder">Tìm kiếm sản phẩm</h2>
                    <p class=" fs-2 ">của nhà <strong class="text-uppercase fw-bold">Shale Pizza</strong></p>
                </div>
            </div>
            <div class="container">
                <ul class="products__container mt30">
                    <?php
                    $link = './admin/';
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
    </section>
    <!-- END TITLE PAGE PRODUCT -->
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