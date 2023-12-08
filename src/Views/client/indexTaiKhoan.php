<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once 'components-home/head.php' ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("pws");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script> -->
    <Style>
        #wrapper {
            margin-top: 100px;
        }
    </Style>

</head>

<body>
    <?php require_once 'components-home/header.php' ?>
    <div id="wrapper">
        <div class="container">
            <div class="row justify-content-around">
                <form action="" method="post">
                    <h1>Tài Khoản Của Tôi</h1>

                    <label for="name">Name</label>
                    <input type="text" name="tk_user" class="form-control" value="<?= $user['tk_user']; ?> " readonly>

                    <label for="name" class="mt-3">Địa Chỉ</label>
                    <input type="text" name="diachi_user" class="form-control" value="<?= $user['diachi_user'] ?>" readonly>

                    <label for="name" class="mt-3">Số Điện Thoại</label>
                    <input type="text" name="sdt_user" class="form-control" value="<?= $user['sdt_user'] ?>" readonly>

                    <label for="name" class="mt-3">Email</label>
                    <input type="email" name="email_user" class="form-control" value="<?= $user['email_user'] ?>" readonly>
                    <?php if ($user['role'] = 1) : ?>
                        <label for="name" class="mt-3">Đối Tượng</label>
                        <input type="text" name="role" class="form-control" value="Admin" readonly>
                    <?php else : ?>
                        <label for="name" class="mt-3">Đối Tượng</label>
                        <input type="text" name="role" class="form-control" value="Khách hàng" readonly>
                    <?php endif; ?>

                    <a href="/editTaiKhoan" class="btn btn-primary mt-3">Chỉnh Sửa Thông Tin </a>
                </form>

            </div>
        </div>
    </div>
    <?php require_once 'components-home/foot.php' ?>
</body>

</html>