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
                            <h5>Cập nhật tài khoản</h5>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">

                                    <div class="card-block">
                                        <form action="" method="post">
                                            <label for="name">Name</label>
                                            <input type="text" name="tk_user" class="form-control" value="<?= $user['tk_user'] ?>">

                                            <label for="name" class="mt-3">Pass</label>
                                            <input type="text" name="pass_user" class="form-control" value="<?= $user['pass_user'] ?>">

                                            <label for="name" class="mt-3">Dia chi</label>
                                            <input type="text" name="diachi_user" class="form-control" value="<?= $user['diachi_user'] ?>">

                                            <label for="name" class="mt-3">SDT</label>
                                            <input type="text" name="sdt_user" class="form-control" value="<?= $user['sdt_user'] ?>">

                                            <label for="name" class="mt-3">Email</label>
                                            <input type="email" name="email_user" class="form-control" value="<?= $user['email_user'] ?>">

                                            <label for="name" class="mt-3">Chuc nang</label>
                                            <input type="text" name="role" class="form-control" value="<?= $user['role'] ?>">

                                            <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
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