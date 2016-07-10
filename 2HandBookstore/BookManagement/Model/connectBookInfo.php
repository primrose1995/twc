<?php session_start();

header("Content-Type:text/html; charset=UTF8");
include("../../connect_to_DB.php");

//搜尋資料庫資料
$sql = "SELECT `id_book`,`name`,`ISBN`,`author`,`postdate`,`price`,`publishingHouse` FROM `book` WHERE id_book = ?";
$stmt = $dbh->prepare($sql);
$stmt->execute(array($_POST["id_book"]));//array是規定的格式
$bookData = $stmt->FETCH(PDO::FETCH_ASSOC); // key point  line

if ($stmt) {
    foreach ($bookData as $data) {
        $dataArray[$data] = array(
            'id_book' => $data['id_book'],
            'name' => $data['name'],
            'ISBN' => $data['ISBN'],
            'author' => $data['author'],
            'postdate' => $data['postdate'],
            'price' => $data['price'],
            'publishingHouse' => $data['publishingHouse'],
        );
    }
    //var_dump($dataArray);

    $dbh = null;

    echo json_encode($bookData);//用$dataArray格式會錯誤

    //用JSON回傳
} else {
    ?>
    <script language="javascript">
        alert("顯示失敗! ");
    </script>
    <?php
    $dbh = null;
    echo '<meta http-equiv=REFRESH CONTENT=1;url=../View/index.html>';
}

?>



