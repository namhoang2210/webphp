<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng điều khiển</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
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
            <?php
                $id = $_GET['id'];
                $sql_category_name = mysqli_query($con,"SELECT * FROM tbl_category WHERE category_id = '$id' ");
                $row_category_name = mysqli_fetch_array($sql_category_name);
                
            ?>            
            <div class="flex justify-between mt-14 items-center">
                <div class="flex items-center gap-2 bg-red-400 text-xl rounded-md py-2 text-gray-50 px-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>                   
                    <?php echo $row_category_name['category_name'] ?>
                </div>
                <button class="flex gap-2 items-center px-2 mr-8  text-xl bg-yellow-400 rounded-md py-2 text-gray-50 hover:bg-yellow-500" onclick="location.href='addproduct.php?id=<?php echo $id ?>'">
                    <div class="ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                Thêm sản phẩm
                </button>
            </div>
            <div class="mt-10">
                <table class="border-t-4 border-blue-400 w-4/5 mx-auto">
                    <thead class="text-center">
                        <tr>
                            <td class="border border-blue-100">STT</td>
                            <td class="border border-blue-100">Tên sản phẩm</td>
                            <td class="border w-40 border-blue-100">Hình ảnh</td>
                            <td class="border border-blue-100">Giá (vnd)</td>
                            <td class="border border-blue-100">Số lượng</td>
                            <td class="border border-blue-100">Tình trạng</td>
                            <td class="border border-blue-100">Sửa</td>
                            <td class="border border-blue-100">Xóa</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $sql_product_table = mysqli_query($con,"SELECT * FROM tbl_product WHERE product_category='$id' ORDER BY product_id DESC ");
                            $i=0;
                            while( $row_product_table = mysqli_fetch_array($sql_product_table)){
                                $i=$i +1;
                        ?>
                        <tr>
                            <td class="border border-blue-100 text-center px-2"><?php echo $i ?></td>
                            <td class="border border-blue-100 px-2  text-center"><?php echo $row_product_table['product_name'] ?></td>
                            <td  class="border border-blue-100 px-2">
                                <img width=""  src="upload/<?php echo $row_product_table['product_img'] ?>" alt=""> </td>
                            <td class="border border-blue-100 px-2 text-center"><?php echo number_format($row_product_table['product_price']) ?></td>
                            <td class="border border-blue-100 px-2 text-center"><?php echo $row_product_table['product_nums'] ?></td>
                            <td class="border border-blue-100 px-2 text-center">
                                <?php
                                if ($row_product_table['product_nums'] > 10){
                                    echo("Còn hàng");    
                                } else{
                                    echo("Sắp hết hàng");
                                }
                                ?>
                            </td>
                            <td class=" border border-blue-100 px-2 ">
                                <a href="editproduct.php?id=<?php echo $row_product_table['product_id'] ?>&ct=<?php echo $id?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6  text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                                </a>
                                
                            </td>
                            <td class=" border border-blue-100 px-2">
                                <a href="deleteproduct_submit.php?id=<?php echo $row_product_table['product_id'] ?>&ct=<?php echo $id?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                                </a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- main-content-end -->
        </div>
        <!-- content-end -->
    </div>
</body>
</html>