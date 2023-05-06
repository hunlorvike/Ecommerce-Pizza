<header>
    <div class="header__top ptb15 fs14">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 flex-space-between">
                    <div class="left pull-left">
                        <span class="phone mr15 iflex-align-center">
                            <ion-icon name="call-outline" class="color-default"></ion-icon>
                            &nbsp; 035.902.1323 - 036.766.7366
                        </span>
                        <span class="email iflex-align-center">
                            <ion-icon name="mail-outline" class="color-default"></ion-icon>
                            &nbsp;hungcutedethuongg@gmail.com
                        </span>
                    </div>
                    <div class="right pull-right">
                        <span class="time pr15 iflex-align-center">
                            <a href="my-account.php">
                                <?php
                                if (isset($_SESSION['customerlogin'])) {
                                    echo '<i class="fa-solid fa-user color-default mr15"></i>' . $_SESSION['fullname'];
                                } else {
                                    echo '<i class="fa-solid fa-user color-default mr15"></i> My account';
                                }
                                ?>
                            </a>
                        </span>
                        <p class="icon-social pl15 iflex-align-center">
                            <span>
                                <?php
                                if (isset($_SESSION['customerlogin'])) {
                                    echo '<a href="logout.php"><i class="fa-solid fa-right-from-bracket color-default mr15"></i>Đăng xuất</a>';
                                } else {
                                    echo '<a href="login.php"><i class="fa-solid fa-right-from-bracket color-default mr15"></i>Đăng nhập</a>';
                                }
                                ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End header top -->
    <div class="header__bottom fs14">
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-inline-flex">
                    <div class="logo m0a">
                        <a href="index.php">
                            <img src="./assets/img/logo/logo2.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- End logo website-->
                <div class="col-md-6">
                    <div class="form__search pt55">
                        <form action="search-result.php" method="post">
                            <div class="form-group">
                                <input type="text" name="value-search" class="form-control"
                                    placeholder="Nhập từ khoá tìm kiếm" id="">
                            </div>
                            <button type="submit" name="search" class="btn bg-default">
                                <ion-icon name="search-outline"></ion-icon>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- End Form Search -->
                <div class="col-md-3 d-flex justify-content-center ">
                    <div class="header__action-group iflex-align-center fs16">
                        <p class="cart icon">
                            <a href="gio-hang.php" class="iflex-align-center">
                                <ion-icon name="bag-outline" class="fs20"></ion-icon>
                                <span>Giỏ hàng</span>
                                <span class="count fs12">
                                    <?php echo count($_SESSION['cart']) ?>
                                </span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End header bottom -->
    <div class="header__navigation fs16">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="navi__category">
                        <p class="cate-title-list iflex-align-center">
                            <ion-icon name="menu-outline"></ion-icon>
                            &nbsp;Danh mục sản phẩm
                        </p>
                        <div class="list__category">
                            <ul>
                                <?php
                                $query = mysqli_query($con, "SELECT * FROM tbl_category");
                                while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <li class="iflex-align-center flex-space-between">
                                        <a href="san-pham.php">
                                            <?php echo $row['category_name'] ?>
                                        </a>
                                        <ion-icon name="chevron-forward-outline"></ion-icon>
                                        <div class="sub__category">
                                            <div class="row list-sub__cate">
                                                <?php
                                                $sql = mysqli_query($con, "SELECT * FROM tbl_sub_category WHERE cate_id = " . $row['category_id']);
                                                while ($result = mysqli_fetch_array($sql)) {
                                                    ?>
                                                    <div class="col-md-6 sub__cate p-2">
                                                        <div class="top__title">
                                                            <a href="danh-muc.php">
                                                                <?php echo $result['sub_name'] ?>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                }
                                ?>

                        </div>
                    </div>
                </div>
                <!-- End Danh mục sản phẩm -->
                <div class="col-md-9">
                    <div class="menu">
                        <ul id="menu__menu-2" class="menu flex-space-between iflex-align-center">
                            <li class="menu-item menu-item-home menu-item-type_post mr15 ">
                                <a href="index.php">Trang Chủ</a>
                            </li>
                            <li class="menu-item menu-item-home menu-item-type_post mr15">
                                <a href="gioi-thieu.php">Giới Thiệu</a>
                            </li>
                            <li class="menu-item menu-item-home menu-item-type_post mr15">
                                <a href="san-pham.php">Sản Phẩm</a>
                            </li>
                            <li class="menu-item menu-item-home menu-item-type_post mr15">
                                <a href="blog.php">Blog</a>
                            </li>
                            <li class="menu-item menu-item-home menu-item-type_post mr15">
                                <a href="lien-he.php">Liên Hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End menu -->
            </div>
        </div>
    </div>
    <!-- End header navigation -->
</header>
<!-- END HEADER -->