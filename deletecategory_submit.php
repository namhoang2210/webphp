<?php
    include('connect.php');
    $id = $_GET['id'];
    
    $sql_deletecategory = mysqli_query($con,"DELETE FROM tbl_category WHERE category_id = '$id'");
    header('Location:category.php');                                        
   
?>