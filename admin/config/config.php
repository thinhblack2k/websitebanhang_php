<?php
$mysqli = new mysqli("localhost:3307","root","","dbleather");

// Check connection
if ($mysqli->connect_errno) {
  echo "Kết nối mysqli lỗi: " . $mysqli -> connect_error;
  exit();
}
?>