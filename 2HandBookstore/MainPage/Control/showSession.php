
<?php session_start();
//<!--catch session-->
header("Content-Type:text/html; charset=UTF-8");
$sessionArray = array("session" => $_SESSION["username"]);
echo json_encode($sessionArray);

?>

