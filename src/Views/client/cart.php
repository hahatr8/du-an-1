<!DOCTYPE html>
<html>

<head>
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Giỏ hàng</h1>
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
                    <td>
                        <input type="number" value="<?php echo $item['soluong_sp']; ?>" min="1" onchange="updateSoluong(<?php echo $id_sp; ?>, this.value)">
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


    </div>
</body>

</html>