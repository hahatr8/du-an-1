<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User List</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>User List</h1>

        <a href="/admin/users/create" class="btn btn-info">Thêm</a>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Pass</th>
                <th>Address</th>
                <th>SDT</th>
                <th>Email</th>
                <th>Role</th>
            </tr>

            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['tk_user'] ?></td>
                    <td><?= $user['pass_user'] ?></td>
                    <td><?= $user['diachi_user'] ?></td>
                    <td><?= $user['sdt_user'] ?></td>
                    <td><?= $user['email_user'] ?></td>
                    <td><?= $user['role'] ?></td>
                    <td>
                        <a href="/admin/users/update?id=<?= $user['id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>
                        
                        <form action="/admin/users/delete?id=<?= $user['id'] ?>" method="post">
                            <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
</body>

</html>