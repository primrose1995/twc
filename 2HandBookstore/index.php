<!doctype html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>台灣囝仔二手書網</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<!--Navbar-->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">台灣囝仔</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="event.html">活動專區</a></li>
                <li><a href="bestsell.html">熱銷排行</a></li>
                <li><a href="wantlist.html">許願池</a></li>
                <li><a href="upload.html">我要賣書</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php session_start();
                if (isset($_SESSION['username'])) {
                    include_once (dirname(__FILE__)."/");
                    ?>
                    <li><a href="AccountActivity/Model/logout_connect.php">登出</a></li>
                    <?php echo '您好!' . $_SESSION['username'];
                } else { ?>
                    <li><a href="AccountActivity/View/login.php">登入</a></li>
                <?php } ?>
                <li><a href="signup.html">註冊</a></li>
                <li><a href="">會員中心</a></li>
                <li><a href="#">購物車</a></li>
            </ul>

        </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->

</nav>
<form id="searchbox" action="">
    <ul>
        <select id="searchselect">
            <option>書名</option>
            <option>出版社</option>
            <option>作者</option>
        </select>
        <input id="search" type="text" placeholder="想找甚麼書?">
        <input id="submit" type="submit" value="Search">
    </ul>
</form>
<h1 align="center">為了環保，請支持校內二手書流通!<br/></h1>
<p align="center">沒事多喝水，有事多上廁所</p>

<div class="row">
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <a href="management.html"><img src="assets/image/DSC06555.JPG" alt="..."></a>
            <div class="caption">
                <h3>管理學院</h3>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="DSC06555.JPG" alt="...">
            <div class="caption">
                <h3>管理學院</h3>
                <p>...</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default"
                                                                                   role="button">Button</a></p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="DSC06555.JPG" alt="...">
            <div class="caption">
                <h3>管理學院</h3>
                <p>...</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default"
                                                                                   role="button">Button</a></p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="DSC06555.JPG" alt="...">
            <div class="caption">
                <h3>管理學院</h3>
                <p>...</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default"
                                                                                   role="button">Button</a></p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="DSC06555.JPG" alt="...">
            <div class="caption">
                <h3>管理學院</h3>
                <p>...</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default"
                                                                                   role="button">Button</a></p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="DSC06555.JPG" alt="...">
            <div class="caption">
                <h3>管理學院</h3>
                <p>...</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default"
                                                                                   role="button">Button</a></p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="DSC06555.JPG" alt="...">
            <div class="caption">
                <h3>管理學院</h3>
                <p>...</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default"
                                                                                   role="button">Button</a></p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="DSC06555.JPG" alt="...">
            <div class="caption">
                <h3>管理學院</h3>
                <p>...</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default"
                                                                                   role="button">Button</a></p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="DSC06555.JPG" alt="...">
            <div class="caption">
                <h3>管理學院</h3>
                <p>...</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default"
                                                                                   role="button">Button</a></p>
            </div>
        </div>
    </div>
</div>
<footer id="footer">
    <div class="inner">
        <section>
            <h2>買賣流程</h2>
            <div class="tradeprocess">
                <li><a href="">書籍買賣流程</a></li>
                <li><a href="">書籍上傳流程</a></li>
                <li><a href="">會員註冊流程</a></li>
                <li><a href="">網站導覽</a></li>
            </div>
        </section>
        <section>
            <h2>About us</h2>
            <ul class="aboutus">
                <li><a href="">關於我們</a></li>
                <li><a href="">客服信箱</a></li>
                <li><a href="">服務時間</a></li>
            </ul>

        </section>
        <section>
            <h2>Rule</h2>
            <ul class="rule">
                <li><a href="">使用者條款及規範</a></li>
            </ul>
        </section>
        <ul class="copyright">
            <li>&copy; Taiwan Children. All rights reserved</li>
        </ul>
    </div>
</footer>
</body>
</html>
