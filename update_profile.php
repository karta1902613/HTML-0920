<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$tel = $_POST['tel'];
$office = $_POST['office'];
$email = $_POST['email'];


//紅色字體為判斷密碼是否填寫正確

if($_SESSION['id'] != null)
{
    $id = $_SESSION['id'];

    //更新資料庫資料語法
    $sql_update = "update Profile set tel = '$tel', office = '$office' ,email = '$email'";
    if(mysqli_query($link,$sql_update))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        echo '<a href="index.php">跳轉失敗請點我</a>';
    }
    else
    {
        echo $sql_update;
        echo '修改失敗!';
      //  echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        echo '<a href="index.php">跳轉失敗請點我</a>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>


