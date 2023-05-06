<?php
session_start();
include "config/config.php";
if (strlen($_SESSION['adminlogin']) == 0) {
    header('location:login.php');
    exit(); // Thêm câu lệnh exit để dừng chương trình khi chuyển hướng đến trang đăng nhập
} else {
    $member = $_SESSION['member'];
    // Viet code o duoi nay
    if (isset($_POST['submit'])) {
        $category = $_POST['category'];
        $desc = $_POST['desc'];
        $query = mysqli_query($con, "INSERT INTO tbl_category(category_name, category_desc) VALUES ('$category', '$desc')");
        // echo "<script>alert('Thành công')</script>";
    }

    if (isset($_GET['del'])) {
        $id = intval($_GET['id']);
        mysqli_query($con, "DELETE FROM tbl_category WHERE category_id = '$id'");
        // echo "<script>alert('Thành công')</script>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
    <link rel="shortcut icon" href="../assets/img/logo/logo1.png" type="image/x-icon">
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

<body class="over-flow-x">
    <?php include "includes/footer.php"; ?>
    <!-- END HEADER -->
    <main class="change-password mt20  ">
        <div class="row">
            <?php include 'includes/aside.php' ?>
            <!-- END Side Bar -->
            <div class="content col-md-10">
                <section class="category-container mb106">
                    <div class="category_head mb20">
                        <p class="text fs16 fw-bolder px10-py20 w100pt bg-default m-0">Create Category</p>
                    </div>
                    <div class="category_body">
                        <form action="" method="post">
                            <div class="control-group mb20 row">
                                <label class="col-md-3 col-sm-3 text-end" for="">Category name</label>
                                <input type="text" name="category" class="col-sm-9 w400 col-md-9 "
                                    placeholder="Enter category name">
                            </div>
                            <div class="control-group mb20 row">
                                <label class="col-md-3 col-sm-3 text-end" for="">Description</label>
                                <textarea name="desc" id="" cols="" rows="5" class="col-sm-9 w400 col-md-9"
                                    placeholder="Enter description"></textarea>
                            </div>
                            <div class="control-group mb20 row text-end">
                                <div class="col-md-3 col-sm-3"></div>
                                <button type="submit" name="submit"
                                    class="col-sm-9 w400 col-md-9 border-0 px10-py20 rounded-3 bg-default hover-bg-orange">Lưu
                                    thay đổi</button>
                            </div>
                        </form>
                    </div>
                </section>
                <!-- Content -->
                <section class="category-container">
                    <div class="category_head mb20">
                        <p class="text fs16 fw-bolder px10-py20 w100pt bg-default m-0">Manage Categories</p>
                    </div>
                    <div class="order_body">
                        <div class=" order-container">
                            <div class="col-md-12">
                                <div class="order-control">
                                    <div class="row order-control-item w100pt">
                                        <div class="col-md-6 col-sm-6 text-capitalize">
                                            <span>Show</span>
                                            <select name="" id="" class="w50">
                                                <option value="5">5</option>
                                                <option value="10">10</option>
                                                <option value="15">15</option>
                                                <option value="20">20</option>
                                            </select>
                                            <span>Entries</span>
                                        </div>
                                        <div class="col-md-6 order-control-item col-sm-6 text-center">
                                            <label for="search-order">
                                                <span>Search</span>
                                                <input type="text" class="px-1" name="" id="search-order"
                                                    placeholder="Search order">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt20">
                                <div class="order-table">
                                    <table class="w100pt">
                                        <thead class="">
                                            <tr
                                                class="text-center fw-bold w100pt border border-dark bg-gray-active color-white">
                                                <td class="col-md-1 border-end border-dark">#</td>
                                                <td class="col-md-2 border-end border-dark">Category</td>
                                                <td class="col-md-3 border-end border-dark">Description</td>
                                                <td class="col-md-3 border-end border-dark">Creation Date</td>
                                                <td class="col-md-2 border-end border-dark">Last Updated</td>
                                                <td class="col-md-1">Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = mysqli_query($con, "SELECT * FROM tbl_category");
                                            $count = 1;
                                            while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                                <tr class="odd text-start fs14 w100pt border border-dark">
                                                    <td class="col-md-1 p10 border-end border-dark">
                                                        <?php echo htmlentities($count); ?>
                                                    </td>
                                                    <td class="col-md-2 p10 border-end border-dark">
                                                        <p class="customer w100pt m-0">
                                                            <?php echo htmlentities($row['category_name']); ?>
                                                        </p>
                                                    </td>
                                                    <td class="col-md-3 p10 border-end border-dark">
                                                        <p class="product w100pt m-0">
                                                            <?php echo htmlentities($row['category_desc']); ?>
                                                        </p>
                                                    </td>
                                                    <td class="col-md-3 p10 border-end border-dark">
                                                        <p class="address w100pt m-0">
                                                            <?php echo htmlentities($row['category_reg_date']); ?>
                                                        </p>
                                                    </td>
                                                    <td class="col-md-2 p10 border-end border-dark">
                                                        <p class="product w100pt m-0">
                                                            <?php echo htmlentities($row['category_update_date']); ?>
                                                        </p>
                                                    </td>
                                                    <td class="col-md-1 p10">
                                                        <p class="w100pt m-0">
                                                            <a
                                                                href="edit-category.php?id=<?php echo htmlentities($row['category_id']) ?>">
                                                                <i class="fa-solid fa-pen-to-square hover-color-orange"></i>
                                                            </a>
                                                            <a href="category.php?id=<?php echo htmlentities($row['category_id']) ?>&del=delete"
                                                                onClick="return confirm('Are you sure you want to delete?')">
                                                                <i class="fa-solid fa-circle-xmark hover-color-orange"></i>
                                                            </a>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <?php $count = $count + 1;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Content -->
            </div>
        </div>
    </main>

</body>

</html>