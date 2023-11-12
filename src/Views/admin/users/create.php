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
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">

            <label for="email" class="mt-3">Email</label>
            <input type="email" name="email" class="form-control">

            <label for="password" class="mt-3">Password</label>
            <input type="password" name="password" class="form-control">

            <label for="address" class="mt-3">Address</label>
            <input type="text" name="address" class="form-control">

            <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
            <a href="/admin/users" class="btn btn-primary mt-3">Quay lại d/s</a>
        </form>
    </div>
</body>

</html>