<?php session_start();
//上方語法為啟用session，此語法要放在網頁最前方-->
header("Content-Type:text/html; charset=UTF-8");

//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("../../connect_to_DB.php");
$id = $_SESSION['username'];

//搜尋資料庫資料
$sql = $dbh->query("SELECT * FROM buyer where account = '$id'");
$row = $sql->fetch($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if ($id = $_SESSION['username']) {

    //將帳號寫入session，方便驗證使用者身份
    $account = $id;
    $password = $row[2];
    $name = $row[3];
    $school = $row[4];
    $department = $row[5];
    $email_1 = $row[6];
    $email_2 = $row[7];

    $profileArray = array(
        "account" => $account,
        "password" => $password,
        "name" => $name,
        "school" => $school,
        "department" => $department,
        "email1" => $email_1,
        "email2" => $email_2
    );

    $dbh = null;
    echo json_encode($profileArray);//用JSON回傳
} else {
    ?>
    <script language="javascript">
        alert("顯示失敗! 請重新登入");
    </script>
    <?php
    $dbh = null;
    echo '<meta http-equiv=REFRESH CONTENT=1;url=../View/index.html>';
}

?>

header("Refresh: 0; url=../MemberController.php?action=ShowProfilePage");

