<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("../../connect_to_DB.php");
$id = $_POST['user'];
$pw = $_POST['password'];

//搜尋資料庫資料
$sql = $dbh->query("SELECT * FROM buyer where account = '$id'");
$row = $sql->fetch($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[1] == $id && $row[2] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $id;
        ?>
        <script language="javascript">
        alert("登入成功!");
        </script>
        <?php
        $dbh = null;
        ?>
        <script language="javascript">
                window.history.back();
                window.history.back();
        </script>
        <?php
}
else
{      
        ?>
        <script language="javascript">
                alert("登入失敗! 請重新登入");
        </script>
        <?php
        $dbh = null;
        header("Refresh: 0; url=../../AccountActivity/View/login.html");
}

?>