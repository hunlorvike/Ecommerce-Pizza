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
    <section class="title-page-product">
        <div class="container-fluid">
            <div class="img_banner position-relative">
                <img src="./assets/img/productslide/Background/banner5.jpeg" alt="">
                <div class="title text-center color-white-default">
                    <h2 class="fw-bolder">Tin tức</h2>
                    <p class=" fs-2 ">về nhà <strong class="text-uppercase fw-bold">Shale Pizza</strong></p>
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
                        <li class="d-inline-block fs14">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- END BAR STATUS -->
    <?php
    $featured = '0';
    $link = './admin/';
    $query = mysqli_query($con, "SELECT SUBSTRING(post_content, 1 , LENGTH(post_content)/3) as short_content, tbl_post.*, tbl_category_post.* FROM tbl_post JOIN tbl_category_post ON tbl_post.category_post_id = tbl_category_post.category_post_id WHERE is_featured = '$featured'");
    while ($row = mysqli_fetch_array($query)) {
        ?>
        <section class="featured-blog mb50">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="post__thumbnail w100 h500p object-fit-cover">
                            <!-- Ảnh ở đây -->
                            <img class="border-tl-br-30" src="<?php echo $link . $row['post_thumb']; ?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="post__info">
                            <a href="#">
                                <h6 class="btn-category__blog cursor-pointer hover-bg-blue">
                                    <?php echo $row['category_post_name'] ?>
                                </h6>
                            </a>
                            <h2 class="post__title fs24 fw-bolder mtb10">
                                <a href="post.php?id=<?php echo $row['post_id'] ?>">
                                    <?php echo $row['post_title'] ?>
                                </a>
                            </h2>
                            <p class="post__body">
                                <?php echo $row['short_content'] . '...' ?>
                            </p>
                            <div class="post__author iflex-align-center">
                                <div class="post__author-avatar rounded-circle mr15">
                                    <img class="rounded-circle wh40p" src="./assets/img/logo/logo1.png" alt="">
                                </div>
                                <div class="post__author-info text-capitalize fs14">
                                    <h6>By: Nguyễn Việt Hưng</h6>
                                    <small>
                                        <?php echo date('Y-m-d', strtotime($row['reg_date'])); ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    ?>
    <!-- END FEATURED BLOG -->
    <section class="posts-blog">
        <div class="container">
            <div class="row posts__container">
                <?php
                $featured = '1';
                $link = './admin/';
                $query = mysqli_query($con, "SELECT tbl_post.*, tbl_category_post.* FROM tbl_post JOIN tbl_category_post ON tbl_post.category_post_id = tbl_category_post.category_post_id WHERE is_featured = '$featured'");
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <div class="col-md-3 mb20">
                        <article class="post">
                            <div class="post__thumbnail wh300p mb20">
                                <img class="border-tl-br-30 h200" src="<?php echo $link . $row['post_thumb']; ?>" alt="">
                            </div>
                            <div class="post__info">
                                <a href="#">
                                    <h6 class="btn-category__blog cursor-pointer hover-bg-blue">
                                        <?php echo $row['category_post_name'] ?>
                                    </h6>
                                </a>
                                <h2 class="post__title fs20 fw-bold mtb10">
                                    <a href="post.php?id=<?php echo $row['post_id'] ?>"> <?php echo $row['post_title'] ?></a>
                                </h2>
                                <p class="post__body">
                                </p>
                                <div class="post__author iflex-align-center">
                                    <div class="post__author-avatar rounded-circle mr15">
                                        <img class="rounded-circle wh40p" src="./assets/img/logo/logo1.png" alt="">
                                    </div>
                                    <div class="post__author-info text-capitalize fs14">
                                        <h6>By: Nguyễn Việt Hưng</h6>
                                        <small>
                                            <?php echo date('Y-m-d', strtotime($row['reg_date'])); ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- END POSTS -->
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
    <?php include 'includes/footer.php' ?>
    <!-- Swiper JS -->
    <script src="./assets/library/swiperjs/swiper-bundle.min.js"></script>
    <!-- Dropdown JS - Đang lỗi -->
    <script src="./assets/js/dropdown.js"></script>
    <!-- Initialize Swiper -->
    <script src="./assets/js/slideinit.js"></script>
</body>

</html>