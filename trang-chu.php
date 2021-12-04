<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToBe Baby Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
</head>

<body>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        <div class="jumbotron text-center">
            
                <?php
                session_start();

                ?>
                <div>
                    <h1>ToBé Baby Store</h1>
                    <p>Thế giới đồ cho bé</p>
                    Xin chào <?php echo $_SESSION['username']?> <br>
                    <button type="button" class="btn btn-warning"  onclick="location.href='logout.php'">Đăng xuất</button>
                </div>

                
            
        </div>

        <div id="about" class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <h1>ToBé Baby Store </h1>
                    <h4>Với phương châm uy tín đặt lên hàng đầu, chúng tôi cam kết hàng chính hãng, giá cả cạnh tranh,
                        cam kết về chất lượng nên bạn hoàn toàn có thể yên tâm khi đặt hàng tại ToBé Baby Store của
                        chúng
                        tôi.</h4>
                    <h4>Hiện tại chúng tôi có cơ sở ở Hà Nội các bạn có thể đến tham khảo và mua trực tiếp các mặt
                        hàng✨✨✨
                    </h4>
                    <h4>Ship hàng toàn quốc. Nhận hàng và thanh toán tại nhà </h4>
                    <h4> Hân Hạnh Phục Vụ Quý Khách 🤗 </h4>
                    <br>

                </div>

                <div class="slideanim col-sm-4">
                    <img width="300px" src="image/a9e5b84c08b7b2367253f4592b31b9c0-removebg-preview.png" alt="">
                </div>
            </div>
        </div>


        <div id="services" class="container-fluid ">
            <h2>Danh mục cửa hàng</h2>
            <div class="slideanim row">
                <div class="col-sm-2 text-center">
                    <img height="150px" src="image/image-removebg-preview (2)a.png" alt="">
                    <h4>Đồ dùng phòng tắm & chăm sóc cho bé</h4>
                </div>
                <div class="col-sm-2 text-center">
                    <img height="150px" src="image/bbb.png" alt="">
                    <h4>Đồ dùng ăn dặm cho bé</h4>
                </div>
                <div class="col-sm-2 text-center">
                    <img height="150px" src="image/aaa.png" alt="">
                    <h4>Đồ dùng du lịch</h4>
                </div>
                <div class="col-sm-2 text-center">
                    <img height="150px" src="image/image-removebg-preview (4)d.png" alt="">
                    <h4>Vật tư y tế</h4>
                </div>
                <div class="col-sm-4 text-center">
                    <br>
                    <br>
                    <span class="glyphicon glyphicon-chevron-right logo-small"></span>
                    <h5><a href="">Xem thêm...</a> </h5>
                </div>
            </div>
        </div>


        <div id="portfolio" class="container-fluid text-center ">
            <h2>Chất lượng dịch vụ</h2>
            <h4>Trải nghiệm mang lại cho khách hàng</h4>
            <br>
            <div class="slideanim row">
                <div class="col-sm-6">
                    <img width="250px" src="image/image-removebg-preview.png" alt="">

                </div>
                <div class="col-sm-6">
                    <img width="250px" src="image/image-removebg-preview(1).png" alt="">

                </div>

            </div>
            <br><br>
            <div class="slideanim row">
                <div class="col-sm-6">
                    <img width="250px" src="image/image-removebg-preview (2).png" alt="">

                </div>
                <div class="col-sm-6">
                    <img width="250px" src="image/image-removebg-preview (3).png" alt="">

                </div>

            </div>
        </div>

        <div id="sanpham" class="container-fluid text-center bg-grey">
            <h2>SẢN PHẨM BÁN CHẠY</h2>
            <h4>🔥🔥🔥SẢN PHẨM SIÊU HOT 🔥🔥🔥</h4>
            <div class="slideanim row text-center">
                <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="image/aabd93c0a44ff7d0071ee9acc83b2dfb_tn.jfif" alt="Paris">
                        <p><strong>Nhiệt kế hồng ngoại</strong></p>
                        <p>Nhiệt kế hồng ngoại Tobé cho bé hàng chính hãng cao cấp</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="image/b7aa1a23241881b6659ce67dfd624bda_tn.jfif" alt="New York">
                        <p><strong>Yếm ăn dặm ToBé </strong></p>
                        <p>Chất liệu silicone dẻo cao cấp, có máng hứng tránh rơi vãi thức ăn</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="image/b7aa1a23241881b6659ce67dfd624bda_tn.jfif" alt="New York">
                        <p><strong>Hộp đựng sữa</strong></p>
                        <p>Chất liệu silicone dẻo cao cấp, có máng hứng tránh rơi vãi thức ăn</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="image/c2ab7ef883acabac64a32ecfd8b18ba4_tn.jfif" alt="San Francisco">
                        <p><strong>Bộ bấm móng tay ToBé</strong></p>
                        <p>Bộ Bấm Móng Tay 4 Chi Tiết TOBÉ hàng chính hãng cho bé</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slideanim container-fluid">
            <div class="row">
                <div class=" col-sm-2">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><span class="glyphicon glyphicon-list"></span> Danh mục sản phẩm</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Sản phẩm
                                </td>
                            </tr>
                            <tr>
                                <td>Xe tập đi, xe đẩy, xe thăng bằng</td>
                            </tr>
                            <tr>
                                <td>Sổ & giấy các loại</td>
                            </tr>
                            <tr>
                                <td>Đồ dùng phòng tắm cho bé</td>
                            </tr>
                            <tr>
                                <td>Vật tư y tế</td>
                            </tr>
                            <tr>
                                <td>Đồ dùng ăn dặm cho bé</td>
                            </tr>
                            <tr>
                                <td>Đồ dùng du lịch cho bé</td>
                            </tr>
                            <tr>
                                <td>Đang giảm giá</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-9">
                    Sắp xếp theo
                    <button type="button" class="btn">Phổ biến</button>
                    <button type="button" class="btn">Mới nhất</button>
                    <button type="button" class="btn">Bán chạy</button>
                    <button type="button" class="btn">Giá bán<span
                            class="glyphicon glyphicon-chevron-down "></span></button>
                    <br>
                    <br>

                    <div class="row text-center">
                        <div class="col-sm-2">
                            <div class="thumbnail">
                                <img src="image/c2ab7ef883acabac64a32ecfd8b18ba4_tn.jfif" alt="San Francisco">
                                <p><strong>Bộ bấm móng tay ToBé</strong></p>
                                <font color=#f4511e>200.000đ</font>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="thumbnail">
                                <img src="image/c2ab7ef883acabac64a32ecfd8b18ba4_tn.jfif" alt="San Francisco">
                                <p><strong>Bộ bấm móng tay ToBé</strong></p>
                                <font color=#f4511e>200.000đ</font>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="thumbnail">
                                <img src="image/c2ab7ef883acabac64a32ecfd8b18ba4_tn.jfif" alt="San Francisco">
                                <p><strong>Bộ bấm móng tay ToBé</strong></p>
                                <font color=#f4511e>200.000đ</font>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="thumbnail">
                                <img src="image/c2ab7ef883acabac64a32ecfd8b18ba4_tn.jfif" alt="San Francisco">
                                <p><strong>Bộ bấm móng tay ToBé</strong></p>
                                <font color=#f4511e>200.000đ</font>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="thumbnail">
                                <img src="image/c2ab7ef883acabac64a32ecfd8b18ba4_tn.jfif" alt="San Francisco">
                                <p><strong>Bộ bấm móng tay ToBé</strong></p>
                                <font color=#f4511e>200.000đ</font>
                            </div>
                        </div>

                    </div>
                    <div class="row text-center">
                        <div class="col-sm-2">
                            <div class="thumbnail">
                                <img src="image/c2ab7ef883acabac64a32ecfd8b18ba4_tn.jfif" alt="San Francisco">
                                <p><strong>Bộ bấm móng tay ToBé</strong></p>
                                <font color=#f4511e>200.000đ</font>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="thumbnail">
                                <img src="image/c2ab7ef883acabac64a32ecfd8b18ba4_tn.jfif" alt="San Francisco">
                                <p><strong>Bộ bấm móng tay ToBé</strong></p>
                                <font color=#f4511e>200.000đ</font>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="thumbnail">
                                <img src="image/c2ab7ef883acabac64a32ecfd8b18ba4_tn.jfif" alt="San Francisco">
                                <p><strong>Bộ bấm móng tay ToBé</strong></p>
                                <font color=#f4511e>200.000đ</font>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="thumbnail">
                                <img src="image/c2ab7ef883acabac64a32ecfd8b18ba4_tn.jfif" alt="San Francisco">
                                <p><strong>Bộ bấm móng tay ToBé</strong></p>
                                <font color=#f4511e>200.000đ</font>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="thumbnail">
                                <img src="image/c2ab7ef883acabac64a32ecfd8b18ba4_tn.jfif" alt="San Francisco">
                                <p><strong>Bộ bấm móng tay ToBé</strong></p>
                                <font color=#f4511e>200.000đ</font>
                            </div>
                        </div>

                    </div>
                    <div class="row text-center">
                        <div class="col-sm-2">
                            <div class="thumbnail">
                                <img src="image/c2ab7ef883acabac64a32ecfd8b18ba4_tn.jfif" alt="San Francisco">
                                <p><strong>Bộ bấm móng tay ToBé</strong></p>
                                <font color=#f4511e>200.000đ</font>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="thumbnail">
                                <img src="image/c2ab7ef883acabac64a32ecfd8b18ba4_tn.jfif" alt="San Francisco">
                                <p><strong>Bộ bấm móng tay ToBé</strong></p>
                                <font color=#f4511e>200.000đ</font>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="thumbnail">
                                <img src="image/c2ab7ef883acabac64a32ecfd8b18ba4_tn.jfif" alt="San Francisco">
                                <p><strong>Bộ bấm móng tay ToBé</strong></p>
                                <font color=#f4511e>200.000đ</font>
                            </div>
                        </div>


                    </div>

                    <div>
                        <ul class="pagination pagination-sm">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">...</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div id="contact" class="container-fluid ">
            <div class="row">
                <div class="col-sm-3">
                    <h2>Cửa hàng</h2>
                    <h5>Liên hệ</h5>
                    <h5>Giới thiệu</h5>
                    <h5>Câu hỏi thường gặp</h5>
                    <h5>Tuyển dụng</h5>
                    <h5>Blog</h5>
                </div>
                <div class="col-sm-3">
                    <h2>Sản phẩm</h2>
                    <h5>Xe tập đi, xe đẩy, xe thăng bằng</h5>
                    <h5>Sổ & giấy các loại</h5>
                    <h5>Đồ dùng phòng tắm cho bé</h5>
                    <h5>Vật tư y tế</h5>
                    <h5>Đồ dùng ăn dặm cho bé</h5>
                    <h5>Đồ dùng du lịch cho bé</h5>
                </div>
                <div class="col-sm-6 ">
                    <h2 class="text-center">Liên hệ</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Liên hệ với chúng tôi.</p>
                                <h5><span class="glyphicon glyphicon-map-marker"></span> Ha Noi, Viet Nam</h5>
                                <h5><span class="glyphicon glyphicon-phone"></span> +0948900857</h5>
                                <h5><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</h5>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3744.006981808757!2d106.33020521471317!3d20.217030920368025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31360f4db08d1e19%3A0x48199a8649be4bb8!2zSOG6o2kgTmFtLCBI4bqjaSBI4bqtdSwgTmFtIMSQ4buLbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1635569264834!5m2!1svi!2s"
                                    width="300" height="300" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Tên" type="text"
                                        required>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email" type="email"
                                        required>
                                </div>
                            </div>
                            <textarea class="form-control" id="comments" name="comments" placeholder="Bình luận"
                                rows="5"></textarea><br>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <button class="btn btn-default pull-right" type="submit">Gửi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img width="100px" src="image/c.png" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about">Giới thiệu</a></li>
                        <li><a href="#services">Danh mục</a></li>
                        <li><a href="#portfolio">Dịch vụ</a></li>
                        <li><a href="#sanpham">Sản phẩm</a></li>
                        <li><a href="#contact">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <style>
            footer {
                background-color: #1b93fd;
                color: white;
            }

            footer .glyphicon {
                font-size: 20px;
                margin-bottom: 20px;
                color: white;
            }
        </style>

        <footer class="container-fluid text-center">
            <a href="#myPage" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>ToBé Baby Store</p>
        </footer>
        <script>
            $(document).ready(function () {
                // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {

                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 900, function () {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });
            })
            $(window).scroll(function () {
                $(".slideanim").each(function () {
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slide");
                    }
                });
            });
        </script>


    </body>

</html>
