<?php
session_start();
include 'config/config.php';
include 'includes/function.php';

if (strlen($_SESSION['customerlogin']) == 0) {
    header('location:login.php');
    exit(); // Add an exit statement to stop the program after redirecting to the login page
} else {
    $id = $_SESSION['id'];
    if (isset($_POST['btn-change'])) {
        $currentpass = $_POST['current-pass'];
        $newpass = $_POST['new-pass1'];
        $confirmpass = $_POST['new-pass2'];
        if ($newpass == $confirmpass) {
            $passmd5 = md5($currentpass); // Hash the current password for comparison
            $query = mysqli_query($con, "SELECT cust_password FROM tbl_customer WHERE cust_id = '$id' AND cust_password = '$passmd5'");
            $row = mysqli_fetch_array($query);
            if ($row) {
                $newpass = md5($newpass); // Hash the new password before saving to the database
                $query = mysqli_query($con, "UPDATE tbl_customer SET cust_password = '$newpass' WHERE cust_id = '$id'");
                echo "<script>alert('Đổi thành công')</script>";
            } else {
                // The current password is incorrect
                echo "<script>alert('Nhập sai mật khẩu')</script>";
            }
        } else {
            // The new password and confirm password don't match
            echo "<script>alert('Mật khẩu không giống nhau')</script>";
        }
    }
    if (isset($_POST['btn-update'])) {
        $_SESSION['city'] = $_POST['city'];
        $_SESSION['district'] = $_POST['district'];
        $_SESSION['wards'] = $_POST['wards'];
        $_SESSION['details'] = $_POST['address-details'];
        $address = $_SESSION['details'] . ', ' . $_SESSION['wards'] . ', ' . $_SESSION['district'] . ', ' . $_SESSION['city'];
        $sql = mysqli_query($con, "UPDATE tbl_customer SET cust_address = '$address' WHERE cust_id = '$id'");
    }
}

// Make sure to close the PHP tag at the end of the file
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
    <?php include "includes/header.php"; ?>
    <?php
    $cust_id = $_SESSION['id'];
    $query = mysqli_query($con, "SELECT * FROM tbl_customer WHERE cust_id = $cust_id");
    while ($row = mysqli_fetch_array($query)) {
        $fullname = $row['cust_fullname'];
        $cust_email = $row['cust_email'];
    }
    ?>
    <section class="my-account mt50 mb50">
        <div class="container">
            <div class="row">
                <div class="col-md-4 info-customer bg-white-default p-0 ">
                    <div class="avatar-customer text-center  pt55">
                        <a href="#">
                            <img src="./assets/img/productslide/User/lam.jpg" class="image" alt="">
                        </a>
                    </div>
                    <div class="full-name-customer text-center fs28 color-default fw-bold mt15">
                        <?php echo $fullname ?>
                    </div>
                    <div class="email-customer text-center fs16 bb1 pb20">
                        <?php echo $cust_email ?>
                    </div>
                    <div class="details-customer text-center fs16 mt30 fs18 fw-bold">
                        <ul>
                            <li class="row">
                                <a href="#" class="row align-items-center" id="btn-tab1">
                                    <i class="fa-solid fa-user d-inline-block p-0 col-md-3 text-end"></i>
                                    <p class="col-md-9 text-start m-0">Thông tin tài khoản</p>
                                </a>
                            </li>
                            <li class="row">
                                <a href="#" class="row align-items-center" id="btn-tab2">
                                    <i
                                        class="fa-sharp fa-solid fa-location-dot d-inline-block p-0 col-md-3 text-end"></i>
                                    <p class="col-md-9 text-start m-0">Thông tin địa chỉ</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="logout-customer text-center fs16 fs18 fw-bold pb50 row">
                        <a href="logout.php" class="row align-items-center">
                            <i class="fa-solid fa-right-from-bracket d-inline-block p-0 col-md-3 text-end"></i>
                            <p class="col-md-9 text-start m-0">Đăng xuất</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 form-customer bg-white-default p-0 d-none" id="tab1">
                    <div class="form-group mb20 pt55 plr10">
                        <label for="">Họ và tên *</label>
                        <input type="text" name="" value="<?php echo $fullname ?>" class="w100 p10 rounded-3 border-1"
                            id="">
                    </div>
                    <div class="form-group mb20 plr10">
                        <label for="">Email *</label>
                        <input type="text" name="" value="<?php echo $cust_email ?>" class="w100 p10 rounded-3 border-1"
                            id="">
                    </div>
                    <div class="change-password plr10">
                        <h3>Thay đổi mật khẩu</h3>
                        <form action="" method="post">
                            <div class="control-group mb20 row justify-content-start mt30">
                                <label for="" class="col-md-3 col-sm-3 text-end">Mật khẩu hiện tại</label>
                                <input type="password" name="current-pass" class="col-sm-9 w300p  col-md-9 " name=""
                                    id="">
                            </div>
                            <div class="control-group mb20 row justify-content-start">
                                <label for="" class="col-md-3 col-sm-3 text-end">Mật khẩu mới</label>
                                <input type="password" name="new-pass1" class="col-sm-9 w300p  col-md-9 " name="" id="">
                            </div>
                            <div class="control-group mb20 row justify-content-start">
                                <label for="" class="col-md-3 col-sm-3 text-end">Nhập lại mật khẩu</label>
                                <input type="password" name=new-pass2 class="col-sm-9 w300p  col-md-9 " name="" id="">
                            </div>
                            <div class="control-group mb20 row justify-content-start">
                                <label for="" class="col-md-3 col-sm-3 text-end"></label>
                                <button type="submit" name="btn-change"
                                    class="border-0 col-md-9 w300p col-sm-9 rounded-3 bg-default">Lưu
                                    thay
                                    đổi</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-8 form-customer bg-white-default p-0 d-block" id="tab2">
                    <form action="" method="post">
                        <div class="form-group mb20 pt55 plr10">
                            <label for="">Tỉnh/Thành phố *</label>
                            <input type="text" name="city" placeholder="Hà Nội, Hồ Chí Minh, Bắc Giang..."
                                class="w100 p10 rounded-3 border-1" id="" required>
                        </div>
                        <div class="form-group mb20 plr10">
                            <label for="">Quận/Huyện *</label>
                            <input type="text" name="district" placeholder="Thanh Xuân, Thủ Đức, Quốc Oai..."
                                class="w100 p10 rounded-3 border-1" id="" required>
                        </div>
                        <div class="form-group mb20 plr10">
                            <label for="">Xã/Phường *</label>
                            <input type="text" name="wards" placeholder="Tiên Phương, An Thượng, Phương Khê..."
                                class="w100 p10 rounded-3 border-1" id="" required>
                        </div>
                        <div class="form-group mb20 plr10">
                            <label for="">Địa chỉ chi tiết *</label>
                            <input type="text" name="address-details" value=""
                                placeholder="Đường 123, Ngõ 123, Ngách 123..." class="w100 p10 rounded-3 border-1" id=""
                                required>
                        </div>
                        <div class="control-group mb20 row justify-content-center">
                            <button type="submit" name="btn-update"
                                class="border-0 px10-py20 w300p rounded-3 bg-default">Lưu thay
                                đổi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Content -->
    <script src="./assets/js/account.js"></script>
    <?php include "includes/footer.php"; ?>
</body>

</html>