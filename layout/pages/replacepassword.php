<!-- Start breadcrumb section -->
<section class="breadcrumb__section breadcrumb__bg">
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <div class="breadcrumb__content text-center">
                    <h1 class="breadcrumb__content--title text-white mb-25">Đổi mật khẩu</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb section -->

<!-- Start login section  -->
<div class="login__section section--padding">
    <div class="container">
        <?php
        $Gmail = $_SESSION['dangky'];
        ?>
        <?php

        if (isset($_POST['doimatkhau'])) {
            $MatKhauCu = md5($_POST['MatKhauCu']);
            $MatKhauMoi = md5($_POST['MatKhauMoi']);
            $sql = "SELECT * FROM tbltaikhoan WHERE Gmail='" . $Gmail . "' AND MatKhau='" . $MatKhauCu . "' LIMIT 1";
            $row = mysqli_query($mysqli, $sql);
            $count = mysqli_num_rows($row);
            if ($count > 0) {
                $sql_update = "UPDATE tbltaikhoan SET Matkhau = '" . $MatKhauMoi . "' WHERE Gmail='" . $Gmail . "' ";
                echo $sql_update;
                $query_update = mysqli_query($mysqli, $sql_update);
                echo "<script>alert('Thay đổi mật khẩu thành công');</script>";
                header("Location:index.php");
            } else {
                echo ("Mật khẩu cũ không đúng vui lòng nhập lại");
                header("Location:index.php?page=replacepassword");
            }
        }
        ?>
        <form action="" method="POST">
            <div class="login__section--inner">
                <div class="row row-cols-md-2 row-cols-1">
                    <div class="col">
                        <div class="account__login register">

                            <div class="account__login--header mb-25">
                                <h2 class="account__login--header__title h3 mb-10">Đổi mật khẩu</h2>
                                <p class="account__login--header__desc"></p>
                            </div>
                            <div class="account__login--inner">
                                <input class="account__login--input" placeholder="Mật khẩu cũ" type="password" name="MatKhauCu">
                                <input class="account__login--input" placeholder="Mật khẩu mới" type="password" name="MatKhauMoi">
                                <button class="account__login--btn primary__btn mb-10" type="submit" name="doimatkhau">Gửi</button>
                                <p class="account__login--signup__text">Không khả dụng ? <button type="submit"><a href="index.php?page=register">Đăng ký mới</a></button></p>
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