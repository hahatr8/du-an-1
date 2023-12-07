<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Users</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Users</a> </li>
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
                            <h5>Thêm mới tài khoản</h5>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">

                                    <div class="card-block">
                                        <form action="" method="post">
                                            <label for="tk_user">Name</label>
                                            <input type="text" name="tk_user" class="form-control" required>

                                            <label for="pass_user" class="mt-3">Pass</label>
                                            <input type="password" name="pass_user" class="form-control" required>

                                            <label for="diachi_user" class="mt-3">Địa chỉ</label>
                                            <input type="text" name="diachi_user" class="form-control" required>

                                            <label for="sdt_user" class="mt-3">SDT</label>
                                            <input type="text" name="sdt_user" class="form-control" required>

                                            <label for="email_user" class="mt-3">Email</label>
                                            <input type="email" name="email_user" class="form-control" required>

                                            <label for="role" class="mt-3">Chức năng(0 admin, 1 khách hàng)</label>
                                            <input type="text" name="role" class="form-control" required>

                                            <button type="submit" name="btn-submit-login" class="btn btn-info mt-3">Submit</button>
                                            <a href="/admin/users" class="btn btn-primary mt-3">Quay lại d/s</a>
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