<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$number = $_POST['number'];
$title = $_POST['title'];
$author = $_POST['author'];
$date = $_POST['date'];

if($number != null && $title != null && $author != null &&  $date != null)
{
//新增資料進資料庫語法
$sql = "insert into Papers (number,title,author,date) values ('$number', '$title', '$author', '$date')";
if(mysqli_query($link,$sql))
{
echo '新增成功!';
echo '<meta http-equiv=REFRESH CONTENT=2;url=book.php>';
}
else
{
echo '新增失敗!';
echo '<meta http-equiv=REFRESH CONTENT=2;url=book.php>';
}
}
else{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>