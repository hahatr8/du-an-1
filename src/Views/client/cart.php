<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#thetarget">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="thetarget">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới Thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên Hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="h-100 h-custom" style="background-color: #d2c9ff;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black">Giỏ Hàng</h1>
                                            <h6 class="mb-0 text-muted">Số lượng</h6>
                                        </div>
                                        <hr class="my-4">

                                        <table class="table">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>Sản phẩm</th>
                                                    <th>Giá</th>
                                                    <th>Số lượng</th>
                                                    <th>Tổng</th>
                                                    <th>Thao Tác</th>
                                                </tr>
                                            </thead>
                                            <?php foreach ($items as $item) : ?>
                                                <tr>
                                                    <td><?php echo $item['id_sp']; ?></td>
                                                    <td><?php echo $item['gia_sp']; ?></td>


                                                    <!-- test -->
                                                    <td>
                                                        <input type="number" value="<?php echo $item['soluong_sp']; ?>" min="1" onchange="updateSoluong(<?php echo $id_sp; ?>, this.value)" class="form-control form-control-sm" />
                                                    </td>
                                                    <td><?php echo $item['gia_sp'] * $item['soluong_sp']; ?></td>

                                                    <td>
                                                        <button type="submit" class="btn btn-primary">Đặt Hàng</button>
                                                        <form action="/cart/delete?id=<?= $item['id'] ?>" method="post">
                                                            <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm">Xóa</button>
                                                        </form>

                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                        <p>Tổng giá trị: <?php echo $thanhtien; ?></p>

                                        <hr class="my-4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>