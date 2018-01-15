<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>陳兆南副教授-學術</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
    if($_SESSION['id'] != null){
        echo " <link rel=\"stylesheet\" href=\"css/autoadmstyle.css\">"  ;
    }else{
        echo "<link rel=\"stylesheet\" href=\"css/autostyle.css\"> "  ;
    }
    ?>
    <style>
        /* table */
        .tb_main {
            border-collapse: collapse;
            border: 2px solid #76a8ff;
            font: normal 80%/140% verdana, arial, helvetica, sans-serif;
            color: #222222;
            background: #fffff0;
        }
        .tb_main caption {
            padding: 0 .4em .4em;
            font-size: 1em;
            font-weight: bold;
            text-transform: uppercase;
            color: #333;
            background: transparent;
        }
        .tb_main td, th {
            border-left: 1px solid #76a8ff;
            border-bottom: 1px solid #76a8ff;
            padding: .3em;
        }
        .tb_main thead th, tfoot th {
            border: 1px solid #76a8ff;

            font-size: 1em;
            font-weight: bold;
            color: #444;
            background: #dbd9c0;
        }
        .tb_main td a {
            background: transparent;
            color: #222222;
            text-decoration: none;
            border-bottom: 1px dotted #76a8ff;
        }

        .tb_main th a {
            background: transparent;
            color: #72724c;
            text-decoration: none;
            font-weight:bold;
            border-bottom: 1px dotted #76a8ff;
        }
        .tb_main .odd {
            color: #222222;
            background: #e6fff1;
        }
        .tb_main tr:hover {
            color: #333;
            background: #fff;
        }
        .tb_main tr:hover th

    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://csie.asia.edu.tw/"><img src="csie.png" width="30px" ></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">首頁</a></li>
                <li><a href="resume.php">簡歷</a></li>
                <li class="active"><a href="academic.php">學術</a></li>
                <li><a href="book.php">著作</a></li>
                <li><a href="student.php">學生</a></li>
                <li><a href="link.php">常用連結</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if($_SESSION['id'] != null){
                    echo " <li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout</a></li> "  ;
                }else{
                    echo " <li><a href='login.html'><span class='glyphicon glyphicon-log-in'></span> Login</a></li> "  ;
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row content">

                <h1 align="center">學術</h1>
<div align="center">
                <ul class="nav nav-pills">
                    <li class="active"><a data-toggle="pill" href="#home">研究計畫</a></li>
                    <li><a data-toggle="pill" href="#menu2">展演</a></li>
                </ul>
    </div>
                <hr>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <h3 align="center">研究計畫</h3>
                        <div class="entry">
                            <?php
                            //新增
                            include("mysql_connect.inc.php");
                            $sql = "SELECT * FROM Research";
                            $result = mysqli_query($link,$sql);
                            ?>
                            <table  cellpadding="0" cellspacing="0" class="tb_main" align="center">
                                <?php
                                $num = 1;
                                while($row=mysqli_fetch_array($result)){
                                    echo "<tr class=\"odd\">";
                                    echo "<th>";
                                    echo $num;
                                    echo "</th>";
                                    echo "<th>";
                                    echo $row["date"]."<br>";
                                    echo $row["author"] ."，";
                                    echo $row["unit"]."<br>";
                                    echo $row["title"]."<br>";
                                    echo $row["time"]."<br>";
                                    echo "</th>";
                                    echo "<tr>";
                                    $num ++;
                                }
                                ?>
                            </table>
                            <?php
                            if($_SESSION['id'] != null){
                                echo '<hr>';
                                echo' 
                    <div class="container">
                        <div id="add" class="tab-pane fade in active">';
                                echo '<form name="form" method="post" action="add_research.php">';
                                echo'   計畫日期：<input type="text" size="45" name="date"  /> <br>
                                        計畫作者：<input type="text" size="45" name="author"  /> <br>
                                        部門單位：<input type="text" size="45" name="unit" /> <br>
                                        計畫名稱：<input type="text" size="45" name="title" /> <br>
                                        計畫時間：<input type="text" size="45" name="time" /> <br>
                <p align="center"><input type="submit" name="button"  value="新增" /></p>
                </form>
               </div>
              </div>         
                 <hr>';
                                $id = $_SESSION['id'];

                                $date = $_SESSION['date'];
                                $author = $_SESSION['author'];
                                $unit = $_SESSION['unit'];
                                $title = $_SESSION['title'];
                                $time = $_SESSION['time'];
                                //修改
                                echo"
                                
        <form name=\"form\" method=\"post\" action=\"update_research.php\">
        <div class=\"container\">
        計畫選項：
  <select name='number' id='form' >";
                                $res = mysqli_query($link,$sql);
                                $i=0;
                                while($rs=mysqli_fetch_array($res)) {
                                    $i++;
                                    $x=$rs["number"];
                                    echo"<option name=\"number\" value=\"$x\">$i</option>";
                                }
                                echo"
  </select>
                <br>
                      計畫日期：<input type=\"text\" size=\"45\" name=\"date\"  /> <br>
                      計畫作者：<input type=\"text\" size=\"45\" name=\"author\"  /> <br>
                      部門單位：<input type=\"text\" size=\"45\" name=\"unit\" /> <br>
                      計畫名稱：<input type=\"text\" size=\"45\" name=\"title\" /> <br>
                      計畫時間：<input type=\"text\" size=\"45\" name=\"time\" /> <br>                     
                 <p align=\"center\"><input type=\"submit\" name=\"button\"  value=\"修改\" /></p>
                </form>
               </div>
                <hr>";
                                //刪除
                      echo "       
            <form name=\"form\" method=\"post\" action=\"delete_research.php\">
             <div class=\"container\">
              計畫選項：
            <select name='number' id='form'>";
                                $re = mysqli_query($link,$sql);
                                $j=1;
                                while($rd=mysqli_fetch_array($re)) {
                                    $d=$rd["number"];
                                    echo"<option name=\"number\" value=\"$d\">$j</option>";
                                       $j++;
                                }
            echo"</select> <br>";
                                echo "<p align='center'><input  type=\"submit\" name=\"button\" value=\"刪除\" /></p>";
                                echo" </form>
               
                    </div>";
                            }else{
                            }
                            ?>
                        </div>
                    </div>

                    <div id="menu2" class="tab-pane fade" align="center">
                        <h3>展演</h3>
                        <div class="entry">

                            <?php
                            //新增
                            include("mysql_connect.inc.php");
                            $sql = "SELECT * FROM Exhibit";
                            $result = mysqli_query($link,$sql);
                            ?>
                            <table  cellpadding="0" cellspacing="0" class="tb_main" align="center">
                                <?php
                                $num = 1;
                                while($row=mysqli_fetch_array($result)){
                                    echo "<tr class=\"odd\">";
                                    echo "<th>";
                                    echo $num;
                                    echo "</th>";
                                    echo "<th>";
                                    echo $row["date"]."<br>";
                                    echo $row["title"]."，";
                                    echo $row["author"] ."<br>";
                                    echo $row["place"]."<br>";
                                    echo "</th>";
                                    echo "<tr>";
                                    $num ++;
                                }
                                ?>
                            </table>
                            <?php
                            if($_SESSION['id'] != null){
                                echo '<hr>';
                                echo' 
                    <div class="container">
                        <div id="add" class="tab-pane fade in active">';
                                echo '<form name="form" method="post" action="add_exhibit.php">';
                                echo'   展演日期：<input type="text" size="45" name="date"  /> <br>
                                        展演名稱：<input type="text" size="45" name="title" /> <br>
                                        展演作者：<input type="text" size="45" name="author"  /> <br>
                                        展演地點：<input type="text" size="45" name="place" /> <br>                                       
                                      
                <p align="center"><input type="submit" name="button"  value="新增" /></p>
                </form>
               </div>
              </div>         
                 <hr>';
                                $id = $_SESSION['id'];

                                $date = $_SESSION['date'];
                                $author = $_SESSION['author'];
                                $title = $_SESSION['title'];
                                $place = $_SESSION['place'];
                                //修改
                                echo"
                                
        <form name=\"form\" method=\"post\" action=\"update_exhibit.php\">
        <div class=\"container\">
        展演選項：
  <select name='number' id='form' >";
                                $res = mysqli_query($link,$sql);
                                $i=0;
                                while($rs=mysqli_fetch_array($res)) {
                                    $i++;
                                    $x=$rs["number"];
                                    echo"<option name=\"number\" value=\"$x\">$i</option>";
                                }
                                echo"
  </select>
                <br>
                      展演日期：<input type=\"text\" size=\"45\" name=\"date\"  /> <br>
                      展演名稱：<input type=\"text\" size=\"45\" name=\"title\" /> <br>
                      展演作者：<input type=\"text\" size=\"45\" name=\"author\"  /> <br>
                      展演地點：<input type=\"text\" size=\"45\" name=\"place\" /> <br>              
                 <p align=\"center\"><input type=\"submit\" name=\"button\"  value=\"修改\" /></p>
                </form>
               </div>
                <hr>";
                                //刪除
                                echo "
            <form name=\"form\" method=\"post\" action=\"delete_exhibit.php\">
             <div class=\"container\">
              展演選項：
            <select name='number' id='form'>";
                                $re = mysqli_query($link,$sql);
                                $j=1;
                                while($rd=mysqli_fetch_array($re)) {
                                    $d=$rd["number"];
                                    echo"<option name=\"number\" value=\"$d\">$j</option>";
                                    $j++;
                                }
                                echo"</select> <br>";
                                echo "<p align='center'><input  type=\"submit\" name=\"button\" value=\"刪除\" /></p>";
                                echo" <form>
               
                    </div>";
                            }else{
                            }
                            ?>

                        </div>
                </div>
            </div>


    </div>
</div>

<footer class="container-fluid text-center">
    <p><script  src="http://www.dreamhome.com.tw/escounter/counter.asp?name=karta19026&dir=11"></script>  Powered by 劉凱文</p>
</footer>

</body>
</html>