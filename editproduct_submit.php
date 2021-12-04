<?php
 include('connect.php');
    $id = $_GET['id'];
    $ct = $_GET['ct'];
    $product_name =$_POST['product_name'];
    $product_desc = $_POST['product_desc'];
    $product_price = $_POST['product_price'];
    $product_nums = $_POST['product_nums'];
    //upload hình ảnh
    $product_img = basename( $_FILES['product_img']['name']);
    $target_dir = "upload/";
    $target_file = $target_dir . $product_img;
    move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file);
    $sql_editcategory = mysqli_query($con,"UPDATE tbl_product 
                                            SET product_name = '$product_name', product_desc = '$product_desc', product_price = '$product_price', product_nums ='$product_nums', product_img = '$product_img'
                                            WHERE product_id = '$id' ");
                                            
    header("Location:product.php?id=$ct");   
?>