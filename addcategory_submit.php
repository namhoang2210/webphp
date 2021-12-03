<?php
    include('connect.php');
    //Thêm danh mục
    if(isset($_POST['tendanhmuc'])){
        $tendanhmuc =$_POST['tendanhmuc'];
        $ghichu = $_POST['ghichu'];
        $addcategory = mysqli_query($con,"INSERT INTO tbl_category (category_name, category_desc) VALUES ('$tendanhmuc', '$ghichu')");
    }
   
?>