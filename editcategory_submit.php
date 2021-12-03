<?php
    include('connect.php');
    $id = $_GET['id'];
    //sửa danh mục
    if(isset($_POST['tendanhmuc'])){
        $tendanhmuc =$_POST['tendanhmuc'];
        $ghichu = $_POST['ghichu'];
       
    }
    $sql_editcategory = mysqli_query($con,"UPDATE tbl_category 
                                            SET category_name = '$tendanhmuc', category_desc = '$ghichu'
                                            WHERE category_id = '$id' ");
    header('Location:category.php');                                        
   
?>