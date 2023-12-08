<div class="header">
    <div class="logo">
        <a href="/"><img src="/assets/client//assets/img/logo.jpg"></a>
    </div>
    <div class="menu">
        <li><a href="">Bé gái <i class="feather icon-chevron-down"></i></a>
            <ul class="sub-menu">
                <?php foreach ($GLOBALS['categoryForMenu'] as $categorie) : ?>
                    <li><a href="/shops?id_dm=<?= $categorie['id'] ?>"><?= $categorie['ten_dm'] ?></a></li>
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
        <form action="/search" method="POST">
            <div class="input-group input-group-button" style="margin-top: 20px;">
                <input type="text" id="search-friends" name="search" class="form-control" placeholder="Tìm kiếm" required>
                <div class="input-group-append">
                    <button class="btn btn-primary waves-effect waves-light" type="sunmit"><i class="feather icon-search"></i></button>
                </div>
            </div>
        </form>
        <?php if (empty($_SESSION['tk_user'])) : ?>
            <li><a href="/login" class="feather icon-user"></a></li>
        <?php else : ?>
            <li><a href="/indexTaiKhoan"><?= $_SESSION['tk_user'] ?></a></li>
        <?php endif; ?>
        <li><a href="/cart" class="feather icon-shopping-cart"></a></li>
        <form method="post">
            <button id="delete" class="dropdown-item feather icon-log-out" type="submit" name="logout"></button>
        </form>

        <!-- <form method="post">
            <button class="dropdown-item" type="submit" name="logout">Đăng Xuất</button>
        </form> -->
    </div>
</div>