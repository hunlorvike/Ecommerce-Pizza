<?php
session_start();
include 'config/config.php';
include 'includes/function.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
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
    <?php
    $link = './admin/';
    $id = intval($_GET['id']);
    $query = mysqli_query($con, "SELECT * FROM tbl_post JOIN tbl_category_post ON tbl_post.category_post_id = tbl_category_post.category_post_id WHERE post_id = '$id'");
    while ($row = mysqli_fetch_array($query)) {
        ?>
        <section class="single-post mt30">
            <div class="container single-post__container rounded-3"
                style="background: #fff7ed; padding: 16px 32px 48px 32px;">
                <h2 class="fs28 fw-bold mtb10 mb20">
                    <?php echo $row['post_title']; ?>
                </h2>
                <div class="post__author mt15 mb30 iflex-align-center w100">
                    <div class="post__author-avatar rounded-circle mr15">
                        <img class="rounded-circle wh40p" src="./assets/img/logo/logo1.png" alt="">
                    </div>
                    <div class="post__author-info text-capitalize fs14">
                        <h6>By: Nguyễn Việt Hưng</h6>
                        <small>June 10, 2023 - 07:23</small>
                    </div>
                </div>
                <div class="post__category btn border-0 bg-default rounded-3 fs14 mb30 ">
                    <?php echo $row['category_post_name']; ?>
                </div>
                <div class="single-post__thumbnail mb30">
                    <img class="border-radius-20" src="<?php echo $link . $row['post_thumb']; ?>" alt="">
                </div>
                    <?php echo $row['post_content']; ?>
            </div>
        </section>
        <?php
    }
    ?>
    <footer class="bg-default mt30">
        <div class="container ptb15">
            <div class="row">
                <div class="col-md-3">
                    <div class="title fs24 fw-bolder">
                        <span>Tất cả sản phẩm</span>
                    </div>
                    <ul class="content__footer">
                        <li class="content-item__footer py-1 fs14">Pizza</li>
                        <li class="content-item__footer py-1 fs14">Bánh Mì</li>
                        <li class="content-item__footer py-1 fs14">Pizza Sandwiches</li>
                        <li class="content-item__footer py-1 fs14">Món Tráng Miệng</li>
                        <li class="content-item__footer py-1 fs14">Nước giải khát</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="title fs24 fw-bolder">
                        <span>Chính sách đổi trả</span>
                    </div>
                    <ul class="content__footer">
                        <li class="content-item__footer py-1 fs14">Sản phẩm bị lỗi từ cửa hàng</li>
                        <li class="content-item__footer py-1 fs14">Shale Pizza giao nhầm hàng</li>
                        <li class="content-item__footer py-1 fs14">Hư hỏng trong quá trình vận chuyển</li>
                        <li class="content-item__footer py-1 fs14">Shale Pizza tư vấn nhầm size</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="title fs24 fw-bolder">
                        <span>Thông tin liên hệ</span>
                    </div>
                    <ul class="content__footer">
                        <li class="content-item__footer py-1 fs14">Hotline: 035 902 1323</li>
                        <li class="content-item__footer py-1 fs14">Email: hungcutedethuongg@gmail.com</li>
                        <li class="content-item__footer py-1 fs14">Facebook: Shale Pizza</li>
                        <li class="content-item__footer py-1 fs14">Instagram: Shale Pizza</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="title fs24 fw-bolder">
                        <span>Về Shale Pizza - Italy</span>
                    </div>
                    <ul class="content__footer">
                        <li class="content-item__footer py-1 fs14">Mã số thuế: 0123456789</li>
                        <li class="content-item__footer py-1 fs14">
                            <img src="./assets/img/productslide/Background/masothue.png" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->
    <!-- Swiper JS -->
    <script src="./assets/library/swiperjs/swiper-bundle.min.js"></script>
    <!-- Dropdown JS - Đang lỗi -->
    <script src="./assets/js/dropdown.js"></script>
    <!-- Initialize Swiper -->
    <script src="./assets/js/slideinit.js"></script>
</body>

</html>