<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="public/img/logo.jpg">
    <title>Virtual Phone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>
    <div id="wapper">


        <?php include 'layouts/header_user.php' ?>


        <!-- end header -->

        <div id="banner">
            <div class="slide">
                <div class="left">
                    <a href="home.php"><img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:690:300/q:80/plain/https://dashboard.cellphones.com.vn/storage/sliding-iphone15-moban-full--ver2.png" alt=""></a>
                </div>

            </div>
            <nav id="nav_banner">
                <div class="item_nav">
                    <img src="public/img/giaohang.png" alt="">
                    <h4>GIAO HÀNG TOÀN QUỐC</h4>
                    <p>Vận chuyển khắp Việt Nam</p>
                </div>
                <div class="item_nav">
                    <img src="public/img/thanhtoan.png" alt="">
                    <h4>THANH TOÁN KHI NHẬN HÀNG</h4>
                    <p>Nhận hàng tại nhà rồi thanh toán</p>
                </div>
                <div class="item_nav">
                    <img src="public/img/baohanh.png" alt="">
                    <h4>BẢO HÀNH DÀI HẠN</h4>
                    <p>Bảo hành lên đến 60 ngày</p>
                </div>
                <div class="item_nav">
                    <img src="public/img/doihang.png" alt="">
                    <h4>ĐỔI HÀNG DỄ DÀNG</h4>
                    <p>Đổi hàng thoải mái trong 30 ngày</p>
                </div>
            </nav>
        </div>

        <!-- end banner -->
        <h2 id="h1_content">TOP SẢN PHẨM MỚI NHẤT</h2>

        <section id="content">

            <?php include 'models/db.php';
            $sql = "select * from products where deleted = 1 ORDER BY ngay_nhap DESC LIMIT 8";
            $kq = $conn->query($sql);
            foreach ($kq as $key => $rows) {
            ?>
                <article id="item_content">
                    <a href="?url=chitietsanpham&ma_hh=<?php echo $rows['ma_hh'] ?>">
                        <img src="<?php echo $rows['hinh'] ?>" alt="">
                        <h5><?php echo $rows['ten_hh'] ?></h5>
                        <div class="price">
                            <div class="old-price">
                                <p><?php echo number_format($rows['don_gia'] * ($rows['giam_gia']))  ?>đ</p>
                            </div>
                            <div class="new-price">
                                <p><?php echo number_format($rows['don_gia'])  ?>đ</p>
                            </div>
                        </div>
                    </a>
                </article>
            <?php
            }
            ?>

        </section>
        <h2 id="h1_content">TOP SẢN PHẨM NỔI BẬT</h2>
        <section id="content">

            <?php include 'models/db.php';
            $sql = "select * from products where deleted = 1 ORDER BY so_luot_xem DESC LIMIT 8 ";
            $kq = $conn->query($sql);
            foreach ($kq as $key => $rows) {
            ?>
                <article id="item_content">
                    <a href="?url=chitietsanpham&ma_hh=<?php echo $rows['ma_hh'] ?>">
                        <img src="<?php echo $rows['hinh'] ?>" alt="">
                        <h5><?php echo $rows['ten_hh'] ?></h5>
                        <div class="price">
                            <div class="old-price">
                                <p><?php echo number_format($rows['don_gia'] * ($rows['giam_gia']))  ?>đ</p>
                            </div>
                            <div class="new-price">
                                <p><?php echo number_format($rows['don_gia'])  ?>đ</p>
                            </div>
                        </div>
                    </a>
                </article>
            <?php
            }
            ?>
        </section>
        <h2 id="h1_content">CÁC SẢN PHẨM ĐẶC BIỆT</h2>
        <section id="content">

            <?php include 'models/db.php';
            $sql = "select * from products   where deleted = 1 and dac_biet = 'Đặc Biệt' LIMIT 8 ";
            $kq = $conn->query($sql);
            foreach ($kq as $key => $rows) {
            ?>
                <article id="item_content">
                    <a href="?url=chitietsanpham&ma_hh=<?php echo $rows['ma_hh'] ?>">
                        <img src="<?php echo $rows['hinh'] ?>" alt="">
                        <h5><?php echo $rows['ten_hh'] ?></h5>
                        <div class="price">
                            <div class="old-price">
                                <p><?php echo number_format($rows['don_gia'] * ($rows['giam_gia']))  ?>đ</p>
                            </div>
                            <div class="new-price">
                                <p><?php echo number_format($rows['don_gia'])  ?>đ</p>
                            </div>
                        </div>
                    </a>
                </article>
            <?php
            }
            ?>
        </section>

        <section id="Xshop">
            <section class="Xshop_left">
                <p>Hơn 6 năm phát triển, XPHONE luôn mang đến những chiếc điện thoại chất lượng tốt nhất với giá cả hợp lí nhất
                    đến tay người tiêu dùng với hệ thống cửa hàng Số 1 Hà Nội và bán online khắp Việt Nam.</p>
                <h1>1 234 567</h1>
                <p>Số Sản Phẩm Đã Bán</p>
                <h1>543 212</h1>
                <p>Khách Hàng Đã Mua</p>
                <img src="https://cdn.tgdd.vn/Files/2023/09/24/1548837/ava2-240923-135302-600x400.jpg" alt="">
                <img width="480px" height="300px" src="https://cdn.tgdd.vn/Files/2023/10/20/1552532/12-201023-220955-800-resize.jpg" alt="">
                <img width="480px" height="300px" src="https://cdn.tgdd.vn/Files/2023/10/20/1552532/1-201023-214315-800-resize.jpg" alt="">
            </section>

            <section class="Xshop_right">
                <h1>TIN TỨC MỚI NHẤT</h1>
                <article id="tintuc">
                    <a href="#"><img src="public/img/vivo.jpg" alt=""></a>
                    <a href="#">
                        <h3>Vivo Y78t ra mắt: Trang bị chip Snapdragon mạnh mẽ, viên pin lên tới 6.000 mAh</h3>
                    </a>
                    <a href="#">
                        <p> XEM CHI TIẾT >></p>
                    </a>
                </article>
                <article id="tintuc">
                    <a href="#"><img src="https://cdn.tgdd.vn/Files/2023/10/17/1552113/galaxy-s23-ultra-1002-181023-094023-800-resize.jpg" alt=""></a>
                    <a href="#">
                        <h3>Samsung Galaxy S series giảm sâu cực máu lên đến 14 triệu cho ngày 20/10</h3>
                    </a>
                    <a href="#">
                        <p> XEM CHI TIẾT >></p>
                    </a>
                </article>
                <article id="tintuc">
                    <a href="#"><img src="https://cdn.tgdd.vn/Files/2023/10/21/1552582/googlephotosdangthunghiemtinhnangtudongsaoluuanhraw-211023-104501-800-resize.jpg" alt=""></a>
                    <a href="#">
                        <h3>Google Photos cập nhật một thay đổi quan trọng về cách sao lưu ảnh RAW</h3>
                    </a>
                    <a href="#">
                        <p> XEM CHI TIẾT >></p>
                    </a>
                </article>
            </section>
        </section>

        <?php include 'views/layouts/footer_xphone.php' ?>
    </div>
</body>

</html>