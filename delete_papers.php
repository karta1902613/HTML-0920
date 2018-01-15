<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
$number = $_POST['number'];
$id = $_POST['id'];
//$sql_num = "SELECT * FROM Papers";
//$result_num = mysqli_query($link,$sql_num);
//$num=0;
//while($row=mysqli_fetch_array($result_num)){
//    $num++;
//}


if($_SESSION['id'] != null){

    //刪除資料庫資料語法
    $sql_delete = "delete from Papers where number='$number'";

    if(mysqli_query($link,$sql_delete)) {
     //   for( $i=$number+1 ; $i<$num ; $i++ ) {
     //       $x=$i-1;
     //       $sql = "UPDATE `Papers` SET `number` = '$x' WHERE `Papers`.`number` = $i";
     //       // echo $sql,'<br>';
//
     //       if (mysqli_query($link, $sql)) {
     //          // echo '刪除成功!';
     //         //  echo '<a href="book.php">跳轉失敗請點我</a>';
//
     //       } else {
//
     //              echo '刪除失敗! 數字錯誤 請至資料庫修改';
     //              echo '<a href="book.php">跳轉失敗請點我</a>';
     //       }
     //   }
        echo '刪除成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=book.php>';
        echo '<a href="book.php">跳轉失敗請點我</a>';
    }
    else {
        echo '刪除失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=book.php>';
        echo '<a href="book.php">跳轉失敗請點我</a>';
    }
}

else{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>