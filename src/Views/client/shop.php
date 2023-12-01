<!DOCTYPE html>
<html lang="en">

    <?php require_once 'components-home/head.php' ?>

    <body>

        <?php require_once 'components-home/header.php' ?>

        <div class="slider">
            <div class="aspect-ratio-169">
                <img src="/assets/client//assets/img/slider/slider_3.jpg" alt="">
            </div>
        </div>

        <div id="product1" class="section-p1">
            <h2>Tất cả sản phẩm</h2>
            <p>Bộ sưu tập thiết kế hiện đại</p>
            <div class="pro-container">
                <?php foreach ($danhSachSanPham as $sanpham): ?>

                    <div class="pro" onclick="window.location.href='/sproduct?id_sp=<?= $sanpham['id'] ?>';">
                        <img src="<?= $sanpham['img_sp'] ?>" alt="">

                        <div class="des">
                            <span>adidas</span>
                            <h5><?= $sanpham['ten_sp'] ?></h5>
                            <div class="star">
                                <i class="feather icon-star-on"></i>
                                <i class="feather icon-star-on"></i>
                                <i class="feather icon-star-on"></i>
                                <i class="feather icon-star-on"></i>
                                <i class="feather icon-star-on"></i>
                            </div>
                            <h4><?= $sanpham['gia_sp'] ?>₫</h4>
                        </div>
                        <li><a href="" class="feather icon-shopping-cart cart"></a></li>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

        <div id="pagination" class="section-p1">
            <a href="">1</a>
            <a href="">2</a>
            <a href=""><i class="feather icon-arrow-right"></i></a>
        </div>

        <?php require_once 'components-home/foot.php' ?>

    </body>
    <script src="/assets/client//assets/js/slider.js"></script>

</html>