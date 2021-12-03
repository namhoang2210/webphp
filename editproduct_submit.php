<?php
 include('connect.php');
    $id = $_GET['id'];
    $ct = $_GET['ct'];
    $product_name =$_POST['product_name'];
    $product_desc = $_POST['product_desc'];
    $product_price = $_POST['product_price'];
    $product_nums = $_POST['product_nums'];
    $sql_editcategory = mysqli_query($con,"UPDATE tbl_product 
                                            SET product_name = '$product_name', product_desc = '$product_desc', product_price = '$product_price', product_nums ='$product_nums'
                                            WHERE product_id = '$id' ");
                                            
    header("Location:product.php?id=$ct");   
?>