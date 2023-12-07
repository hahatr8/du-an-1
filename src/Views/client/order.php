<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cart</title>


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

        <!-- MDB -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css">

        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- MDB JS -->

        <style>
            body {
                background: #6a11cb;
                /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
                /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
                /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            }
        </style>
    </head>

    <body>

        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="/">
                    <img class="logo" src="/assets/client//assets/img/logo.jpg">
                </a>
                <a class="navbar-brand" href="javascript:void(0)"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Trang Chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Thông Tin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Liên Hệ</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php $username = $_SESSION['tk_user'];
                                echo "$username" ?>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Tài khoản của tôi</a>
                                <form action="" method="post">
                                    <button class="dropdown-item" type="submit" name="btn-order">Đơn Mua</button>
                                </form>
                                <form method="post">
                                    <button class="dropdown-item" type="submit" name="logout">Đăng Xuất</button>
                                </form>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>


        <section class="h-100 gradient-custom">
            <div class="container py-5">
                <div class="row d-flex justify-content-center my-4">
                    <div class="col-md-8">
                        <div class="card mb-4">
                            <div class="card-header py-3">
                                <h5 class="mb-0">Đơn Hàng Của Bạn</h5>
                            </div>
                            <div>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Mã đơn hàng</th>
                                            <th>Ngày đặt Hàng</th>
                                            <th>Trạng Thái</th>
                                            <th>Tổng Giá Trị</th>
                                            <th>Thao Tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($orders as $order): ?>
                                            <tr>
                                                <td><?php echo $order['id']; ?></td>
                                                <td><?php echo $order['ngaydathang']; ?></td>
                                                <td>
                                                    <?php
                                                    $trangThaiText = [
                                                        0 => "Chờ xác nhận",
                                                        1 => "Đã  Xác Nhận",
                                                        2 => "Đang Giao",
                                                        3 => "Giao Thành Công"
                                                    ];
                                                    $trangThai = isset($trangThaiText[$order['trangthai']]) ? $trangThaiText[$order['trangthai']] : "Trạng thái không xác định";
                                                    echo $trangThai;
                                                    ?>
                                                </td>
                                                <td><?php echo $order['tongtien']; ?> VNĐ</td>
                                                <td>
                                                    <form action="/order/showOrderDetails" method="get">
                                                        <input type="hidden" name="id_dh"
                                                            value="<?php echo $order['id']; ?>">
                                                        <button type="submit">Xem Chi Tiết</button>
                                                    </form>

                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>
    </body>

</html>