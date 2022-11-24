<?php
$gmail = $_SESSION['Gmail'];
$sql_taikhoan_sua = "SELECT * FROM tbltaikhoan WHERE Gmail = '" . $gmail . "' LIMIT 1";
$query_taikhoan_sua = mysqli_query($mysqli, $sql_taikhoan_sua);
?>
<!-- Start breadcrumb section -->
<section class="breadcrumb__section breadcrumb__bg">
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <div class="breadcrumb__content text-center">
                    <h1 class="breadcrumb__content--title text-white mb-25">Tài Khoản</h1>
                    <ul class="breadcrumb__content--menu d-flex justify-content-center">
                        <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb__content--menu__items"><span class="text-white">Tài khoản</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb section -->

<!-- my account section start -->
<section class="my__account--section section--padding">
    <div class="container">
        <div class="my__account--section__inner border-radius-10 d-flex">
            <div class="account__left--sidebar">
                <h2 class="account__content--title h3 mb-20">Tài khoản</h2>
                <ul class="account__menu">
                    <li class="account__menu--list"><a href="index.php?page=myoder">Đơn hàng</a></li>
                    <li class="account__menu--list"><a href="index.php?page=myhistory">Lịch sử</a></li>
                    <li class="account__menu--list"><a href="index.php?page=myaddress">Địa chỉ</a></li>
                    <li class="account__menu--list"><a href="index.php?page=wishlist">Yêu thích</a></li>
                    <li class="account__menu--list active"><a href="index.php?page=account">Thay đổi thông tin</a></li>
                    <li class="account__menu--list"><a href="index.php?dangxuat=1">Đăng xuất</a></li>
                </ul>
            </div>
            <div class="account__wrapper">
                <div class="account__content">
                    <h3 class="account__content--title mb-20">Thông tin tài khoản</h3>
                    <form action="layout/pages/xulytaikhoan.php" method="POST">
                        <?php
                        while ($taikhoan = mysqli_fetch_array($query_taikhoan_sua)) {
                        ?>
                            <input type="text" class="account__details--footer__btn" value="<?php echo $taikhoan['TenTK'] ?>" style="margin-bottom: 10px; width: 50%" placeholder="Họ tên" name="TenTK"><br>
                            <input type="text" class="account__details--footer__btn" value="<?php echo $taikhoan['SDT'] ?>" style="margin-bottom: 10px; width: 50%" placeholder="Số điện thoại" name="SDT"><br>
                            <input type="text" class="account__details--footer__btn" value="<?php echo $taikhoan['DiaChi'] ?>" style="margin-bottom: 10px; width: 50%" placeholder="Địa chỉ" name="DiaChi"><br>
                        <?php
                        }
                        ?>

                        <div class="account__details--footer d-flex">
                            <a class="account__details--footer__btn" style="background-color: #ededed;" href="index.php?page=replacepassword">Đổi mật khẩu</a>
                            <input class="account__details--footer__btn" style="background-color: #ededed;" type="submit" name="thaydoithongtin" value="Lưu lại"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- my account section end -->

<!-- Start shipping section -->

<!-- End shipping section -->

</main>