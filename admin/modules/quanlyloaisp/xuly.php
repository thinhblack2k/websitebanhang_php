<?php
include('../../config/config.php');
$tenloai = $_POST['tenloai'];
if (isset($_POST['themloaisp'])) {
    $sql_them = "INSERT INTO tblloaisp(tenloai) VALUE('".$tenloai."')";
    mysqli_query($mysqli, $sql_them);
    header('Location:../../index.php?action=quanlyloaisp&query=them');
}elseif(isset($_POST['sualoaisp'])){
	$sql_update = "UPDATE tblloaisp SET tenloai='".$tenloai."' WHERE IdLoaiSP='$_GET[IdLoaiSP]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlyloaisp&query=them');
}else{
	$id=$_GET['IdLoaiSP'];
	$sql_delete = "DELETE FROM tblloaisp WHERE IdLoaiSP='".$id."'";
	mysqli_query($mysqli,$sql_delete);
	header('Location:../../index.php?action=quanlyloaisp&query=them');
}
?>