<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");


$number = $_POST['number'];
$exp = $_POST['exp'];


//紅色字體為判斷密碼是否填寫正確

if($_SESSION['id'] != null)
{
    $id = $_SESSION['id'];

    $sql_update = "update Experience set exp='$exp' where number ='$number'";
    if(mysqli_query($link,$sql_update))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=resume.php>';
        echo '<a href="resume.php">跳轉失敗請點我</a>';
    }
    else
    {
        echo '修改失敗!';
        echo '<a href="resume.php">跳轉失敗請點我</a>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>



