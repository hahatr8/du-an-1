<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Quản Lý Đơn Hàng</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Quản Lý Đơn Hàng</a></li>
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
                            <h5>Quản Lý Đơn Hàng</h5>
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
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($donhang as $item): ?>
                                                        <tr>
                                                            <td><?= $item['id'] ?></td>
                                                            <td><?= $item['ngaydathang'] ?></td>
                                                            <td><?= $arrayIdUser[$item['id_user']] ?></td>
                                                            <td><?= $item['tongtien'] ?></td>
                                                            <td>
                                                                <?php
                                                                $trangthai = '';
                                                                switch ($item['trangthai']) {
                                                                    case 0:
                                                                        $trangthai = 'Chờ xác nhận';
                                                                        break;
                                                                    case 1:
                                                                        $trangthai = 'Đã xác nhận';
                                                                        break;
                                                                    case 2:
                                                                        $trangthai = 'Đang giao';
                                                                        break;
                                                                    case 3:
                                                                        $trangthai = 'Giao thành công';
                                                                        break;
                                                                    default:
                                                                        $trangthai = '';
                                                                        break;
                                                                }
                                                                echo $trangthai;
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <form action="/admin/donhang/updateTrangThai" method="POST"
                                                                    style="display: flex;">
                                                                    <input type="hidden" name="id"
                                                                        value="<?= $item['id'] ?>">
                                                                    <select name="trangthai" onchange="this.form.submit()">
                                                                        <option value="0" <?= ($item['trangthai'] == 0) ? 'selected' : '' ?>>Chờ xác nhận</option>
                                                                        <option value="1" <?= ($item['trangthai'] == 1) ? 'selected' : '' ?>>Đã xác nhận</option>
                                                                        <option value="2" <?= ($item['trangthai'] == 2) ? 'selected' : '' ?>>Đang giao</option>
                                                                        <option value="3" <?= ($item['trangthai'] == 3) ? 'selected' : '' ?>>Giao thành công</option>
                                                                    </select>
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
</div>