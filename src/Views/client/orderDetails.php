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
        <section class="h-100 gradient-custom custom-section">
            <div class="container py-5">
                <div class="row d-flex justify-content-center my-4">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header py-3">
                                <h5 class="mb-0">Chi Tiết Đơn Hàng Mã <?php echo $orderDetails[0]['id_dh']; ?></h5>

                            </div>
                            <div>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Tên Sản Phẩm</th>
                                            <th>Ảnh</th>
                                            <th>Giá Sản Phẩm</th>
                                            <th>Số Lượng</th>
                                            <th>Thành Tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($orderDetails as $orderItem): ?>
                                            <tr>
                                                <td><?php echo $orderItem['ten_sp']; ?></td>
                                                <td><img src="<?php echo $orderItem['img_sp']; ?>" alt="Ảnh Sản Phẩm"
                                                        width="100px"></td>
                                                <td>
                                                    <?php echo $orderItem['gia_sp']; ?> VNĐ
                                                </td>
                                                <td><?php echo $orderItem['soluong']; ?></td>
                                                <td>
                                                    <?php echo $orderItem['gia_donhang']; ?> VNĐ
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <a href="/order/showOrder" class="btn btn-link">
                                    <i class="fas fa-arrow-left"></i> Quay lại
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>
    </body>

</html>