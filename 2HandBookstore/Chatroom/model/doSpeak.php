<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>用戶登入</title>
</head>
<body>
<form action="doSpeak.php" method="post" target="_self" onsubmit="speak()">
    <input type="text" name="words" value=" " size="20" >
    <input type="submit" value="輸入" >
</form>
<script>
    function speak()
    {

        <?php
        if($_POST["words"]!="") {
            $words = $_POST["words"];
        //抓ip位置
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $myip = $_SERVER['HTTP_CLIENT_IP'];
             } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $myip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
            $myip = $_SERVER['REMOTE_ADDR'];
             }

        $dbhost = 'localhost';//ip位置
        $dbuser = '2hand';//帳號
        $dbpass = 'miranda226';//密碼
        $dbtable = 'secondhandbookstore';//資料庫

        $link_id = mysqli_connect($dbhost, $dbuser, $dbpass, $dbtable);//連結資料庫
        mysqli_query($link_id, "set names 'utf8' ");//萬國碼

        $time = date("Y") . date("m") . date("d") . date("h") + 8 . date("i") . date("s"); //取得當前時間
        $nick = $_COOKIE["nick"];

        $str = "insert into chat(chtime,nick,words) values('$time','$nick','$words')";
        mysqli_query($link_id, $str); //送出發言到數據庫
        mysqli_close($link_id);
        }
        ?>

    }
</script>
</body>
</html>

