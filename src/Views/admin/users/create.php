<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User create</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Tạo mới User</h1>

        <form action="" method="post">
            <label for="tk_user">Name</label>
            <input type="text" name="tk_user" class="form-control">

            <label for="pass_user" class="mt-3">Pass</label>
            <input type="password" name="pass_user" class="form-control">

            <label for="diachi_user" class="mt-3">Dia chi</label>
            <input type="text" name="diachi_user" class="form-control">

            <label for="sdt_user" class="mt-3">SDT</label>
            <input type="text" name="sdt_user" class="form-control">

            <label for="email_user" class="mt-3">Email</label>
            <input type="email" name="email_user" class="form-control">

            <label for="role" class="mt-3">Chuc nang</label>
            <input type="text" name="role" class="form-control">

            <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
            <a href="/admin/users" class="btn btn-primary mt-3">Quay lại d/s</a>
        </form>
    </div>
</body>

</html>