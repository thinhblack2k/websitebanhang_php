<?php
include('../../config/config.php');
$tenthuonghieu = $_POST['tenthuonghieu'];
if (isset($_POST['themthuonghieu'])) {
    $sql_them = "INSERT INTO tblthuonghieu(TenTH) VALUE('".$tenthuonghieu."')";
    mysqli_query($mysqli, $sql_them);
    header('Location:../../index.php?action=quanlythuonghieu&query=them');
}elseif(isset($_POST['suathuonghieu'])){
	$sql_update = "UPDATE tblthuonghieu SET TenTH='".$tenthuonghieu."' WHERE IdTH='$_GET[IdTH]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlythuonghieu&query=them');
}else{
	$id=$_GET['IdTH'];
	$sql_delete = "DELETE FROM tblthuonghieu WHERE IdTH='".$id."'";
	mysqli_query($mysqli,$sql_delete);
	header('Location:../../index.php?action=quanlythuonghieu&query=them');
}
?>