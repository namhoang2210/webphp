<?php
    include('connect.php');
    session_start();
    $username = $_POST['username']; 
    $password = $_POST['password'];
    
    $password = md5($password);
    $sql_login = mysqli_query($con,"SELECT * FROM tbl_user WHERE user_name='$username' AND user_password='$password'");
       
    if(mysqli_num_rows($sql_login) == 0){
           echo "Sai tên đăng nhập";
    }else{
        $_SESSION['username'] = $username;
        $row_login= mysqli_fetch_array($sql_login);
        $_SESSION['admin'] = $row_login['user_admin'];
        if($_SESSION['admin'] == 1){
            header('location:dashbroad.php');
        }elseif($_SESSION['admin'] == 0){
            header('location:trang-chu.php');
        }
    }   
        
       
    
   
?>