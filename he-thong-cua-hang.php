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
    <section class="brand-detail mt50 mb50">
        <div class="container">
            <div class="brand-head">
                <h1 class="fs40 fw-bold">Danh sách của hàng Pizza Shale</h1>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8"></div>
            </div>
        </div>
    </section>
    <?php include 'includes/footer.php' ?>
    <!-- END FOOTER -->
    <!-- Swiper JS -->
    <script src="./assets/library/swiperjs/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script src="./assets/js/slideinit.js"></script>
    <script src="./assets/js/slidercard.js"></script>
</body>

</html>