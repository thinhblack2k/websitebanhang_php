<?php
include ('../../admin/config/config.php');
$id=$_GET['IdDD'];
$sql_delete_chitiet_dondat = "DELETE FROM tblchitietdd WHERE IdDD='".$id."';";
$sql_delete_dondat = "DELETE FROM tbldondat WHERE IdDD='".$id."'";
mysqli_query($mysqli,$sql_delete_chitiet_dondat);
mysqli_query($mysqli,$sql_delete_dondat);

header('Location:../../index.php?page=myorder');
?>
