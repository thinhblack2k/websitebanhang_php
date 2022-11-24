<?php
include('../../admin/config/config.php');
session_start();
$gmail = $_SESSION['Gmail'];
$TenTK = $_POST['TenTK'];
$SDT = $_POST['SDT'];
$DiaChi = $_POST['DiaChi'];
if (isset($_POST['thaydoithongtin'])) {
    $sql_update = "UPDATE `tbltaikhoan` SET `TenTK`='" . $TenTK . "',`DiaChi`='" . $DiaChi . "',`SDT`='" . $SDT . "' WHERE Gmail = '" . $gmail . "'";
    mysqli_query($mysqli,$sql_update);
    header('Location:../../index.php?page=myaddress');
}
?>
