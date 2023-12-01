<div class="header">
    <div class="logo">
        <a href="/"><img src="/assets/client//assets/img/logo.jpg"></a>
    </div>
    <div class="menu">
        <li><a href="">Bé gái <i class="feather icon-chevron-down"></i></a>
            <ul class="sub-menu">
                <?php foreach ($listCategories as $categorie) : ?>
                    <li><a href=""><?= $categorie['ten_dm'] ?></a></li>
                <?php endforeach ?>
            </ul>
        </li>
        <li><a href="">Bé trai <i class="feather icon-chevron-down"></i></a>
            <ul class="sub-menu">
                <li><a href="">QUẦN</a></li>
                <li><a href="">ÁO</a></li>
                <li><a href="">ĐỒ BỘ</a></li>
            </ul>
        </li>
        <li><a href="">BLACK FRIDAY <i class="feather icon-chevron-down"></i></a>
            <ul class="sub-menu">
                <li><a href="">BLACK FRIDAY 2023</a></li>
                <li><a href="">MUA 1 TẶNG 1</a></li>
                <li><a href="">SALE UP TO 50%</a></li>
            </ul>
        </li>
        <li><a href="">NEW ARRiVAL</a></li>
        <li><a href="">Tra cứu đơn hàng</a></li>
        <li><a href="/shop">Cửa hàng</a></li>
        <li><a href="">DS cửa hàng</a></li>
    </div>
    <div class="others">
        <li><input type="search" placeholder="Tìm kiếm"><i class="feather icon-search"></i></li>
        <li><a href="/login" class="feather icon-user"></a></li>
        <li><a href="/cart" class="feather icon-shopping-cart"></a></li>
        <li><a href="" class="feather icon-log-out"></a></li>
    </div>
</div>