
<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

if($_SESSION['id'] != null)
{
    //將$_SESSION['id']丟給$id
    //這樣在下SQL語法時才可以給搜尋的值
    $title = $_SESSION['title'];
    //若以下$id直接用$_SESSION['username']將無法使用
    $sql = "SELECT * FROM DataList where title='$title'";
    $result = mysqli_query($sql);
    $row = mysqli_fetch_row($result);

    echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
    echo "標題：<input type=\"text\" name=\"title\" value=\"$row[0]\" /> <br>";
   // echo "電話：<input type=\"text\" name=\"telephone\" value=\"$row[3]\" /> <br>";
   // echo "地址：<input type=\"text\" name=\"address\" value=\"$row[4]\" /> <br>";
    echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
    echo "</form>";
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>