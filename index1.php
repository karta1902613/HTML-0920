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
<!-- 設定網頁編碼為UTF-8 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form name="form" method="post" action="connect.php">
    帳號：<input type="text" name="id" /> <br>
    密碼：<input type="password" name="pw" /> <br>
    <input type="submit" name="button" value="登入" />&nbsp;&nbsp;
    <a href="register.php">申請帳號</a>
</form>
</body>
</html>