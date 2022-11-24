<?php
$kiemtra = 1;
?>
<!-- Start breadcrumb section -->
<section class="breadcrumb__section breadcrumb__bg">
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <div class="breadcrumb__content text-center">
                    <h1 class="breadcrumb__content--title text-white mb-25">Đăng Nhập</h1>
                    <ul class="breadcrumb__content--menu d-flex justify-content-center">
                        <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.php">Trang Chủ</a></li>
                        <li class="breadcrumb__content--menu__items"><span class="text-white">Đăng Nhập</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb section -->

<!-- Start login section  -->
<div class="login__section section--padding">
    <div class="container">
        <span>
            <?php
            if (isset($_POST['dangnhap'])) {
                $Gmail = $_POST['Gmail'];
                $MatKhau = md5($_POST['MatKhau']);
                $sql = "SELECT * FROM tbltaikhoan WHERE Gmail='" . $Gmail . "' AND MatKhau='" . $MatKhau . "' LIMIT 1";
                $row = mysqli_query($mysqli, $sql);
                $count = mysqli_num_rows($row);

                if ($count > 0) {
                    $kiemtra = 1;
                    $row_data = mysqli_fetch_array($row);
                    $_SESSION['dangky'] = $row_data['TenTK'];
                    $_SESSION['Gmail'] = $row_data['Gmail'];
                    echo "<script> window.location.href='index.php?page=cart';</script>";
                } else {
                    $kiemtra = 0;
                }
            }
            ?>
        </span>
        <form action="" autocomplete="off" method="POST">
            <div class="login__section--inner">
                <div class="row row-cols-md-2 row-cols-1">
                    <div class="col">
                        <div class="account__login">
                            <div class="account__login--header mb-25">
                                <h2 class="account__login--header__title h3 mb-10">Đăng Nhập</h2>
                                <p class="account__login--header__desc">Đăng nhập để mua sản phẩm.</p>

                                <span style="color: red;">
                                    <?php
                                    if (isset($login_check)) {
                                        echo $login_check;
                                    }
                                    if ($kiemtra == 0) {
                                        echo 'Tài khoản hoặc mật khẩu không chính xác';
                                    }
                                    ?>
                                </span>
                            </div>
                            <div class="account__login--inner">
                                <input class="account__login--input" placeholder="Email" type="text" name="Gmail">
                                <input class="account__login--input" placeholder="Password" type="password" name="MatKhau">
                                <div class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                    <div class="account__login--remember position__relative">


                                    </div>
                                    <button class="account__login--forgot" type="submit">Quên mật khẩu</button>
                                </div>
                                <button class="account__login--btn primary__btn" type="submit" name="dangnhap">Đăng Nhập</button>
                                <div class="account__login--divide">
                                    <span class="account__login--divide__text">Hoặc</span>
                                </div>
                                <div class="account__social d-flex justify-content-center mb-15">
                                    <a class="account__social--link facebook" target="_blank" href="https://www.facebook.com/">Facebook</a>
                                    <a class="account__social--link google" target="_blank" href="https://www.google.com/">Google</a>
                                    <a class="account__social--link twitter" target="_blank" href="https://twitter.com/">Twitter</a>
                                </div>
                                <p class="account__login--signup__text">Tôi chưa có tài khoản <button type="submit"><a href="index.php?page=register">Đăng ký ngay</a></button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End login section  -->

<!-- Start shipping section -->
<?php include('./layout/bases/shipping_section.php') ?>
<!-- End shipping section -->