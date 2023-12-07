<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once 'components-home/head.php' ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("pws");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
    <Style>
        #wrapper{
            margin-top: 180px;
        }
    </Style>

</head>

<body>
<?php require_once 'components-home/header.php' ?>
    <div id="wrapper">
        <div class="container">
            <div class="row justify-content-around">
                <form action="" method="post" class="col-md-6 bg-light p-3 my-3">
                    <H1 class="text-center text-uppercase h3 py-3">Đăng kí tài khoản</H1>
                    <div class="form-group">
                        <label for="tk_user">Tên đăng nhập</label>
                        <input type="text" class="form-control" name="tk_user" id="tk_user" required>

                    </div>
                    <div class="form-group">
                        <label for="pws">Mật khẩu</label>
                        <input type="password" class="form-control" name="pass_user" id="pws" required>
                        <input type="checkbox" id="showPassword" onclick="togglePasswordVisibility()">
                        <label for="showPassword">Hiện mật khẩu</label>
                    </div>

                    <div class="form-group">
                        <label for="diachi">Địa Chỉ</label>
                        <input type="text" class="form-control" name="diachi_user" id="diachi_user" required>
                    </div>
                    <div class="form-group">
                        <label for="sdt_user">Số Điện Thoại</label>
                        <input type="number" class="form-control" name="sdt_user" d="sdt_user" inputmode=" numeric" required />
                    </div>



                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email_user" id="email_user" required>
                    </div>

                    <button type="submit" name="button-submit" class="btn btn-success">Đăng kí Tài Khoản</button>
                    <a class="btn btn-primary" href="/login">Quay lại Đăng Nhập</a>

                </form>


            </div>
        </div>
    </div>
    <?php require_once 'components-home/foot.php' ?>
</body>

</html>