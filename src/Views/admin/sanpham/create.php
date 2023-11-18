<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Thêm Sản Phẩm</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Thêm Sản Phẩm</h1>

        <form action="" method="post">
            <label for="id_dm">Danh Mục</label>
            <select name="id_dm" id="">
                <?php     
                foreach($categories as $item) :{
              
                    echo 'option value="'.$item['id'].'">'.$item['ten_dm'].'</option>';
                }

            endforeach;
                ?>
            </select><br> 
            
            <label for="name_sp">Name</label>
            <input type="text" name="ten_sp" class="form-control"><br>

            <label for="img_sp" class="mt-3">IMG</label>
            <input type="file" name="img_sp" class="form-control"><br>

            <label for="mota_sp" class="mt-3">Mô Tả</label>
            <textarea name="mota_sp" id="" cols="30" rows="5"></textarea>><br>

            <label for="gia_sp" class="mt-3">Giá</label>
            <input type="text" name="gia_sp" class="form-control"><br>

            <label for="soluong_sp" class="mt-3">Số Lượng</label>
            <input type="text" name="soluong_sp" class="form-control"><br>

    

            <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
            <a href="/admin/sanpham" class="btn btn-primary mt-3">Quay lại d/s</a>
        </form>
    </div>
</body>

</html>