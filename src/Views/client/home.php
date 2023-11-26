<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        /* content */
        .row {
            float: left;
            width: 100%;
        }

        .mb {
            margin-bottom: 20px;
        }

        .mb10 {
            margin-bottom: 10px;
        }
        .mt{
            margin-top: 10px;
        }

        .mr {
            margin-right: 2%;
        }

        .mr1 {
            margin-right: 8%;
        }

        .banner {
            min-height: 300px;
            width: 100%;
            text-align: center;
        }

        .banner img {
            height: 300px;
        }

        .container {
            max-width: 1400px;
            margin: auto;
        }

        .product-1 {
            display: flex;
            justify-content: center;
        }

        /*---------Meun------------------------------------*/
        nav ul {
            display: flex;
            list-style: none;
            float: left;
            line-height: 50px;
        }

        nav ul a {
            color: black;
            text-decoration: none;
            padding: 0 35px;
        }

        nav ul a:hover {
            text-decoration: underline;
        }

        /*--------------Meun2------------------------------ */
        .nav{
            padding-top:10px;
            border-top: 0.5px solid black;
            border-bottom: 0.5px solid black;
            
        }
        .nav ul {
            display: flex;
            list-style: none;
            float: left;
            line-height: 50px;
        }

        .nav ul a {
            font-size: 25px;
            color: black;
            text-decoration: none;
            padding: 0 35px;
        }

        .nav ul a:hover {
            text-decoration: underline;
        }

        /*-------------------------------------------*/

        /* sanpham -------------------------------------*/

        .boxsp {
            width: 250px;
            min-height: 300px;
            border: 1px #3333 solid;
            margin-bottom: 20px;
            padding-left: 5px;
            padding-top: 5px;
        }

        .boxsp a {
            text-decoration: none;
        }

        .boxsp a:hover {
            box-shadow: 0 1px black;
        }

        .boxsp .img {
            min-height: 230px;
            text-align: center;

        }


        .posts-item {
            position: relative;
            overflow: hidden;
        }

        .posts-item img {
            width: 100%;
            vertical-align: middle;
            transition: 2s ease-in-out;
        }

        .posts-item img:hover {
            transform: scale(0.7);
        }

        .sub {
            padding-top: 15px;
            text-align: center;
            position: absolute;
            /* background-color: #fff; */
            width: 100%;
            bottom: -160px;
            transition: .5s ease-in-out;
            transform: scale(0.7);
        }

        .sub a {
            color: black;
            font-size: 24px;
            text-decoration: none;
        }

        .sub a:hover {
            color: brown;
        }

        .posts-item:hover .sub {
            bottom: 0;
        }

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .posts-item img {
            width: 200px;
            height: 250px;
            justify-content: center;
        }

        /* ---------------- */
      .them{
        width: 400px;
        height: 40px;
        border-radius: 5px;
        border: 1px solid black;
        
      }
      .nut{
        text-align: center;
      }
    </style>
</head>

