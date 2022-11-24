<?php
session_start();
include('config/config.php');
$Gmail = $_SESSION['dangnhap'];
$TenTK = $_SESSION['TenTK'];
// $sql_taikhoan = "SELECT * FROM tbltaikhoan WHERE Gmail='thinh191204033gmail.com' LIMIT 1";
// $query_taikhoan = mysqli_query($mysqli, $sql_taikhoan);
?>
<?php

if (isset($_POST['doimatkhau'])) {
  $TenNguoiDung = $_POST['TenNguoiDung'];
  $MatKhauCu = md5($_POST['MatKhauCu']);
  $MatKhauMoi = md5($_POST['MatKhauMoi']);
  $sql = "SELECT * FROM tbltaikhoan WHERE Gmail='" . $Gmail . "' AND MatKhau='" . $MatKhauCu . "' LIMIT 1";
  $row = mysqli_query($mysqli, $sql);
  $count = mysqli_num_rows($row);
  if ($count > 0) {
    $sql_update = "UPDATE tbltaikhoan SET TenTK = '" . $TenNguoiDung . "', Matkhau = '" . $MatKhauMoi . "' WHERE Gmail='" . $Gmail . "' ";
    $query_update = mysqli_query($mysqli, $sql_update);
    unset($_SESSION['dangnhap']);
    unset($_SESSION['TenTK']);
    echo "<script>alert('Đã lưu lại mật khẩu mới vui lòng đăng nhập lại');</script>";
    header("Location:index.php");
    
  } else {
    echo "<script>alert('Mật khẩu cũ không đúng vui lòng nhập lại');</script>";
    header("Location:setpass.php");
    
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Đổi mật khẩu</title>
  <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
  <link rel="stylesheet" href="css/loginstyle.css">
</head>

<body>

  <!-- partial:index.partial.html -->
  <section class='login' id='login'>
    <p class='msg'>THAY ĐỔI MẬT KHẨU</p>
    <div class='form'>
      <form action="" autocomplete="off" method="POST">
        <input type="text" style="border: none; background: none;box-shadow: 0px 2px 0px 0px white;width: 100%;color: white;font-size: 1em;outline: none;" name="TenNguoiDung" placeholder='Tên người dùng' class='nameuser' id='username' value="<?php echo $TenTK ?>"><br>
        <input type="password" name="MatKhauCu" placeholder='mật khẩu cũ' class='password'><br>
        <input type="password" name="MatKhauMoi" placeholder='mật khẩu mới' class='password'><br>
        <div class="btn">
          <button name="doimatkhau" type="submit" class='btn-login' id='do-login'>Lưu</button>
        </div>
      </form>
    </div>
  </section>

  <!-- all js here -->
  <!-- jquery latest version -->
  <script src="../js/vendor/jquery-1.12.0.min.js"></script>
  <!-- bootstrap js -->
  <script src="../js/bootstrap.min.js"></script>
  <!-- owl.carousel js -->
  <script src="../js/owl.carousel.min.js"></script>
  <!-- meanmenu js -->
  <script src="../js/jquery.meanmenu.js"></script>
  <!-- Nivo slider js  -->
  <script src="../lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="../lib/home.js" type="text/javascript"></script>
  <!-- count down js  -->
  <script src="../js/jquery.countdown.js"></script>
  <!-- jquery-ui js -->
  <script src="../js/jquery-ui.min.js"></script>
  <!-- wow js -->
  <script src="../js/wow.min.js"></script>
  <!-- plugins js -->
  <script src="../js/plugins.js"></script>
  <!-- main js -->
  <script src="../js/main.js"></script>

</body>

</html>