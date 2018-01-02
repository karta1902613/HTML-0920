<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$id = $_POST['id'];


//紅色字體為判斷密碼是否填寫正確

if($_SESSION['id'] != null)
{
    $id = $_SESSION['id'];

    //更新資料庫資料語法
    $sql_update = "update DataList set title = $title";
    //$sql_update = "Update da Set number = '$number', name = '$name', junior = '$junior', wish = '$wish' WHERE number = '$number'";
    if(mysqli_query($sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=indxt.php>';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>


<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
