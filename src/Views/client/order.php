<!-- client/order.php -->

<!DOCTYPE html>
<html>

    <head>
        <title>Danh sách đơn hàng</title>
    </head>

    <body>
        <h1>Danh sách đơn hàng</h1>

        <?php if (!empty($orders)): ?>
            <table>
                <tr>
                    <th>Ngày đặt hàng</th>
                    <th>Trạng thái</th>
                    <th>Người dùng</th>
                    <th>Tổng tiền</th>
                </tr>
                <?php foreach ($orders as $order): ?>
                    <tr>
                        <td><?php echo $order['ngaydathang']; ?></td>
                        <td><?php echo $order['trangthai']; ?></td>
                        <td><?php echo $order['id_user']; ?></td>
                        <td><?php echo $order['tongtien']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>Không có đơn hàng nào.</p>
        <?php endif; ?>


    </body>

</html>