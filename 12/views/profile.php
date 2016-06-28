<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
include ("../models/getProfile.php");
?>
<html>
<head>
    <title>台灣囝仔二手書網-修改資料</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
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
            <a href="index.html" class="logo">
                <span class="symbol"><img src="../images/logo.svg" alt="" /></span><span class="title">台灣囝仔二手書網</span>
            </a>

            <!-- Nav -->
            <nav>

                <ul>
                <?php session_start();
                if(isset($_SESSION['username'])){?>


                        <form name="form" method="post" action="../index.php">
                            <input type="submit" name="button" value="回到首頁" /></form>

                <?php echo '您好!'.$_SESSION['username'];} else {?>
                    <script language="javascript">
                        alert("您無權觀看此頁面!");
                    </script>
                    <?php echo '<meta http-equiv=REFRESH CONTENT=1;url=../index.php>'; } ?>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <h2>Menu</h2>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="generic.html">Ipsum veroeros</a></li>
            <li><a href="generic.html">Tempus etiam</a></li>
            <li><a href="generic.html">Consequat dolor</a></li>
            <li><a href="elements.html">Elements</a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">
        <div class="inner">
            <h1>修改個人資料</h1>
            <span class="image main"><img src="../images/pic13.jpg" alt="" /></span>
            <div class="table-responsive">

                <form method="post" action="../control/ProfileModifyConnect.php">
                <table class="table">
                    <thead>
                        <tr>
                            <th>項目</th>
                            <th>內容</th>
                            <th>修改與否</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>姓名</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                        </tr>
                    <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                    </tr>
                    </tbody>
                </table>
                    <ul class="actions">
                        <li><input type="submit" value="提交修改" class="special" /></li>
                </form>

                </ul>
            </div>
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