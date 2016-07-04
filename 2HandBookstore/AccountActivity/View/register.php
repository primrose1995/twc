
<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
session_start();
?>
<html>
	<head>
		<title>台灣囝仔二手書網-註冊會員</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <style>
.inputStyle{
    width :35 px;
    height :5 px;
}
</style>
		
	</head>

	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="../index.html" class="logo">
									<span class="symbol"><img src="../images/logo.svg" alt="" /></span><span class="title">台灣囝仔二手書網</span>
								</a>
                                

							<!-- Nav -->
								<nav>
									<ul>
                                        <li><a href="login.php">登入</a></li>
                                        <li><a href="register.php">註冊</a></li>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>功能專區</h2>
						<ul>
							<li><a href="../../MainPage/View/index.html">回到首頁</a></li>
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
							<h1>會員註冊</h1>
							<span class="image main"><img src="../images/pic13.jpg" alt="" /></span>
							
							<!-- Table -->
								<section>
									<h1>歡迎加入台灣囝仔二手書城!  </h1>

									<form method="post" action="../control/RegisterConnect.php">

                                        帳號(請輸入學號)：<input type='text' name="account" class="inputStyle"><br>
										密碼：<input type='password' name="password" id="account" class="inputStyle"><br>
                                        姓名：<input type='text' name="name" class="inputStyle"><br>
                                        學校：<input type='text' name="school" class="inputStyle"><br>
                                        系級：<input type='text' name="department" class="inputStyle"><br>
										學校信箱：<input type='text' name="email1" class="inputStyle"><br>
										常用信箱：<input type='text' name="email2" class="inputStyle"><br>

									<ul class="actions">
										<li><input type="submit" value="註冊" class="special" /></li>
									</form>
                                        <li><input type="reset" value="清空重填" class="special"/></li>
									</ul>

				           </section>
						</div>
					</div>

				<!-- Footer -->
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
                                <!--<form method="post" action="#">
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
								</form>-->
                                
							</section>
							<section>
								<h2>About us</h2>
                                <ul class="aboutus">
                                    <li><a href="">關於我們</a></li>
                                    <li><a href="">客服信箱</a></li>
                                    <li><a href="">服務時間</a></li>
                                </ul>
								<!--<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
								</ul>-->
                                
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

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>