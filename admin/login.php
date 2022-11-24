<?php
session_start();
include('config/config.php');
if (isset($_POST['dangnhap'])) {
  $Gmail = $_POST['Gmail'];
  $MatKhau = md5($_POST['MatKhau']);
  $sql = "SELECT * FROM tbltaikhoan WHERE Gmail='" . $Gmail . "' AND MatKhau='" . $MatKhau . "' AND LoaiTK='admin'  LIMIT 1";
  $row = mysqli_query($mysqli, $sql);
  $count = mysqli_num_rows($row);
  if ($count > 0) {
    $row_data = mysqli_fetch_array($row);
    $_SESSION['TenTK'] = $row_data['TenTK'];
    $_SESSION['dangnhap'] = $Gmail;
    header("Location:index.php");
  } else {
    echo "<script>alert('Mật khẩu hoặc Email sai ,vui lòng nhập lại.');</script>";
    header("Location:login.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
  <link rel="stylesheet" href="css/loginstyle.css">
</head>

<body>

  <!-- partial:index.partial.html -->
  <section class='login' id='login'>
    <p class='msg'>LOGIN ADMIN</p>
    <div class='form'>
      <form action="" autocomplete="off" method="POST">
        <input type="email" name="Gmail" placeholder='email' class='text' id='username' required><br>
        <input type="password" name="MatKhau" placeholder='••••••••••••••' class='password'><br>
        <div class="btn">
          <button name="dangnhap" type="submit" class='btn-login' id='do-login'>Login</button>
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