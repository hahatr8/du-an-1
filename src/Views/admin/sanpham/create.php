<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Sản phẩm</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Sản phẩm</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">


                    <div class="card">
                        <div class="card-header">
                            <h5>Thêm mới Sản phẩm</h5>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">

                                    <div class="card-block">
                                        <form action="" method="post" enctype="multipart/form-data">

                                            <input type="hidden" name="luotxem" value="0" class="form-control">

                                            <label for="ten_sp">Name</label>
                                            <input type="text" name="ten_sp" id="ten_sp" class="form-control" required><br>

                                            <label for="id_dm">Danh Mục</label>
                                            <select name="id_dm" class="form-control" id="id_dm">
                                                <?php foreach ($categories as $category) : ?>
                                                    <option value="<?= $category['id'] ?>"><?= $category['ten_dm'] ?></option>;
                                                <?php endforeach; ?>
                                            </select><br><br>

                                            <label for="img_sp">Img</label>
                                            <input type="file" name="img" id="img_sp" class="form-control" required>

                                            <label for="mota_sp" class="mt-3">Mô Tả</label>
                                            <textarea name="mota_sp" class="form-control"></textarea><br>

                                            <label for="gia_sp" class="mt-3">Giá</label>
                                            <input type="number" name="gia_sp" class="form-control" required><br>

                                            <label for="soluong_sp" class="mt-3">Số Lượng</label>
                                            <input type="number" name="soluong_sp" class="form-control" required><br>

                                            <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
                                            <a href="/admin/sanpham" class="btn btn-primary mt-3">Quay lại d/s</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>