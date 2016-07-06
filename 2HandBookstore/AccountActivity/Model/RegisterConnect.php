<?php session_start(); ?>
    <!--上方語法為啟用session，此語法要放在網頁最前方-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("../models/connect_to_DB.php");
$account = (integer)$_POST['account'];
$password = $_POST['password'];
$name = $_POST['name'];
$school = $_POST['school'];
$department = $_POST['department'];
$email1 = (integer)$_POST['email1'];
$email2 = (integer)$_POST['email2'];

//搜尋資料庫資料
//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員

$sql = $dbh->query("SELECT * FROM buyer where account = '$account'");
$row = $sql->fetch($result);

if ( $row[1] == $account)
{
    ?><script language="javascript">
    alert("此帳號已有人使用");
        </script>
    <?php
    echo '<meta http-equiv=REFRESH CONTENT=2;url=../control/register.php>';
}
else if($school != null && $department != null && $email1 != null && $name !=null && $account!=null)
{

    //新增資料進資料庫語法
    $sql = "INSERT INTO buyer (id_buyer,account,password,name,school,department,email_1,email_2) values (NULL,'$account','$password','$name','$school','$department','$email1','$email2')";
    if($dbh->exec($sql))
    {
        echo '新增成功!';
        $dbh = null;
        echo '<meta http-equiv=REFRESH CONTENT=2;url=../index.php>';

    }
    else
    {
        echo '新增失敗!';
        $dbh = null;
        echo '<meta http-equiv=REFRESH CONTENT=2;url=../index.php>';
        $dbh = null;
    }
}
else
{
    echo '您無權限觀看此頁面!';
    $dbh = null;
    echo '<meta http-equiv=REFRESH CONTENT=2;url=../index.php>';

}
?>