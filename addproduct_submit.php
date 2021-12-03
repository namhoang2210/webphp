<?php
    include('connect.php');
        $id = $_GET['id'];
        $product_name =$_POST['product_name'];
        $product_desc = $_POST['product_desc'];
        $product_price = $_POST['product_price'];
        $product_nums = $_POST['product_nums'];
        

        $addproduct = mysqli_query($con,"INSERT INTO tbl_product (product_name, product_desc, product_category,product_price,product_nums)
                                         VALUES (' $product_name', ' $product_desc','$id', '$product_price','$product_nums')");
        header("Location:product.php?id=$id");
   
?>