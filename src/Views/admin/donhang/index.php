<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Quản Lý Dơn Hàng</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Quản Lý Dơn Hàng</a> </li>
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
                            <h5>Quản Lý Dơn Hàng</h5>
                            <!-- <a href="/admin/sanpham/create" class="btn btn-info">Thêm</a> -->
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">

                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">
                                            <table class="table table-striped table-bordered nowrap" id="simpletable">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Ngày Đặt Hàng</th>
                                                        <th>Id_user</th>
                                                        <th>Tổng Tiền</th>
                                                        <th>Trạng Thái</th>
                                                        <th>Action </th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php foreach ($donhang as $item) : ?>
                                                        <tr>
                                                            <td><?= $item['id'] ?></td>
                                                            <td><?= $item['ngaydathang'] ?></td>
                                                            <td><?=  $arrayIdUser[$item['id_user']] ?></td>
                                                            <td><?= $item['tongtien'] ?></td>
                                                            <td><?= $item['trangthai'] ?></td>
                                                            <td>
                                                                <a href="/admin/sanpham/update?id=<?= $item['id'] ?>" class="btn btn-primary btn-sm mt-2">Chờ Xác Nhận</a>

                                                                <form action="/admin/sanpham/delete?id=<?= $item['id'] ?>" method="post">
                                                                    <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm mt-2">Xóa</button>
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

                    </div>
                </div>
            </div>
        </div>
    </div>