<body>
    <div class="container">
        <div class="meun">
            <nav>
                <ul>
                    <li><a href="">Menu 1</a></li>
                    <li><a href="">Menu 1</a></li>
                    <li><a href="">Menu 1</a></li>
                </ul>
            </nav>
        </div>
        <div class="mb banner">
            <img src="../../../img/banner.png" alt="">
        </div>
        <div class="nav">
                <ul>
                    <li><a href="">Menu 1</a></li>
                    <li><a href="">Menu 1</a></li>
                    <li><a href="">Menu 1</a></li>
                </ul>
        </div>
        <main>
            <div class="mt box-product">
                <div class="product-1">
                    <div class="boxsp mr">
                        <div class=" row posts-item">
                            <div class="box">
                                <img src="../../../img/Screenshot 2023-04-01 084837.png" alt="" width="230px">
                            </div>
                            <div class="sub">
                                <a href="#" style="font-size:32px"> <i class="mr1 fa fa-shopping-cart"></i></a>
                                <a href="#" style="font-size:32px">
                                    <i class="mr glyphicon glyphicon-eye-open"></i>
                                </a>
                            </div>
                        </div>
                        <h4>$30</h4>
                        <a href="">Dong</a>
                    </div>

                    <div class="boxsp mr">
                        <div class=" row posts-item">
                            <div class="box">
                                <img src="../../../img/Screenshot 2023-04-01 115729.png" alt="" width="230px">
                            </div>

                            <div class="sub">
                                <a href="#" style="font-size:32px"> <i class="mr1 fa fa-shopping-cart"></i></a>
                                <a href="#" style="font-size:32px">
                                    <i class="mr glyphicon glyphicon-eye-open"></i>
                                </a>
                            </div>
                        </div>
                        <h4>$30</h4>
                        <a href="">Dong ho</a>
                    </div>

                    <div class="boxsp mr">
                        <div class=" row posts-item">
                            <div class="box">
                                <img src="../../../img/Screenshot 2023-04-01 084837.png" alt="" width="230px">
                            </div>
                            <div class="sub">
                                <a href="#" style="font-size:32px"> <i class="mr1 fa fa-shopping-cart"></i></a>
                                <a href="#" style="font-size:32px">
                                    <i class="mr glyphicon glyphicon-eye-open"></i>
                                </a>
                            </div>
                        </div>
                        <h4>$30</h4>
                        <a href="">Dong ho</a>
                    </div>

                    <div class="boxsp ">
                        <div class="posts-item">
                            <img src="../../../img/Screenshot 2023-04-01 084837.png" alt="" width="230px">
                            <div class="sub">
                                <a href="#" style="font-size:32px"> <i class="mr1 fa fa-shopping-cart"></i></a>
                                <a href="#" style="font-size:32px">
                                    <i class="mr glyphicon glyphicon-eye-open"></i>
                                </a>
                            </div>
                        </div>
                        <h4>$30</h4>
                        <a href="">Dong ho</a>

                    </div>
                </div>
                <div class="product-1">
                    <div class="boxsp mr">
                        <div class=" row posts-item">
                            <div class="box">
                                <img src="../../../img/Screenshot 2023-04-01 084837.png" alt="" width="230px">
                            </div>
                            <div class="sub">
                                <a href="#" style="font-size:32px"> <i class="mr1 fa fa-shopping-cart"></i></a>
                                <a href="#" style="font-size:32px">
                                    <i class="mr glyphicon glyphicon-eye-open"></i>
                                </a>
                            </div>
                        </div>
                        <h4>$30</h4>
                        <a href="">Dong</a>
                    </div>

                    <div class="boxsp mr">
                        <div class=" row posts-item">
                            <div class="box">
                                <img src="../../../img/Screenshot 2023-04-01 115729.png" alt="" width="230px">
                            </div>

                            <div class="sub">
                                <a href="#" style="font-size:32px"> <i class="mr1 fa fa-shopping-cart"></i></a>
                                <a href="#" style="font-size:32px">
                                    <i class="mr glyphicon glyphicon-eye-open"></i>
                                </a>
                            </div>
                        </div>
                        <h4>$30</h4>
                        <a href="">Dong ho</a>
                    </div>

                    <div class="boxsp mr">
                        <div class=" row posts-item">
                            <div class="box">
                                <img src="../../../img/Screenshot 2023-04-01 084837.png" alt="" width="230px">
                            </div>
                            <div class="sub">
                                <a href="#" style="font-size:32px"> <i class="mr1 fa fa-shopping-cart"></i></a>
                                <a href="#" style="font-size:32px">
                                    <i class="mr glyphicon glyphicon-eye-open"></i>
                                </a>
                            </div>
                        </div>
                        <h4>$30</h4>
                        <a href="">Dong ho</a>
                    </div>

                    <div class="boxsp ">
                        <div class="posts-item">
                            <img src="../../../img/Screenshot 2023-04-01 084837.png" alt="" width="230px">
                            <div class="sub">
                                <a href="#" style="font-size:32px"> <i class="mr1 fa fa-shopping-cart"></i></a>
                                <a href="#" style="font-size:32px">
                                    <i class="mr glyphicon glyphicon-eye-open"></i>
                                </a>
                            </div>
                        </div>
                        <h4>$30</h4>
                        <a href="">Dong ho</a>

                    </div>
                </div>
            </div>
            <div class="nut">
                <button type="button"  class="them">Button 1</button>
            </div>
        </main>
    </div>
    
    <div class="footer"></div>
</body>

</html>