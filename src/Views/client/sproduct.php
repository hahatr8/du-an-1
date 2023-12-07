<!DOCTYPE html>
<html lang="en">

<?php require_once 'components-home/head.php' ?>

<body>
    <?php require_once 'components-home/header.php' ?>

    <div id="prodetails" class="section-p1">
        <div class="single-pro-img">
            <img src="<?= $sanpham[0]['s_img_sp'] ?>" width="100%" id="MainImg" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="/assets/client//assets/img/quan/quan1.1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="/assets/client//assets/img/quan/quan1.2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="/assets/client//assets/img/quan/quan2.1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="/assets/client//assets/img/quan/quan2.1.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h6>Home/T-Shirt</h6>
            <h4><?= $sanpham[0]['s_ten_sp'] ?></h4>
            <h2><?= $sanpham[0]['s_gia_sp'] ?>₫</h2>
            <div class="form-radio m-b-30">
                <form>
                    <div class="radio radio-matrial radio-primary radio-inline">
                        <label>
                            <input type="radio" name="radio" checked="checked">
                            <i class="helper"></i>Primary Color
                        </label>
                    </div>
                    <div class="radio radio-matrial radio-success radio-inline">
                        <label>
                            <input type="radio" name="radio" checked="checked">
                            <i class="helper"></i>Success Color
                        </label>
                    </div>
                    <div class="radio radio-matrial radio-info radio-inline">
                        <label>
                            <input type="radio" name="radio" checked="checked">
                            <i class="helper"></i>Info Color
                        </label>
                    </div>
                    <div class="radio radio-matrial radio-warning radio-inline">
                        <label>
                            <input type="radio" name="radio" checked="checked">
                            <i class="helper"></i>Warning Color
                        </label>
                    </div>
                </form>
            </div>
            <div class="radio">
                <h6>Kích thước</h6>
                <input type="radio" name="size" id="1Y-9-11kg" value="1Y-9-11kg"> X
                <input type="radio" name="size" id="2Y-11-12kg" value="2Y-11-12kg"> XL
                <input type="radio" name="size" id="3Y-12-13kg" value="3Y-12-13kg"> XXL
            </div>

            <h6>Số lượng còn lại trong Kho: <?= $sanpham[0]['s_soluong_sp'] ?></h6>
            <form action="/addToCart" method="post" onsubmit="return kiemTraSoLuong()">
                <input type="hidden" name="id_user" value="<?= $_SESSION['id_user'] ?>">
                <input type="hidden" name="id_sp" value="<?= $sanpham[0]['s_id'] ?>">
                <button name="btn-addToCart" type="submit" class="normal w">Thêm vào giỏ hàng</button>
                <br>
                <input type="number" id="soluong_sp" name="soluong_sp" value="1" min="1" max="<?= $sanpham[0]['s_soluong_sp'] ?>">
            </form>
            <button class="normal">Mua</button>
            <h4>Chi tiết sản phẩm</h4>
            <span><?= $sanpham[0]['s_mota_sp'] ?></span>
        </div>

    </div>
    <div class="comment-box">
        <h3>Viết bình luận</h3>
        <form action="/sproduct/create" method="POST">
            <input type="hidden" name="id_sp" value="<?= $sanpham[0]['s_id'] ?>">
            <input type="hidden" name="id_user" value="<?= $_SESSION['id_user'] ?>">
            <input type="hidden" name="id_dm" value="<?= $sanpham[0]['s_id_dm'] ?>">
            <textarea id="comment-input" name="noidung" placeholder="Nhập bình luận của bạn..."></textarea>
            <button id="comment-submit" type="submit" name="btn-submit">Gửi</button>
        </form>
    </div>
    <div class="comment-list">
        <h3>Bình luận gần đây</h3>
        <?php foreach ($danhSachComments as $comment) : ?>
            <div class="comment-item">
                <div class="comment-author"><?= $comment['t_tk_user'] ?></div>
                <div class="comment-content"><?= $comment['b_noidung'] ?></div>
                <div class="comment-time"><?= $comment['b_ngaybinhluan'] ?></div>
            </div>
        <?php endforeach; ?>
    </div>



    <div id="product1" class="section-p1">
        <h2>Sản phẩm cùng loại</h2>
        <div class="pro-container">
            <input type="hidden" name="id_dm" value="<?= $sanpham[0]['s_id_dm'] ?>">
            <?php foreach ($loads as $load) : ?>
                <div class="pro">
                    <img src="<?= $load['s_img_sp'] ?>" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5><?= $load['s_ten_sp'] ?></h5>
                        <div class="star">
                            <i class="feather icon-star-on"></i>
                            <i class="feather icon-star-on"></i>
                            <i class="feather icon-star-on"></i>
                            <i class="feather icon-star-on"></i>
                            <i class="feather icon-star-on"></i>
                        </div>
                        <h4><?= $load['s_gia_sp'] ?></h4>
                    </div>
                    <li><a href="" class="feather icon-shopping-cart cart"></a></li>
                </div>
            <?php endforeach; ?>
        </div>

        <?php require_once 'components-home/foot.php' ?>

        <script src="/assets//client/assets/js/sproduct.js"></script>

</body>
<script src="/assets/client//assets/js/slider.js"></script>

</html>
<script>
    var soLuongDatHang = document.getElementById('soluong_sp');
    soLuongDatHang.addEventListener('change', function() {
        if (parseInt(soLuongDatHang.value) > parseInt(soLuongDatHang.getAttribute('max'))) {
            soLuongDatHang.value = soLuongDatHang.getAttribute('max');
        }
    });
</script>