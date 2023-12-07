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
            var passwordField = document.getElementById("pass_user");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
    <style>
        #wrapper {
            margin-top: 200px;
        }
    </style>
</head>

<body>
    <?php require_once 'components-home/header.php' ?>
   

        <div id="wrapper">
            <div class="container">
                <div class="row justify-content-around">
                    <form action="" method="post" class="col-md-6 bg-light p-3 my-3">
                        <H1 class="text-center text-uppercase h3 py-3">Đăng Nhập</H1>
                        <div class="form-group">
                            <label for="tk_user">Tên đăng nhập</label>
                            <input type="text" class="form-control" name="tk_user" id="tk_user" required>
                        </div>

                        <div class="form-group">
                            <label for="pass_user">Mật khẩu</label>
                            <input type="password" class="form-control" name="pass_user" id="pass_user" required>
                            <input type="checkbox" id="showPassword" onclick="togglePasswordVisibility()">
                            <label for="showPassword">Hiện mật khẩu</label>
                        </div>

                        <input type="submit" name="btn-submit-login" value="Đăng Nhập" class="btn-primary btn-block">
                        <br>

                        <a class="btn btn-success" href="/register">Đăng kí tài khoản mới</a>

                    </form>
                </div>
          
            </div>
        </div>
        </div>
        <?php require_once 'components-home/foot.php' ?>
</body>

</html>