<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>顯示用戶發言</title>
    <meta http-equiv="refresh" content="1;url=doChatDisplay.php">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Allen
 */

$dbhost = 'localhost';//ip位置
$dbuser = '2hand';//帳號
$dbpass = 'miranda226';//密碼
$dbtable='secondhandbookstore';//資料庫

$link_id=mysqli_connect($dbhost,$dbuser,$dbpass,$dbtable);//連結資料庫
  mysqli_query($link_id,"set names 'utf8'");//萬國碼
$str= "select * from chat order by chtime";  //查詢字符串
$result=mysqli_query($link_id,$str); //送出查詢
$rows=mysqli_num_rows($result); //取得查詢結果的記錄筆數
//取得最後15筆發言，並顯示
@mysqli_data_seek($result,$rows-15); //移動記錄指針到前15筆記錄
if ($rows<15) $l=$rows; else $l=15; //記錄總數小於15，則最多為該記錄數
for ($i=1;$i<=$l;$i++)
{
    list($chat_id,$chtime,$nick,$words)=mysqli_fetch_row($result);
    echo $chtime;echo " ";echo $nick;echo " "; echo $words;echo "<br>";
}

//清除庫中過時的數據
@mysqli_data_seek($result,$rows-20); //移動記錄指針到前20筆記錄
list($limtime)=mysqli_fetch_row($result);
$stl="delete from chat where chtime<$limtime" ;
$result=mysqli_query($link_id,$stl); //送出查詢字符串,庫中只留前20個記錄
mysqli_close($link_id);
 ?>
</body>
</html>