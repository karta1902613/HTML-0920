<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$date = $_POST['date'];
$author = $_POST['author'];

$title = $_POST['title'];
$place = $_POST['place'];

if($_SESSION['id'] != null){
    //新增資料進資料庫語法
    $sql = "insert into Exhibit (date,title,author,place) values ('$date', '$title','$author', '$place')";
    if(mysqli_query($link,$sql) ){
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=academic.php>';
        echo '<a href="academic.php">跳轉失敗請點我</a>';
    }
    else {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=academic.php>';
        echo '<a href="academic.php">跳轉失敗請點我</a>';
    }
}
else{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>