<?php
session_start();
include('../../admin/config/config.php');
// require('../../mail/sendmail.php');
require('../../carbon/autoload.php');

use Carbon\Carbon;
use Carbon\CarbonInterval;

$now = Carbon::now('Asia/Ho_Chi_Minh');

$tongtien = $_SESSION['tongtien'];
$tentaikhoan = $_SESSION['Gmail'];
$sql_donhang_them = "INSERT INTO tbldondat(ThoiGian, GmailKH, GmailNV, TongTien, TinhTrang) VALUE ('" . $now . "', '" . $tentaikhoan . "', '', '" . $tongtien . "', '0')";
$query_donhang_them = mysqli_query($mysqli, $sql_donhang_them);
$IdDD = mysqli_insert_id($mysqli);
$_SESSION['MaDD'] = $IdDD;
if ($sql_donhang_them) {
    //them gio hang chi tiet
    foreach ($_SESSION['cart'] as $key => $value) {
        $IdSP = $value['id'];
        $soluong = $value['SoLuong'];
        $sql_chitietdondat = "INSERT INTO tblchitietdd(IdSP,IdDD,SoLuong) VALUE('" . $IdSP . "','" . $IdDD . "','" . $soluong . "')";
        mysqli_query($mysqli, $sql_chitietdondat);

        // Giảm số lượng sản phẩm theo đơn đặt
        $sql_lietke_sanpham_tatca = "SELECT * FROM tblsanpham,tblloaisp WHERE tblsanpham.IdLoaiSP = tblloaisp.IdLoaiSP ORDER BY tblsanpham.IdLoaiSP DESC";
        $query_lietke_sanpham_tatca = mysqli_query($mysqli, $sql_lietke_sanpham_tatca);
        $row_data = mysqli_fetch_array($query_lietke_sanpham_tatca);

        $soluongNew = $row_data['SoLuong'] - $soluong;

        $sql_update_slsp = "UPDATE tblsanpham SET SoLuong = '$soluongNew' WHERE IdSP = '$IdSP'";
        mysqli_query($mysqli, $sql_update_slsp);
    }
    unset($_SESSION['cart']);
    echo "<script>alert('Đặt hàng thành công');</script>";
    header('Location:../../index.php?page=myorder');
}
?>
