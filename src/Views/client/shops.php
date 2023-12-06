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
        <?php foreach ($categories as $categori) : ?>
            <h2>
                Danh mục <?= $categori['d_ten_dm']; ?>
            </h2>
        <?php endforeach; ?>
        <p>Bộ sưu tập thiết kế hiện đại</p>
        <div class="pro-container">
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