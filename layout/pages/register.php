<?php
	if(isset($_POST['dangky'])) {
		$Gmail = $_POST['Gmail'];
		$TenTK = $_POST['TenTK'];
		$MatKhau = md5($_POST['MatKhau']);
		$SDT = $_POST['SDT'];
		$DiaChi = $_POST['DiaChi'];
		$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbltaikhoan(Gmail,TenTK,MatKhau,LoaiTK,SDT,DiaChi) VALUE('".$Gmail."','".$TenTK."','".$MatKhau."','user','".$SDT."','".$DiaChi."')");
		if($sql_dangky){
			echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
			$_SESSION['dangky'] = $TenTK;
			$_SESSION['Gmail'] = $Gmail;
            $_SESSION['DiaChi'] = $DiaChi;
			echo "<script> window.location.href='index.php?page=cart';</script>";
		}
	}
?>
<!-- Start breadcrumb section -->
<section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25">Đăng ký</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.php">Trang chủ</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">Đăng ký</span></li>
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
                <form action="" method="POST">
                    <div class="login__section--inner">
                        <div class="row row-cols-md-2 row-cols-1">
                        <div class="col">
                                <div class="account__login register">
                                    <div class="account__login--header mb-25">
                                        <h2 class="account__login--header__title h3 mb-10">Tạo một tài khoản</h2>
                                        <p class="account__login--header__desc">Đăng ký ngay nếu bạn là một khách hàng</p>
                                    </div>
                                    <div class="account__login--inner">
                                        <input class="account__login--input" placeholder="Họ và tên" type="text" name="TenTK">
                                        <input class="account__login--input" placeholder="Email" type="text" name="Gmail">
                                        <input class="account__login--input" placeholder="Mật khẩu" type="password" name="MatKhau">
                                        <input class="account__login--input" placeholder="Địa chỉ" type="text" name="DiaChi">
                                        <input class="account__login--input" placeholder="Số điện thoại" type="text" name="SDT">
                                        <button class="account__login--btn primary__btn mb-10" type="submit" name="dangky">Đăng ký thành viên</button>
                                        <p class="account__login--signup__text">Tôi đã có tài khoản <button type="submit"><a href="index.php?page=login">Đăng nhập ngay</a></button></p>
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