<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Update</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Cập nhật User</h1>

        <form action="" method="post">
            <label for="name">Name</label>
            <input type="text" name="ten_sp" class="form-control" value="<?= $sanpham['ten_sp'] ?>">

            <label for="address" class="mt-3">Img</label>
            <input type="file" name="img_sp" class="form-control" value="<?= $sanpham['img_sp'] ?>">

            <label for="mota_sp" class="mt-3">mota</label>
            <textarea name="mota_sp" id="" cols="30" rows="5"  value="<?= $sampham['mota_sp']?>"></textarea>><br>
            

            <label for="gia_sp" class="mt-3">giá</label>
            <input type="text" name="gia_sp" class="form-control" value="<?= $sanpham['gia_sp'] ?>">

            <label for="soluong_sp" class="mt-3">số lượng</label>
            <input type="text" name="soluong_sp" class="form-control" value="<?= $sanpham['soluong_sp'] ?>">

            <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
            <a href="/admin/sanpham" class="btn btn-primary mt-3">Quay lại d/s</a>
        </form>
    </div>
</body>

</html>