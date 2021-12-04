<?php
    include('connect.php');
        $id = $_GET['id'];
        $product_name =$_POST['product_name'];
        $product_desc = $_POST['product_desc'];
        $product_price = $_POST['product_price'];
        $product_nums = $_POST['product_nums'];
        

       
        //upload hình ảnh
        $product_img = basename( $_FILES['product_img']['name']);
        $target_dir = "upload/";
        $target_file = $target_dir . $product_img;
        move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file);
      
        $addproduct = mysqli_query($con,"INSERT INTO tbl_product (product_name, product_desc, product_category,product_price,product_nums,product_img)
        VALUES (' $product_name', ' $product_desc','$id', '$product_price','$product_nums','$product_img')");

        header("Location:product.php?id=$id");
   
?>