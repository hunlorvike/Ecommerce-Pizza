<?php 
    session_start();
    include 'config/config.php';
    include 'includes/function.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $query = mysqli_query($con, "INSERT INTO tbl_feedback(feed_fullname,feed_email,feed_content) VALUES ('$name', '$email', '$message')");
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
    <!-- END HEADER -->
    <section class="title-page-product">
        <div class="container-fluid">
            <div class="img_banner position-relative">
                <img src="./assets/img/productslide/Slider/banner.png" alt="">
                <div class="title text-center color-white-default">
                    <h2 class="fw-bolder">Liên hệ</h2>
                    <!-- <p class=" fs-2 ">về nhà <strong class="text-uppercase fw-bold">Shale Pizza</strong></p> -->
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
                        <li class="d-inline-block fs14">Liên hệ</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- END BAR STATUS -->
    <section class="page_contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="contact-left">
                        <h2 class="title">Liên hệ với chúng tôi</h2>
                        <div class="desc mb30 mt15 fs14">
                            <p>Cảm ơn bạn đã đồng hành cùng Shale Pizza. Nhà hàng rất trân trọng sự ủng hộ của bạn và
                                cam kết tiếp tục cung cấp các sản phẩm pizza chất lượng và dịch vụ tốt nhất cho khách
                                hàng. Nếu bạn có bất kỳ yêu cầu hoặc ý kiến đóng góp nào, hãy liên hệ với chúng tôi bằng
                                cách sử dụng các thông tin liên lạc trên trang web hoặc mẫu liên hệ trực tuyến. Shale
                                Pizza mong muốn tiếp tục được phục vụ bạn trong tương lai. Cảm ơn bạn đã lựa chọn Shale
                                Pizza!</p>
                        </div>
                        <div class="form-contact__container">
                            <form action="" method="post">
                                <div class="form-group mb20">
                                    <label for="name">
                                        <small>Họ tên *</small>
                                    </label>
                                    <br>
                                    <span class="name">
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Họ tên....">
                                    </span>
                                </div>
                                <div class="form-group mb20">
                                    <label for="email">
                                        <small>Email *</small>
                                    </label>
                                    <br>
                                    <span class="email">
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Email....">
                                    </span>
                                </div>
                                <div class="form-group mb20">
                                    <label for="message">
                                        <small>Để lại lời nhắn</small>
                                    </label>
                                    <br>
                                    <span class="message">
                                        <textarea name="message" id="message" cols="40" rows="10"
                                            class="form-control"></textarea>
                                    </span>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary bg-default mb50 border-0">Gửi tin
                                    nhắn</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact-right">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.924278786084!2d105.81645427591071!3d21.035715587538352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab145bf89bd7%3A0xd94a869b494c04b6!2zMjg1IMSQ4buZaSBD4bqlbiwgVsSpbmggUGjDuiwgQmEgxJDDrG5oLCBIw6AgTuG7mWkgMTAwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1681926993824!5m2!1svi!2s"
                            width="100%" height="300" style="border:0; margin-bottom:30px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="box_info mt15">
                            <h5 class="title">Thông tin liên lạc của Shale Pizza</h5>
                            <div class="item-box_info">
                                <span class="grey-text float-start" style="width: 80px; color: #9ca3af;">Address:</span>
                                <p class="color-default fw-bold">285 Đội Cấn, Vĩnh Phú, Ba Đình, Hà Nội, Việt Nam</p>
                            </div>
                            <div class="item-box_info">
                                <span class="grey-text float-start" style="width: 80px; color: #9ca3af;">Tel:</span>
                                <p class="color-default fw-bold">(+84)35 902 1323 - (+84)36 766 7366</p>
                            </div>
                            <div class="item-box_info">
                                <span class="grey-text float-start" style="width: 80px; color: #9ca3af;">Mail:</span>
                                <p class="color-default fw-bold">hungcutedethuongg@gmail.com</p>
                            </div>
                            <div class="item-box_info">
                                <span class="grey-text float-start" style="width: 80px; color: #9ca3af;">Fanpage:</span>
                                <p class="color-default fw-bold">facebook.com/shalepizza.com.vn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END PAGE CONTENT -->
    <?php include 'includes/footer.php' ?>
    <!-- Swiper JS -->
    <script src="./assets/library/swiperjs/swiper-bundle.min.js"></script>
    <!-- Dropdown JS - Đang lỗi -->
    <script src="./assets/js/dropdown.js"></script>
    <!-- Initialize Swiper -->
    <script src="./assets/js/slideinit.js"></script>
</body>

</html>