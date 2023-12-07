<div id="product1" class="section-p1">
    <h2>Sản phẩm bán chạy</h2>
    <p>Bộ sưu tập thiết kế hiện đại</p>
    <div class="pro-container">
        <?php foreach ($danhSachSanPhamHot as $item) : ?>
            <input type="hidden" name="id" value="<?= $item['id'] ?>">
            <div class="pro" name="btn" onclick="window.location.href='/sproduct?id_sp=<?= $item['id'] ?>&id_dm=<?= $item['id_dm'] ?>';">
                <img src="<?= $item['img_sp'] ?>" alt="">
                <div class="des">
                    <!-- <span>adidas</span> -->
                    <h5><?= $item['ten_sp'] ?></h5>
                    <h8>Lượt xem: <?= $item['luotxem'] ?></h8>
                    <div class="star">
                        <i class="feather icon-star-on"></i>
                        <i class="feather icon-star-on"></i>
                        <i class="feather icon-star-on"></i>
                        <i class="feather icon-star-on"></i>
                        <i class="feather icon-star-on"></i>
                    </div>
                    <h4><?= $item['gia_sp'] ?>₫</h4>
                </div>
                <li><a href="" class="feather icon-shopping-cart cart"></a></li>
            </div>
        <?php endforeach ?>
    </div>