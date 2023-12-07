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
                            <h5>Cập nhật sản phẩm</h5>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">

                                    <div class="card-block">
                                        <form action="" method="post" enctype="multipart/form-data">

                                            <input type="hidden" name="id" value="<?= $sanpham['id'] ?>">

                                            <label for="id_dm">Danh Mục</label>
                                            <select name="id_dm" id="id_dm" class="form-control">
                                                <?php foreach ($categories as $category) : ?>
                                                    <option <?= $sanpham['id_dm'] == $category['id'] ? 'selected' : '' ?> value="<?= $category['id'] ?>">

                                                        <?= $category['ten_dm'] ?>

                                                    </option>
                                                <?php endforeach; ?>
                                            </select>

                                            <label for="name">Name</label>
                                            <input type="text" name="ten_sp" class="form-control" value="<?= $sanpham['ten_sp'] ?>">

                                            <label for="img_sp" class="mt-3">Img</label>
                                            <input type="file" name="img" id="img_sp" class="form-control">
                                            <input type="hidden" name="img_current" id="img_current" class="form-control" value="<?= $sanpham['img_sp'] ?>">
                                            <img src="<?= $sanpham['img_sp'] ?>" alt="" height="100px" width="120px"> <br>

                                            <label for="mota_sp" class="mt-3">mota</label> <br>
                                            <textarea name="mota_sp" id="mota_sp" class="form-control"><?= $sanpham['mota_sp'] ?></textarea>

                                            <label for="gia_sp" class="mt-3">giá</label>
                                            <input type="text" name="gia_sp" class="form-control" value="<?= $sanpham['gia_sp'] ?>">

                                            <label for="soluong_sp" class="mt-3">số lượng</label>
                                            <input type="text" name="soluong_sp" class="form-control" value="<?= $sanpham['soluong_sp'] ?>">

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