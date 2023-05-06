<?php
session_start();
include 'config/config.php';
include 'includes/function.php';
$link = './admin/';
$id = $_SESSION['id'];
$query_cust = mysqli_query($con, "SELECT * FROM tbl_customer WHERE cust_id = '$id'");
$row_cust = mysqli_fetch_array($query_cust);
// echo $_SESSION['cart'];
if (empty($_SESSION['cart'])) {
    echo "<script>alert('Giỏ hàng rỗng')</script>";
    echo "<script type='text/javascript'> document.location ='san-pham.php'; </script>";
}
if (isset($_POST['btn-submit'])) {
    $fullname_checkout = $_POST['fullname_checkout'];
    $phone_checkout = $_POST['phone_checkout'];
    $email_checkout = $_POST['email_checkout'];
    $address_checkout = $_POST['address_details'] . ',' . $_POST['wards_checkout'] . ',' . $_POST['district_checkout'] . ',' . $_POST['city_checkout'];
    $note_checkout = $_POST['note_checkout'] ? $_POST['note_checkout'] : '';
    $payment_method = $_POST['payment_method'] == 'COD' ? 'Giao hàng trả tiền' : 'Chuyển khoản ngân hàng';
    $sql = mysqli_query($con, "SELECT * FROM tbl_product WHERE prod_id IN (" . implode(",", array_keys($_SESSION['cart'])) . ")");
    $temp = 0;
    // $ship = $result['ship_price'];
    // $total = $result['prod_current_price'] * $_SESSION['cart'][$result['prod_id']];
    while ($result = mysqli_fetch_array($sql)) {
        $temp += $result['prod_current_price'] * $_SESSION['cart'][$result['prod_id']];
        $ship = $result['ship_price'];
    }
    $total = $temp + $ship;
    $insert_order = mysqli_query($con, "INSERT INTO tbl_order (order_name, order_phone, order_email, order_total, order_address, order_note) VALUES ('$fullname_checkout', '$phone_checkout', '$email_checkout', '$total', '$address_checkout', '$note_checkout')");
    $insert_id = mysqli_insert_id($con);
    $insert_string = "";
    mysqli_data_seek($sql, 0);
    while ($result = mysqli_fetch_array($sql)) {
        $insert_string .= "('$insert_id', '" . $result['prod_id'] . "', '" . $_SESSION['cart'][$result['prod_id']] . "', '" . $result['prod_current_price'] . "', '$payment_method'),";
    }
    // dd($insert_string);exit();
    $insert_string = rtrim($insert_string, ',');
    $insert_order_detail = mysqli_query($con, "INSERT INTO tbl_order_detail (order_id, prod_id, quantity, price, payment_name) VALUES $insert_string");
    // dd($insert_id);
    // dd($insert_order_detail);exit();
    if ($insert_order_detail) {
        unset($_SESSION['cart']);
        echo "<script type='text/javascript'> document.location ='san-pham.php'; </script>";
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
                        <li class="d-inline-block fs14">
                            <a href="gio-hang.php">Giỏ hàng</a>
                        </li>
                        <li class="d-inline-block fs14">Thông tin giao hàng</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- END BAR STATUS -->
    <section class="order-details">
        <div class="container">
            <form action="" method="post" class="checkout" name="checkout-form">
                <div class="row">
                    <div class="col-md-7">
                        <div class="left">
                            <h3 class="title fw-bold fs20 color-default mb30 text-capitalize">Thông tin giao hàng</h3>
                            <div class="form_order">
                                <div class="info">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 mb20">
                                            <input type="text" class="w100 p10" name="fullname_checkout"
                                                value="<?php echo $row_cust['cust_fullname'] ?>"
                                                placeholder="Nhập họ tên người nhận hàng" required>
                                        </div>
                                        <div class="col-md-5 col-sm-5 mb20">
                                            <input type="text" name="phone_checkout" id="" class=" w100 p10"
                                                value="<?php echo $row_cust['cust_phone'] ?>"
                                                placeholder="Nhập số điện thoại người nhận hàng" required>
                                        </div>
                                        <div class="col-md-7 col-sm-7 mb20">
                                            <input type="email" name="email_checkout" class="p10 w100" id=""
                                                value="<?php echo $row_cust['cust_email'] ?>"
                                                placeholder="Nhập email người nhận hàng" required>
                                        </div>
                                        <?php
                                        $query = mysqli_query($con, "SELECT * FROM tbl_customer WHERE cust_id = '$id'");
                                        $row = mysqli_fetch_array($query);
                                        $delimiter = ",";
                                        $address_parts = explode(',', $row['cust_address']);
                                        $i = 0;
                                        $address = [];
                                        while ($i < count($address_parts)) {
                                            $value = $address_parts[$i];
                                            // thực hiện các thao tác với phần tử $value ở đây
                                            array_push($address, $value);
                                            $i++;
                                        }
                                        ?>
                                        <div class="row mb20">
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" name="wards_checkout" id="" class="w100 p10"
                                                    value="<?php echo $address[1] ?>" placeholder="Nhập xã..." required>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" name="district_checkout" id="" class="w100 p10"
                                                    value="<?php echo $address[2] ?>" placeholder="Nhập huyện..."
                                                    required>

                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <input type="text" name="city_checkout" id="" class="w100 p10"
                                                    value="<?php echo $address[3] ?>" placeholder="Nhập thành phố..."
                                                    required>

                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 mb20">
                                            <input type="text" class="w100 p10" name="address_details"
                                                value="<?php echo $address[0] ?>" placeholder="Nhập địa chỉ chi tiết"
                                                required>
                                        </div>
                                        <div class="col-md-12 col-sm-12 mb20">
                                            <textarea name="note_checkout" class="w100 p10 rounded-3" cols="30" rows="5"
                                                placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn."
                                                required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="title fw-bold fs20  mb30 text-capitalize">Phương thức thanh toán</h3>
                            <div class="bank_details border border-danger p30 mb30">
                                <h6 class="title">Thông tin tài khoản ngân hàng</h6>
                                <?php
                                $query_payment = mysqli_query($con, "SELECT * FROM tbl_payment");
                                $count = 1;
                                while ($row_payment = mysqli_fetch_array($query_payment)) {
                                    ?>
                                    <p class="w100 mb20">
                                        <?php echo $count ?>. <?php echo $row_payment['user_name'] ?> - <?php echo $row_payment['bank_detail'] ?>
                                        <br>
                                        <?php echo $row_payment['bank_name'] ?>
                                    </p>
                                    <?php $count = $count + 1;
                                }
                                ?>
                            </div>
                            <div class="form_payment" id="payment">
                                <ul class="payment_methods mb20">
                                    <li class="item-payment ">
                                        <div class="w100">
                                            <input type="radio" id="payment_method_cod" name="payment_method"
                                                value="COD" required>
                                            <label for="payment_method_cod" class="ml15 color-default fw-bold">
                                                Trả tiền mặt khi nhận hàng (COD)
                                            </label>
                                        </div>
                                        <div class="w100">
                                            <input type="radio" id="payment_method_bacs" name="payment_method"
                                                value="Bank" required>
                                            <label for="payment_method_bacs" class="ml15 color-default fw-bold">
                                                Chuyển khoản ngân hàng
                                            </label>
                                        </div>
                                    </li>
                                </ul>

                                <p>Thông tin cá nhân của bạn sẽ được sử dụng để xử lý đơn hàng và cho các mục đích cụ
                                    thể khác đã được mô tả trong <a href="#" class="color-default">chính sách riêng
                                        tư</a> của chúng tôi.</p>
                            </div>
                            <button type="submit" name="btn-submit" class="btn btn-primary border-0 bg-default mb20"
                                style="padding: 7px 150px">Đặt hàng</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="right bg-gray rounded-3 p20">
                            <div class="coupon_code">
                                <h3 class="title fw-bold fs20 color-default mb30 text-capitalize">Nhập mã giảm giá</h3>
                                <div class="form_coupon row">
                                    <div class="col-md-7 col-sm-7">
                                        <input type="text" name="coupon-code" class="w100 mb20 p10 rounded-pill" id=""
                                            placeholder="Coupon code">
                                    </div>
                                    <div class="col-md-5 col-sm-5">
                                        <button type="submit"
                                            class="btn btn-primary bg-default border-0 mb20 p10 rounded-pill">Áp
                                            dụng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="details">
                                <div class="details-title flex-space-between fw-bold fs18 row mb20">
                                    <span class="product-name col-md-9 col-sm-9">Sản phẩm</span>
                                    <span class="product-total col-md-3 col-sm-3">Thành tiền</span>
                                </div>
                                <?php
                                if (!empty($_SESSION['cart'])) {
                                    // dd(implode(",", array_keys($_SESSION['cart'])));
                                    // dd($_SESSION['cart'][20]);
                                    // exit;
                                    $query = mysqli_query($con, "SELECT SUBSTRING(prod_name, 7 , LENGTH(prod_name)/2) as short_content, tbl_product.* FROM tbl_product WHERE prod_id IN (" . implode(",", array_keys($_SESSION['cart'])) . ")");
                                }
                                $temp = 0;
                                while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <div class="details-body row justify-content-between bb1-dashed pb20">
                                        <div class="product-name iflex-align-center col-md-9 col-sm-9 mt30">
                                            <img src="<?php echo $link . $row['prod_thumb'] ?>" width="70" height="70"
                                                class="wh70p" alt="">
                                            <span class="name text-capitalize">
                                                <?php echo $row['short_content'] ?>
                                            </span>
                                            <strong class="product-quantity">&nbsp; x
                                                <?php echo $_SESSION['cart'][$row['prod_id']] ?>
                                            </strong>
                                        </div>
                                        <div class="product-total col-md-3 col-sm-3 iflex-align-center mt30">
                                            <?php echo number_format($row['prod_current_price'] * $_SESSION['cart'][$row['prod_id']], 0, '.', '.') ?><span>₫</span>
                                        </div>
                                    </div>
                                    <?php
                                    $ship = $row['ship_price'];
                                    $total = $row['prod_current_price'] * $_SESSION['cart'][$row['prod_id']];
                                    $temp += $total;
                                }
                                ?>
                                <div class="details-title flex-space-between fw-bold fs18 row mb20 mt15 bb1 pb20">
                                    <span class="product-name col-md-9 col-sm-9">Tạm tính</span>
                                    <span class="product-total col-md-3 col-sm-3 iflex-align-center">
                                        <?php echo number_format($_SESSION['total_price_cart'] = "$temp", 0, '.', '.') ?><span>₫</span>
                                    </span>
                                </div>
                                <div class="details-title flex-space-between fw-bold fs18 row mb20  mt15 ">
                                    <span class="product-name col-md-9 col-sm-9">Tổng cộng</span>
                                    <span class="product-total col-md-3 col-sm-3 iflex-align-center">
                                        <?php echo number_format($_SESSION['total_price_cart'] = "$temp" + "$ship", 0, '.', '.') ?><span>₫</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- END ORDER DETAILS -->
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