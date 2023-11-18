<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>List sanpham</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>User SẢN PHẨM</h1>

        <a href="/admin/sanpham/create" class="btn btn-info">Thêm</a>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>IMG</th>
                <th>Mô Tả</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Lượt xem</th>
                <th>Danh Mục</th>
                <th>Role</th>
            </tr>

            <?php foreach ($sanpham as $item) : ?>
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['ten_sp'] ?></td>
                    <td><?= $item['img_sp'] ?></td>
                    <td><?= $item['mota_sp'] ?></td>
                    <td><?= $item['gia_sp'] ?></td>
                    <td><?= $item['soluong_sp'] ?></td>
                    <td><?= $item['luotxem'] ?></td>
                    <td><?= $item['id_dm'] ?></td>
                    <td>
                    <a href="/admin/sanpham/update?id=<?= $item['id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>
                        
                        <form action="/admin/sanpham/delete?id=<?= $item['id'] ?>" method="post">
                            <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" 
                                                    class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
</body>

</html>