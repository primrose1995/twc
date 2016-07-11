<?php
/**
 * Created by PhpStorm.
 * User: Allen
 */
$nick=$_POST["nick"];
setcookie("nick",$nick);

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>聊天室</title>
</head>
<body>
<div>
    <iframe src="../model/doChatDisplay.php" height="400px"></iframe>
</div>
<div>
    <iframe src="../model/doSpeak.php" height="100px"></iframe>
</div>
</body>
</html>