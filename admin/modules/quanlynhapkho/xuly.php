<?php
session_start();
include('../../config/config.php');
// require('../../mail/sendmail.php');
require('../../../carbon/autoload.php');
use Carbon\Carbon;
use Carbon\CarbonInterval;

$now = Carbon::now('Asia/Ho_Chi_Minh');

$TenSP = $_POST['sp'];
$soluongnhap = $_POST['SoLuongNhap'];

if(isset($_POST['thempnk'])){
	//them
	$insert_pnk = "INSERT INTO tblphieunk(ThoiGian,GmailNV,GmailNCC,TongTien) VALUE('".$now."','thuynguyen@gmail.com','".$id_khachhang."',1,'".$tongtien."')";
	$pnk_query = mysqli_query($mysqli,$insert_pnk);
}


?>