<?php
include('../../config/config.php');

$TenSP	 = $_POST['TenSP'];
$loaisp = $_POST['loaisp'];
$thuonghieu = $_POST['thuonghieu'];
$Mau = $_POST['Mau'];
$KichThuoc = $_POST['KichThuoc'];
$SoLuong = $_POST['SoLuong'];
$GiaNhap = $_POST['GiaNhap'];
$GiaBan = $_POST['GiaBan'];
$KhuyenMai = $_POST['KhuyenMai'];
//xuly hinh anh
$HinhAnh = $_FILES['HinhAnh']['name'];
$HinhAnh_tmp = $_FILES['HinhAnh']['tmp_name'];
$HinhAnh = time().'_'.$HinhAnh;
$Mota = $_POST['Mota'];
$TinhTrang = 0;


if(isset($_POST['themsanpham'])){
	//them
	$sql_them = "INSERT INTO tblsanpham(TenSP,IdTH,IdLoaiSP,Mau,KichThuoc,SoLuong,GiaNhap,GiaBan,KhuyenMai,HinhAnh,Mota) VALUE('".$TenSP."','".$thuonghieu."','".$loaisp."','".$Mau."','".$KichThuoc."','".$SoLuong."','".$GiaNhap."','".$GiaBan."','".$KhuyenMai."','".$HinhAnh."','".$Mota."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($HinhAnh_tmp,'uploads/'.$HinhAnh);
	header('Location:../../index.php?action=quanlysanpham&query=lietke');
}elseif(isset($_POST['suasanpham'])){
	//sua
	if(!empty($_FILES['HinhAnh']['name'])){
		move_uploaded_file($HinhAnh_tmp,'uploads/'.$HinhAnh);
		
		$sql_update = "UPDATE tblsanpham SET TenSP	='".$TenSP	."',IdTH='".$thuonghieu."',IdLoaiSP='".$loaisp."',Mau='".$Mau."',KichThuoc='".$KichThuoc."',SoLuong='".$SoLuong."',GiaNhap='".$GiaNhap."',GiaBan='".$GiaBan."','".$KhuyenMai."',HinhAnh='".$HinhAnh."',Mota='".$Mota."' WHERE IdSP='$_GET[IdSP]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM tblsanpham WHERE IdSP = '$_GET[IdSP]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['HinhAnh']);
		}

	}else{
		$sql_update = "UPDATE tblsanpham SET TenSP	='".$TenSP	."',IdTH='".$thuonghieu."',IdLoaiSP='".$loaisp."',Mau='".$Mau."',KichThuoc='".$KichThuoc."',SoLuong='".$SoLuong."',GiaNhap='".$GiaNhap."',GiaBan='".$GiaBan."',Mota='".$Mota."' WHERE IdSP='$_GET[IdSP]'";
	}
	mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlysanpham&query=lietke');
}else{
	$id=$_GET['IdSP'];
	$sql = "SELECT * FROM tblsanpham WHERE IdSP = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['HinhAnh']);
	}
	$sql_xoa = "DELETE FROM tblsanpham WHERE IdSP='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlysanpham&query=lietke');
}

?>