<?php
session_start();
include 'config/config.php';
include 'includes/function.php';
if (isset($_POST['btn-login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $query = mysqli_query($con, "SELECT * FROM tbl_customer WHERE cust_email = '$email' AND cust_password = '$password'");
    $row = mysqli_fetch_array($query);
    if ($row) {
        $_SESSION['customerlogin'] = $_POST['email'];
        $_SESSION['id'] = $row['cust_id'];
        $_SESSION['fullname'] = $row['cust_fullname'];
        echo "<script type='text/javascript'> document.location ='login.php'; </script>";
        header("location: http://localhost/PIZZA%20-%20HUNG/Pizaa/my-account.php");
        exit();
    } else {
        echo "<script>alert('Đăng nhập thất bại')</script>";
        header("http://localhost/PIZZA%20-%20HUNG/Pizaa/login.php");
        exit();
    }
}
if(isset($_POST['btn-reg'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);
    $repassword = md5($_POST['confirmpassword']);
    if($password == $repassword) {
        $query = mysqli_query($con, "INSERT INTO tbl_customer (cust_fullname, cust_email, cust_phone, cust_password, cust_address) VALUES ('$fullname', '$email', '$phone', '$password', '')");
        echo "<script>alert('Đăng ký thành công')</script>";
    } else {
        echo "<script>alert('Mật khẩu xác minh không đúng')</script>";
    }
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
    <section class="bar-status">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="barstatus">
                        <li class="d-inline-block fs14">
                            <a href="index.php">Trang chủ</a>
                        </li>
                        <li class="d-inline-block fs14">Đăng nhập hoặc Đăng ký</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- END BAR STATUS -->
    <section class="authentication mb30">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 sing-in">
                    <h4 class=" hello text-uppercase fw-bolder color-default">Sign in</h4>
                    <p class="">Đăng nhập để truy cập đến các đặc quyền riêng của bạn.</p>
                    <form action="" method="post" class="register-form outer-top-xs">
                        <div class="form-group mb20">
                            <label for="loginInputEmail" class="form-title">
                                Email *
                            </label>
                            <input type="email" name="email" class="form-control text-input"
                                placeholder="Nhập email của bạn" id="loginInputEmail">
                        </div>
                        <div class="form-group mb20">
                            <label for="loginInputPassword" class="form-title">
                                Password *
                            </label>
                            <input type="password" name="password" class="form-control text-input"
                                placeholder="Nhập password của bạn" id="loginInputPassword">
                        </div>
                        <button type="submit" class="btn-login btn btn-primary bg-default border-0 rounded-3"
                            name="btn-login">Đăng nhập</button>
                    </form>
                </div>
                <!-- END SIGN IN -->
                <div class="col-md-6 col-sm-6 create-new-account">
                    <h4 class=" hello text-uppercase fw-bolder color-default">Create a new account</h4>
                    <p class="">Đăng ký và tận hưởng nhiều ưu đãi riêng biệt chỉ dành cho thành viên của chúng tôi.
                    </p>
                    <form action="" method="post" name="register" class="register-form outer-top-xs">
                        <div class="form-group mb20">
                            <label for="fullname" class="form-title">Họ và tên *</label>
                            <input type="text" name="fullname" id="fullname" class="form-control"
                                placeholder="Nhập họ và tên của bạn">
                        </div>
                        <div class="form-group mb20">
                            <label for="email" class="form-title">Email *</label>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Nhập địa chỉ email của bạn">
                            <span class="has-error"></span>
                        </div>
                        <div class="form-group mb20">
                            <label for="phone" class="form-title">Số điện thoại *</label>
                            <input type="text" name="phone" id="phone" class="form-control" maxlength="12"
                                placeholder="Nhập số điện thoại của bạn">
                            <span class="has-error"></span>
                        </div>
                        <div class="form-group mb20">
                            <label for="password" class="form-title">Password *</label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Nhập số điện thoại của bạn">
                            <span class="has-error"></span>
                        </div>
                        <div class="form-group mb20">
                            <label for="confirmpassword" class="form-title">Confirm Password *</label>
                            <input type="password" name="confirmpassword" id="confirmpassword" class="form-control"
                                placeholder="Nhập số điện thoại của bạn">
                            <span class="has-error"></span>
                        </div>
                        <button type="submit" name="btn-reg" class="btn btn-primary btn-signup bg-default border-0">Đăng
                            ký</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </section>
    <!-- END FORM -->
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