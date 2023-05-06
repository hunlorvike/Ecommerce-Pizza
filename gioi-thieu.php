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
    <!-- END BAR -->
    <section id="slide">
        <div class="container-fluid">
            <!-- Swiper -->
            <div class="main swiper mySwiper">
                <div class="wrapper swiper-wrapper">
                    <?php
                    $id = '2';
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
    <section class="bar-status">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="barstatus">
                        <li class="d-inline-block fs14">
                            <a href="index.php">Trang chủ</a>
                        </li>
                        <li class="d-inline-block fs14">Giới thiệu</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- END BAR STATUS -->
    <section class="about-us pt55">
        <div class="container">
            <div class="about__container mb50">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about__item ">
                            <div class="about__content">
                                <h2 class="title text-uppercase color-default fw-light fs-1">về chúng tôi</h2>
                                <div class="desc lh-sm fs16">
                                    <p>
                                        Shale Pizza là một chuỗi cửa hàng pizza nổi tiếng với thực đơn đa dạng,
                                        bao gồm
                                        các loại pizza, bánh mì và các món ăn khác. Cửa hàng được khai trương từ năm
                                        1960
                                        với một cửa hàng đầu tiên và hiện nay đã có hơn 1000 cửa hàng trên khắp thế
                                        giới.
                                        <br>
                                        <br>
                                        Shale Pizza chuyên phục vụ các loại pizza ngon, từ pizza cổ điển đến pizza
                                        đặc
                                        biệt, với nhiều loại nước sốt và nguyên liệu tươi ngon. Ngoài ra, nhà hàng còn
                                        cung cấp một số món ăn khác như salad, khoai tây chiên, bánh mỳ nướng và đồ
                                        uống.
                                        <br><br>
                                        Khách hàng có thể tùy chọn pizza của mình với nhiều loại topping khác nhau
                                        như
                                        rau củ, thịt, phô mai và gia vị, tùy theo sở thích cá nhân. Các đầu bếp tại
                                        Shale Pizza luôn chú trọng đến việc sử dụng nguyên liệu tươi ngon và cẩn thận
                                        trong quá trình chuẩn bị món ăn.
                                        <br><br>
                                        Ngoài ra, Shale Pizza còn cung cấp dịch vụ giao hàng tận nơi cho khách
                                        hàng, đảm
                                        bảo món ăn vẫn giữ được độ nóng và thơm ngon khi được giao đến tận nhà. Với
                                        không gian thoải mái, thực đơn phong phú và dịch vụ chuyên nghiệp, Shale Pizza
                                        là địa chỉ lý tưởng để thưởng thức pizza tại thành phố.
                                        <br><br>
                                        &emsp;&emsp;- Trụ sở chính: 285 Đội Cấn, Quần Ba Đình, Hà Nội
                                        <br>
                                        &emsp;&emsp;- Điện thoại: 035 902 1323 - 036 766 7366
                                        <br>
                                        &emsp;&emsp;- Email: hungcutedethuongg@gmail.com
                                        <br>
                                        &emsp;&emsp;- Fanpage: facebook.com/shalepizza.com.vn
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__item ">
                            <div class="about__img">
                                <img height="470" width="570" src="./assets/img/about/about1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about__container mb50">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about__item ">
                            <div class="about__img">
                                <img height="470" width="570" src="./assets/img/about/about2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about__item">
                            <div class="about__content">
                                <h2 class="title text-uppercase color-default fw-light fs-1">nhượng quyền</h2>
                                <div class="desc lh-sm fs16">
                                    <p>
                                        Shale Pizza là một thương hiệu pizza nổi tiếng với hơn 1000 nhà hàng tại các
                                        quốc
                                        gia trên thế giới. Thương hiệu này được thành lập vào năm 1960 và nhanh chóng
                                        trở
                                        thành một trong những tên tuổi hàng đầu trong ngành công nghiệp ẩm thực.
                                        <br>
                                        <br>
                                        Shale Pizza đang tìm kiếm các đối tác nhượng quyền để mở rộng quy mô kinh doanh
                                        trên
                                        khắp thế giới. Bằng cách trở thành một đối tác nhượng quyền của Shale Pizza, bạn
                                        sẽ
                                        được hưởng lợi từ một loạt các ưu đãi bao gồm:
                                        <br>
                                        <br>
                                        1. Sự hỗ trợ của đội ngũ chuyên gia: Shale Pizza sẽ cung cấp cho bạn một
                                        đội ngũ
                                        chuyên
                                        gia về ẩm thực, marketing và quản lý để giúp bạn khởi đầu và phát triển kinh
                                        doanh
                                        của mình.
                                        <br>
                                        <br>
                                        2. Hướng dẫn hoạt động kinh doanh: Shale Pizza cung cấp cho các đối tác
                                        nhượng
                                        quyền
                                        một quy trình hoạt động kinh doanh đầy đủ và chi tiết để giúp bạn vận hành nhà
                                        hàng
                                        của mình một cách hiệu quả.
                                        <br>
                                        <br>
                                        3. Đào tạo nhân viên: Shale Pizza sẽ cung cấp cho bạn các chương trình đào
                                        tạo
                                        chuyên
                                        nghiệp để giúp nhân viên của bạn học hỏi và phát triển kỹ năng.
                                        <br>
                                        <br>
                                        4. Chiến lược marketing: Shale Pizza sẽ hỗ trợ bạn với các chiến lược
                                        marketing để
                                        giúp
                                        bạn quảng bá thương hiệu của mình và thu hút khách hàng mới.
                                        <br>
                                        <br>
                                        5. Sản phẩm và nguyên liệu: Shale Pizza sẽ cung cấp cho bạn các sản phẩm
                                        và nguyên
                                        liệu
                                        chất lượng cao để đảm bảo rằng món ăn của bạn luôn thơm ngon và chất lượng.
                                        <br>
                                        <br>
                                        Trở thành một đối tác nhượng quyền của Shale Pizza sẽ giúp bạn khởi đầu một kinh
                                        doanh thành công trong lĩnh vực ẩm thực. Hãy liên hệ với chúng tôi để biết thêm
                                        thông tin và trở thành một đối tác nhượng quyền của Shale Pizza!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about__container mb50">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about__item">
                            <div class="about__content">
                                <h2 class="title text-uppercase color-default fw-light fs-1">TẦM NHÌN & SỨ MỆNH</h2>
                                <div class="desc lh-sm fs16">
                                    <p>
                                        Tầm nhìn của Shale Pizza là trở thành thương hiệu Pizza số một trên toàn thế
                                        giới, mang
                                        đến cho khách hàng những món ăn ngon và chất lượng, kết hợp với dịch vụ chuyên
                                        nghiệp và thân thiện. Chúng tôi hy vọng được tạo ra những trải nghiệm ẩm thực
                                        đáng nhớ cho khách hàng và trở thành một phần của kỷ nguyên pizza.
                                        <br><br>
                                        Sứ mệnh của Shale Pizza là đáp ứng nhu cầu của khách hàng về các món ăn ngon,
                                        chất lượng và đa dạng về phong cách. Chúng tôi cam kết sử dụng nguyên liệu tươi
                                        ngon và quy trình chế biến đảm bảo tiêu chuẩn vệ sinh an toàn thực phẩm. Bên
                                        cạnh đó, chúng tôi cũng cố gắng thực hiện các hoạt động xã hội và môi trường bảo
                                        vệ cộng đồng. Shale Pizza mong muốn trở thành một thương hiệu được yêu thích và
                                        đáng tin cậy trong ngành ẩm thực.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="about__item ">
                            <div class="about__img">
                                <img height="470" width="570" src="./assets/img/about/about3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT US -->
    <section class="value mb50">
        <div class="container">
            <h2 class="value__title text-uppercase text-end color-default fw-bolder mb50 plr50">Giá trị cốt lõi</h2>
            <div class="value__container position-relative p30">
                <div class="row position-relative">
                    <div class="col-md-6 col-6 mb50">
                        <div class="row value__item pr150">
                            <div class="item__icon col-md-1 color-default fs28">
                                <ion-icon name="shield-checkmark-sharp"></ion-icon>
                            </div>
                            <div class="item__content col-md-11">
                                <h3 class="item__title fw-bold fs16">Cam kết cao nhất với khách hàng về sản phẩm và dịch
                                    vụ</h3>
                                <p class="item_desc">
                                    Sản phẩm, dịch vụ được đảm bảo về chất lượng, sự khác biệt, giúp thỏa mãn các nhu
                                    cầu của khách hàng một cách tốt nhất.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 mb50">
                        <div class="row value__item pl150">
                            <div class="item__icon col-md-1 color-default fs28">
                                <ion-icon name="shield-checkmark-sharp"></ion-icon>
                            </div>
                            <div class="item__content col-md-11">
                                <h3 class="item__title fw-bold fs16">Tận tâm, chân thành nhất trong chăm sóc khách hàng
                                </h3>
                                <p class="item_desc">
                                    Cung cấp sản phẩm, dịch vụ một cách tận tâm, chân thành nhất; chăm sóc các khách
                                    hàng một cách tận tình, chu đáo nhất.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <div class="row value__item pr150">
                            <div class="item__icon col-md-1 color-default fs28">
                                <ion-icon name="shield-checkmark-sharp"></ion-icon>
                            </div>
                            <div class="item__content col-md-11">
                                <h3 class="item__title fw-bold fs16">Có trách nhiệm cao nhất với cộng đồng, và xã hội
                                </h3>
                                <p class="item_desc">
                                    Hoạt động kinh doanh với mục tiêu tiên quyết là góp phần xây dựng một cộng đồng, xã
                                    hội khỏe mạnh.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <div class="row value__item pl150">
                            <div class="item__icon col-md-1 color-default fs28">
                                <ion-icon name="shield-checkmark-sharp"></ion-icon>
                            </div>
                            <div class="item__content col-md-11">
                                <h3 class="item__title fw-bold fs16">Nền tảng vững chắc nhất để phát triển trong tương
                                    lai</h3>
                                <p class="item_desc">
                                    Quy trình hoạt động minh bạch, trung thực, hiệu quả nhất; đội ngũ nhân viên chuyên
                                    nghiệp; sản phẩm, dịch vụ khác biệt.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="value__img iflex-align-center justify-content-center">
                        <img class="rounded-circle" width="300" height="300" src="./assets/img/productslide/Pizza Sandwiches/pizzasand6.jpg" alt="">
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- END VALUE -->
    <?php include 'includes/footer.php' ?>
    <!-- END FOOTER -->
    <!-- Swiper JS -->
    <script src="./assets/library/swiperjs/swiper-bundle.min.js"></script>
    <!-- Dropdown JS - Đang lỗi -->
    <script src="./assets/js/dropdown.js"></script>
    <!-- Initialize Swiper -->
    <script src="./assets/js/slideinit.js"></script>
</body>

</html>