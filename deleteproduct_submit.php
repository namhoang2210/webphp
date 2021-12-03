<?php
    include('connect.php');
    $id = $_GET['id'];
    $ct = $_GET['ct'];
    $sql_deletecategory = mysqli_query($con,"DELETE FROM tbl_product WHERE product_id = '$id'");
    header("Location:product.php?id=$ct");                                        
   
?>