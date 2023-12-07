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
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php $username = $_SESSION['tk_user'];
                            echo "$username" ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/indexTaiKhoan">Tài khoản của tôi</a>
                            <form action="" method="post">
                                <a href="/order/showOrder" class="dropdown-item" type="submit" name="btn-oder">Đơn
                                    Mua</a>
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
                            <h5 class="mb-0">Giỏ Hàng</h5>
                        </div>
                        <div class="card-body">
                            <!-- Single item -->
                            <?php foreach ($items as $item) : ?>

                                <div class="row">
                                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">

                                        <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                            <!-- Image -->

                                            <a href=" #!">
                                                <img src="<?= $item['img_sp'] ?>" class=" w-100" />
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)">
                                                </div>
                                            </a>
                                        </div>

                                    </div>


                                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">

                                        <p><strong> <?php echo $item['ten_sp']; ?></strong></p>
                                        <br>
                                        <p><strong> Đơn giá : <?php echo $item['gia_sp']; ?> VNĐ </strong></p>

                                        <form action="/cart/delete?id=<?= $item['id'] ?>" method="post">
                                            <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm me-1 mb-2" data-mdb-toggle="tooltip" title="Remove item">
                                                <i class="fas fa-trash fa-2x "></i></button>
                                        </form>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                        <td>
                                            <form action="/cart/updateQuantity" method="post">
                                                <input type="hidden" name="cartItemId" value="<?php echo $item['id_sp']; ?>">
                                                <div class="d-flex mb-4" style="max-width: 300px">
                                                    <button class="btn btn-primary px-3 me-2" type="button" onclick="decreaseQuantity(this)">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <div class="form-outline">
                                                        <input style="width: 60px;" id="quantity<?php echo $item['id_sp']; ?>" min="1" value="<?php echo $item['soluong_sp']; ?>" name="newQuantity" min="1" type="number" class="form-control" onchange="updateQuantity(this)">
                                                        <label class="form-label" for="quantity<?php echo $item['id_sp']; ?>"></label>
                                                    </div>
                                                    <button class="btn btn-primary px-3 ms-2" type="button" onclick="increaseQuantity(this)">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </td>
                                        <p class="text-start text-md-center">
                                            <strong>Thành Tiền: <?php echo $item['subtotal']; ?>VNĐ</strong>
                                        </p>
                                    </div>
                                </div>
                                <hr class="my-4" />
                            <?php endforeach; ?>
                            <!-- Single item -->
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <p><strong>Phương Thức Thanh Toán</strong></p>
                            <p class="mb-0">1. Thanh Toán Khi Nhận Được Hàng</p>
                            <p class="mb-0">2. Thanh Toán Trước Thông Qua Ngân Hàng</p>


                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Thông Tin Giỏ Hàng</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Tổng số mặt hàng
                                    <span><?php echo $totalItems; ?></span>
                                </li>
                                <hr class="my-4" />
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Tổng Gía Trị Giỏ Hàng</strong>
                                        <strong>
                                            <p class="mb-0">(Bao Gồm VAT)</p>
                                        </strong>
                                    </div>
                                    <span><strong> <?php echo $totalPrice; ?> VNĐ</strong></span>
                                </li>
                            </ul>


                            <form action="/order/createOrder" method="post">
                                <input value="checkout" name="btn-checkout" type="submit" class="btn btn-primary btn-lg btn-block">
                                </input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>
<script>
    function decreaseQuantity(button) {
        var input = button.parentNode.querySelector('input[type=number]');
        if (input.value > 1) {
            input.stepDown();
            updateQuantity(input);
        }
    }

    function increaseQuantity(button) {
        var input = button.parentNode.querySelector('input[type=number]');
        input.stepUp();
        updateQuantity(input);
    }

    function updateQuantity(input) {
        var form = input.parentNode.parentNode;
        form.submit();
    }
</script>