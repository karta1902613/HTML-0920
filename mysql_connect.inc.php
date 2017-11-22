<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 10:36
 */

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>


</head>
<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//資料庫設定
//資料庫位置
$db_server = "120.108.117.245";
//資料庫名稱
$db_name = "105021043";
//資料庫管理者帳號
$db_user = "root";
//資料庫管理者密碼
$db_pw = "1234";
//對資料庫連線
if(!@mysql_connect($db_server, $db_user, $db_pw))
    die("無法對資料庫連線");

//資料庫連線採UTF8
mysql_query("SET NAMES utf8");

//選擇資料庫
if(!@mysql_select_db($db_name))
    die("無法使用資料庫");
?>
</body>
</html>