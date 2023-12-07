<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php require_once 'components-home/head.php' ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <style>
            #wrapper {
                margin-top: 100px;
            }
        </style>
    </head>

    <body>
        <?php require_once 'components-home/header.php' ?>
        <div id="wrapper">
            <div class="container">
                <div class="row justify-content-around">
                    <form action="" method="post">
                        <h1>Cập Nhật Thông Tin</h1>

                        <div class="form-group">
                            <label for="name">Tên</label>
                            <div class="input-group">
                                <input type="text" name="tk_user" class="form-control" value="<?= $user['tk_user']; ?>"
                                    readonly data-original-value="<?= $user['tk_user']; ?>">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary"
                                        onclick="enableEdit('tk_user')">Edit</button>
                                    <button type="button" class="btn btn-success d-none"
                                        onclick="saveEdit('tk_user')">Save</button>
                                    <button type="button" class="btn btn-danger d-none"
                                        onclick="cancelEdit('tk_user')">Cancel</button>
                                </div>
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="name" class="mt-3">Địa Chỉ</label>
                            <div class="input-group">
                                <input type="text" name="diachi_user" class="form-control"
                                    value="<?= $user['diachi_user'] ?>" readonly
                                    data-original-value="<?= $user['diachi_user'] ?>">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary"
                                        onclick="enableEdit('diachi_user')">Edit</button>
                                    <button type="button" class="btn btn-success d-none"
                                        onclick="saveEdit('diachi_user')">Save</button>
                                    <button type="button" class="btn btn-danger d-none"
                                        onclick="cancelEdit('diachi_user')">Cancel</button>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="mt-3">Số Điện Thoại</label>
                            <div class="input-group">
                                <input type="text" name="sdt_user" class="form-control" value="<?= $user['sdt_user'] ?>"
                                    readonly data-original-value="<?= $user['sdt_user'] ?>">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary"
                                        onclick="enableEdit('sdt_user')">Edit</button>
                                    <button type="button" class="btn btn-success d-none"
                                        onclick="saveEdit('sdt_user')">Save</button>
                                    <button type="button" class="btn btn-danger d-none"
                                        onclick="cancelEdit('sdt_user')">Cancel</button>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="mt-3">Email</label>
                            <div class="input-group">
                                <input type="text" name="email_user" class="form-control"
                                    value="<?= $user['email_user'] ?>" readonly
                                    data-original-value="<?= $user['email_user'] ?>">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary"
                                        onclick="enableEdit('email_user')">Edit</button>
                                    <button type="button" class="btn btn-success d-none"
                                        onclick="saveEdit('email_user')">Save</button>
                                    <button type="button" class="btn btn-danger d-none"
                                        onclick="cancelEdit('email_user')">Cancel</button>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="mt-3">Role</label>
                            <div class="input-group">

                                <input type="text" name="role" class="form-control" value="<?= $user['role'] ?>"
                                    readonly data-original-value="<?= $user['role'] ?>">

                            </div>
                            <button class="btn btn-info mt-3" type="button" id="btnEditPassword">Đổi mật khẩu</button>
                            <div id="password" style="display: none;">
                                <br>
                                <input class="form-control" type="password" name="old_password"
                                    placeholder="Mật Khẩu Cũ">
                                <input class="form-control" type="password" name="new_password"
                                    placeholder="Mật Khẩu Mới">
                                <br>
                            </div>

                            <br>
                            <button type="submit" name="btn-submit" class="btn btn-info mt-3" disabled>Lưu Thay
                                Đổi</button>
                            <a class="btn btn-primary mt-3" href="/indexTaiKhoan">Quay Lại</a>
                    </form>
                </div>
            </div>
        </div>
        <?php require_once 'components-home/foot.php' ?>

        <script>


            function enableEdit(fieldName) {
                const inputField = document.querySelector(`input[name="${fieldName}"]`);
                const editButton = inputField.nextElementSibling.firstElementChild;
                const saveButton = editButton.nextElementSibling;
                const cancelButton = saveButton.nextElementSibling;

                inputField.removeAttribute('readonly');
                inputField.focus();

                editButton.classList.add('d-none');
                saveButton.classList.remove('d-none');
                cancelButton.classList.remove('d-none');
                document.querySelector('button[name="btn-submit"]').disabled = true;
            }
            function saveEdit(fieldName) {
                const inputField = document.querySelector(`input[name="${fieldName}"]`);
                const editButton = inputField.nextElementSibling.firstElementChild;
                const saveButton = editButton.nextElementSibling;
                const cancelButton = saveButton.nextElementSibling;

                const originalValue = inputField.getAttribute('data-original-value');
                const currentValue = inputField.value;

                if (currentValue !== originalValue) {
                    inputField.setAttribute('readonly', true);

                    editButton.classList.remove('d-none');
                    saveButton.classList.add('d-none');
                    cancelButton.classList.add('d-none');
                    document.querySelector('button[name="btn-submit"]').disabled = false;

                    // Thực hiện lưu dữ liệu
                    // ...
                } else {
                    alert("Thông tin mới chưa được thay đổi!!!!!!");
                }
            }

            function cancelEdit(fieldName) {
                const inputField = document.querySelector(`input[name="${fieldName}"]`);
                const editButton = inputField.nextElementSibling.firstElementChild;
                const saveButton = editButton.nextElementSibling;
                const cancelButton = saveButton.nextElementSibling;

                const originalValue = inputField.getAttribute('data-original-value');
                inputField.value = originalValue;

                inputField.setAttribute('readonly', true);

                editButton.classList.remove('d-none');
                saveButton.classList.add('d-none');
                cancelButton.classList.add('d-none');
                document.querySelector('button[name="btn-submit"]').disabled = true;
            }
            function enableEditInfo() {
                var editButtons = document.querySelectorAll('.edit-btn');
                var saveButton = document.querySelector('.save-btn');
                var submitButton = document.querySelector('button[name="btn-submit"]');

                for (var i = 0; i < editButtons.length; i++) {
                    editButtons[i].classList.remove('d-none');
                }

                saveButton.classList.remove('d-none');
                submitButton.disabled = false;

                document.getElementById('edit-info-btn').disabled = true;
            }

            document.getElementById('edit-info-btn').addEventListener('click', enableEditInfo);
        </script>

    </body>

</html>



<script>
    const btnEditPassword = document.getElementById('btnEditPassword');
    const password = document.getElementById('password');

    btnEditPassword.addEventListener('click', function () {
        password.style.display = 'block';
    });
    document.querySelector('button[name="btn-submit"]').disabled = false;
</script>