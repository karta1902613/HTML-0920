<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");


$number = $_POST['number'];
$date = $_POST['date'];
$author = $_POST['author'];
$title = $_POST['title'];
$place = $_POST['place'];


//紅色字體為判斷密碼是否填寫正確

if($_SESSION['id'] != null)
{
    $id = $_SESSION['id'];

    $sql_update = "update Exhibit set date='$date',title='$title', author='$author', place='$place' where number ='$number'";
    if(mysqli_query($link,$sql_update))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=academic.php>';
        echo '<a href="academic.php">跳轉失敗請點我</a>';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=academic.php>';
        echo '<a href="academic.php">跳轉失敗請點我</a>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>


