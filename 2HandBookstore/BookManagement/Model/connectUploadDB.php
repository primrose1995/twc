<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/7/11
 * Time: 上午 12:53
 */
include("../../connect_to_DB.php");

$bookCover = $_POST['bookCover'];
$name= $_POST['name'];
$bookClass = $_POST['bookClass'];
$ISBN = $_POST['ISBN'];
$author =$_POST['author'];
$price = $_POST['price'];
$postdate ="2016-07-20";
$publishingHouse ="pp";
$buyer="1";


$sql = "INSERT INTO book (author,bookclass,postdate,price,ISBN,name,publishingHouse,id_buyer) values ('$author','$bookClass','$postdate','$price','$ISBN','$name','$publishingHouse','$buyer')";
/*$dbh->exec($sql);*/

if($dbh->exec($sql))
{
    echo '新增成功!';
}
else
{
    echo '新增失敗!';
}

?>