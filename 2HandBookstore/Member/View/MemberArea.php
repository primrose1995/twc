<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>
<head>
    <title>台灣囝仔二手書網-會員專區</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="../assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="../assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
<body>
<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="inner">

            <!-- Logo -->
            <a href="../../../index.php" class="logo">
                <span class="symbol"><img src="../images/logo.svg" alt="" /></span><span class="title">台灣囝仔二手書網</span>

            </a>

            <!-- Nav -->
            <nav>
                <?php session_start();
                if(isset($_SESSION['username'])){?>
                    <ul>

                        <form name="form" method="post" action="../../../index.php">
                            <input type="submit" name="button" value="回到首頁" /></form>
                    </ul>
                    <?php echo '您好!'.$_SESSION['username'];} else {?>
                    <script language="javascript">
                        alert("您無權觀看此頁面!");
                    </script>
                <?php echo '<meta http-equiv=REFRESH CONTENT=1;url=../index.php>'; } ?>
            </nav>

        </div>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <h2>功能專區</h2>
        <ul>
            <li><a href="../../index.html">回到首頁</a></li>
            <li><a href="shoppingcart.html">購物車</a></li>
            <li><a href="member.html">會員專區</a></li>
            <li><a href="event.html">活動專區</a></li>
            <li><a href="leaderboard.html">熱銷排行</a></li>
            <li><a href="fountain.html">許願池</a></li>
        </ul>
    </nav>


    <!-- Main -->
    <div id="main">
        <div class="inner">

            <header>
                <h1 align="center">會員專區<br />
                </h1>

            </header>
            <section class="tiles">
                <article class="style1">
									<span class="image">
										<img src="../images/pic01.jpg" alt="" />
									</span>
                    <a href="profile.php">
                        <h2>個人資料</h2>
                        <div class="content">
                            <p>您可以在這裡修改您的個人資料</p>
                        </div>
                    </a>
                </article>
                <article class="style2">
									<span class="image">
										<img src="../images/pic02.jpg" alt="" />
									</span>
                    <a href="../../generic.html">
                        <h2>聊天室管理</h2>
                        <div class="content">
                            <p>進行交易的訊息視窗交談</p>
                        </div>
                    </a>
                </article>
                <article class="style3">
									<span class="image">
										<img src="../images/pic03.jpg" alt="" />
									</span>
                    <a href="../../generic.html">
                        <h2>訂單管理</h2>
                        <div class="content">
                            <p>管理您的買/賣訂單</p>
                        </div>
                    </a>
                </article>
                <article class="style4">
									<span class="image">
										<img src="../images/pic04.jpg" alt="" />
									</span>
                    <a href="../../generic.html">
                        <h2>追蹤書籍</h2>
                        <div class="content">
                            <p>追蹤您加入最愛的書籍</p>
                        </div>
                    </a>
                </article>
                <article class="style5">
									<span class="image">
										<img src="../images/pic05.jpg" alt="" />
									</span>
                    <a href="../../generic.html">
                        <h2>許願池清單管理</h2>
                        <div class="content">
                            <p>追蹤您的許願池項目</p>
                        </div>
                    </a>
                </article>


            </section>
        </div>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <section>
                <h2>Get in touch</h2>
                <form method="post" action="#">
                    <div class="field half first">
                        <input type="text" name="name" id="name" placeholder="Name" />
                    </div>
                    <div class="field half">
                        <input type="email" name="email" id="email" placeholder="Email" />
                    </div>
                    <div class="field">
                        <textarea name="message" id="message" placeholder="Message"></textarea>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Send" class="special" /></li>
                    </ul>
                </form>
            </section>
            <section>
                <h2>Follow</h2>
                <ul class="icons">
                    <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
                    <li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
                    <li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
                    <li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
                    <li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
                </ul>
            </section>
            <ul class="copyright">
                <li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>
    </footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>