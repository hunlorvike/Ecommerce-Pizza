<?php
session_start();
include 'config/config.php';
include 'includes/function.php';
$link = './admin/';
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
if (isset($_GET['action'])) {
    function update_cart($add = false)
    {
        foreach ($_POST['quantity'] as $id => $quantity) {
            if ($add) {
                $_SESSION['cart'][$id] += $quantity;
            } else {
                $_SESSION['cart'][$id] = $quantity;

            }
        }
    }

    switch ($_GET['action']) {
        case "add":
            // dd($_POST);
            update_cart(true);
            echo "<script type='text/javascript'> document.location ='gio-hang.php'; </script>";
            // session_unset();
            break;
        case "delete":
            if (isset($_GET['id'])) {
                unset($_SESSION['cart'][$_GET['id']]);
            }
            echo "<script type='text/javascript'> document.location ='gio-hang.php'; </script>";
            break;
        case "submit":
            if (isset($_POST['quantity']) && is_array($_POST['quantity'])) {
                update_cart();
            }
            echo "<script type='text/javascript'> document.location ='gio-hang.php'; </script>";
            // session_unset();
            break;

    }
}
if (!empty($_SESSION['cart'])) {
    // dd($_SESSION);
    // dd(implode(", ", array_keys($_SESSION['cart'])));
    // exit;
    // $query = mysqli_query($con, "SELECT * FROM tbl_product WHERE prod_id IN (" . implode(",", array_keys($_SESSION['cart'])) . ")");
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
    <section class="bar-status">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="barstatus">
                        <li class="d-inline-block fs14">
                            <a href="index.php">Trang chủ</a>
                        </li>
                        <li class="d-inline-block fs14">Giỏ hàng</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- END BAR STATUS -->
    <section class="cart mb50">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7">
                    <div class="cart-left">
                        <form action="gio-hang.php?action=submit" method="post">
                            <div class="row top-left fw-bold fs18 bb1 text-capitalize">
                                <div class="title-product col-md-5 p10">Thông tin sản phẩm</div>
                                <div class="title-price col-md-2 p10">Giá</div>
                                <div class="title-quantity col-md-2 p10">Số lượng</div>
                                <div class="title-total col-md-2 p10">Tổng cộng</div>
                                <div class="title-action col-md-1 p10">Xoá</div>
                            </div>
                            <div class="mid-left mt15">
                                <?php
                                if (!empty($_SESSION['cart'])) {
                                    // dd(implode(",", array_keys($_SESSION['cart'])));
                                    // dd($_SESSION['cart'][20]);
                                    // exit;
                                    $query = mysqli_query($con, "SELECT * FROM tbl_product WHERE prod_id IN (" . implode(",", array_keys($_SESSION['cart'])) . ")");
                                }
                                $temp = 0;
                                if (!empty($query)) {
                                    while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <div class="product-id bb1 pb20 row align-items-center mb20">
                                            <div class="cart-item product-image col-md-2 ">
                                                <div class="cart_product-thumbnail">
                                                    <a href="#">
                                                        <img class="wh120p" width="120" height="120"
                                                            src="<?php echo $link . $row['prod_thumb'] ?>" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="cart-item product-name col-md-3 fs14">
                                                <a href="chi-tiet-san-pham.php?id=<?php echo $row['prod_id'] ?>">
                                                    <?php echo $row['prod_name'] ?>
                                                </a>
                                            </div>
                                            <div class="cart-item product-price col-md-2">
                                                <?php echo number_format($row['prod_current_price'], 0, '.', '.') ?><span>₫</span>
                                            </div>
                                            <div class="cart-item product-quantity col-md-2">
                                                <input type="number" name="quantity[<?php echo $row['prod_id'] ?>]"
                                                    value="<?php echo $_SESSION['cart'][$row['prod_id']] ?>" class="w80p" id=""
                                                    min="1">
                                                <!-- quantity id sanr pham -->
                                            </div>
                                            <div class="cart-item total-price col-md-2">
                                                <?php echo number_format($row['prod_current_price'] * $_SESSION['cart'][$row['prod_id']], 0, '.', '.') ?><span>₫</span>
                                            </div>
                                            <div class="cart-item remove-item col-md-1">
                                                <a href="gio-hang.php?action=delete&id=<?php echo $row['prod_id'] ?>"
                                                    onClick="return confirm('Are you sure you want to delete?')"><i
                                                        class="icon-remove-sign"></i></a>
                                            </div>
                                        </div>
                                        <?php
                                        $ship = $row['ship_price'];
                                        $total = $row['prod_current_price'] * $_SESSION['cart'][$row['prod_id']];
                                        $temp += $total;
                                    }
                                }
                                ?>
                            </div>
                            <div class="bot-left flex-space-between">
                                <div class="btn-group-left">
                                    <a href="danh-muc.php" class="btn bg-default border-0 text-capitalize">
                                        Tiếp tục mua hàng
                                    </a>

                                </div>
                                <div class="btn-group-right">
                                    <button type="submit" name="btn-update"
                                        class="btn bg-default border-0 btn-update text-capitalize">Cập
                                        nhật giỏ hàng</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5">
                    <div class="cart-right bg-gray p30 rounded-3">
                        <div class="top-right bb1-dashed mb20">
                            <h3 class="title fs18 fw-bold ptb15 text-center">Thông tin thanh toán</h3>
                        </div>
                        <div class="mid-right">
                            <div
                                class="item-mid-right flex-space-between iflex-align-center w100 plr50 fw-bold fs18 mb20 pb20 bb1-dashed">
                                <span class="title">Tạm tính</span>
                                <p>
                                    <?php echo number_format($_SESSION['total_price_cart'] = "$temp", 0, '.', '.') ?><span>₫</span>
                                </p>
                            </div>
                            <div
                                class="item-mid-right flex-space-between iflex-align-center w100 plr50 fw-bold fs18 mb30">
                                <span class="title">Tổng</span>
                                <p class="price">
                                    <?php echo number_format($_SESSION['total_price_cart'] = "$temp" + "$ship", 0, '.', '.') ?><span>₫</span>
                                </p>
                            </div>
                        </div>
                        <div class="bot-right">
                            <a href="thanh-toan.php">
                                <button type="button"
                                    class="btn btn-primary bg-default border-0 fw-bold w100 p10 iflex-align-center text-center justify-content-center mb20">
                                    <i class="fa-solid fa-right-to-bracket"></i>Tiến hành thanh toán
                                </button>
                            </a>
                            <h3 class="title fs18 fw-bold text-center mb20">Chúng tôi chấp nhận thanh toán</h3>
                            <div class="d-flex justify-content-center ">
                                <div class="iflex-align-center">
                                    <img width="47" height="25" src="./assets/img/logo/visa.jpg" alt="">
                                    <img width="47" height="25" src="./assets/img/logo/discover.jpg" alt="">
                                    <img width="47" height="25" src="./assets/img/logo/amex.jpg" alt="">
                                    <img width="47" height="25" src="./assets/img/logo/master.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CART -->
    <?php include 'includes/footer.php' ?>
    <!-- Swiper JS -->
    <script src="./assets/library/swiperjs/swiper-bundle.min.js"></script>
    <!-- Dropdown JS - Đang lỗi -->
    <script src="./assets/js/dropdown.js"></script>
    <!-- Initialize Swiper -->
    <script src="./assets/js/slideinit.js"></script>
</body>

</html>