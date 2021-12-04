<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng điều khiển</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <?php
        include('connect.php');
    ?>
    <div class="flex">
        <!-- menu-start -->
        <div class="w-1/5 min-h-screen bg-blue-400 text-white">
            <div class="mx-6">
                <div class="text-center text-4xl mt-10 space-x-6">
                     Xin chào
                    <?php
                        session_start();
                        echo $_SESSION['username'];
                    ?>
                </div>
                <hr class="my-6 h-2">
                <!-- List-category-start -->
                <div>
                    <div class="flex items-center space-x-2 mb-2 mt-6  hover:text-yellow-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                        <h1 class="text-2xl"> <a href="category.php"> Danh mục sản phẩm</a></h1>
                    </div>
                    
                    <div class="ml-8 mr-3">
                        <?php
                            $sql_category = mysqli_query($con,"SELECT * FROM tbl_category ORDER BY category_id DESC ");
                            while( $row_category = mysqli_fetch_array($sql_category)){
                        ?>
                        <div class="flex space-x-1 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                            <h2 class="hover:text-yellow-800"><a href="product.php?id=<?php echo $row_category['category_id'] ?>"><?php echo $row_category['category_name'] ?></a></h2>
                        </div>
                        <hr class="my-2">
                        <?php
                            }
                        ?>
                        
                    </div>
                </div>
                <!-- List-category-end -->
                 <!-- Customer -->
                 <div>
                    <div class="flex items-center space-x-2 mb-2 mt-6  hover:text-yellow-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                        <h1 class="text-2xl">  Khách hàng</h1>
                    </div>
                    <div class="ml-8 mr-3">
                        <div class="flex space-x-1 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                                <h2 class="hover:text-yellow-800"><a href="custommer.php">Quản lí khách hàng</a></h2>
                        </div>
                        <hr class="my-2">
                    </div>
                        
                </div>
                <!-- Customer-end -->
            </div>
        </div>
        <!-- menu-end -->
        <!-- content -->
        <div class="w-4/5 ml-10">
            <!-- top-content-start -->
            <div class="flex items-center justify-between  mt-10 ">
                <div class=" flex items-center text-gray-800 text-4xl text-gray-800 space-x-2">
                   
                    <h1 class="font-semibold">
                        <a href="dashbroad.php">Trang quản lí admin</a>
                        
                    </h1>
                </div>
                <div class="flex space-x-2 text-xl text-gray-800 mr-10 bg-yellow-400 py-2 px-4 rounded-full shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7a4 4 0 11-8 0 4 4 0 018 0zM9 14a6 6 0 00-6 6v1h12v-1a6 6 0 00-6-6zM21 12h-6" />
                    </svg>
                   <a href="logout.php"> Đăng xuất</a>
                </div>
            </div>
            <!-- top-content-end -->
            <!-- top-content-end -->
            <!-- main-content-start -->
            <div class="flex gap-2 items-center w-72 mt-14 text-xl bg-yellow-400 rounded-md py-2 text-gray-50">
                <div class="ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
               Thêm danh mục sản phẩm
            </div>
            <div class="mt-10 ">
                <form method="POST" action="addcategory_submit.php">
                    <label class="text-xl text-gray-600" for="">Tên danh mục</label> <br>
                    <input type="text" name="tendanhmuc" class=" border border-blue-400 w-96 h-10 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Nhập tên danh mục"> <br> <br>
                    <label class="text-xl text-gray-600" for="">Ghi chú</label> <br> 
                    <input type="text" name="ghichu" class=" border border-blue-400 w-96 h-10 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Nhập ghi chú"> 
                    <br>
                    <button type="submit" class="border border-blue-400 py-1 px-4 rounded-full mt-3 hover:bg-blue-400 hover:text-white">Thêm</button>
                   
                </form>
            </div>
            
            <!-- main-content-end -->
        </div>
        <!-- content-end -->
    </div>
   
</body>
</html>