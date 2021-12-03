<?php
$con = mysqli_connect("localhost","root","","baitap3");

// Check connection
if (mysqli_connect_errno()) {
  echo "Không thể kết nối " . mysqli_connect_error();
  exit();
}
// set utf8
mysqli_set_charset($con,"utf8");

?>