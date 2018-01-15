<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
$number = $_POST['number'];
$id = $_POST['id'];
$d = $_POST['d'];


if($_SESSION['id'] != null){

    //刪除資料庫資料語法
    $sql_delete = "delete from Exhibit where number='$number'";

    if(mysqli_query($link,$sql_delete)) {

        echo '刪除成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=academic.php>';
        echo '<a href="academic.php">跳轉失敗請點我</a>';
    }
    else {
        echo '刪除失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=academic.php>';
        echo '<a href="academic.php">跳轉失敗請點我</a>';
    }
}

else{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>