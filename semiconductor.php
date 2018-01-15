<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>陳兆南副教授的網頁</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/knowledge/https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <?php
    if($_SESSION['id'] != null){
        echo " <link rel=\"stylesheet\" href=\"css/adminstyle.css\">"  ;
    }else{
        echo "<link rel=\"stylesheet\" href=\"css/style.css\"> "  ;
    }
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body bgcolor="#7fffd4">

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
                <li><a href="academic.php">學術</a></li>
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
        <div class="col-sm-2 sidenav">
            <p class= text-centeralign="center"><img src="chencn.jpg" width="100%" alt="陳兆南老師"></p>
            <?php
            include("mysql_connect.inc.php");
            $sqp = "SELECT * FROM Profile";
            $res = mysqli_query($link,$sqp);
            $ro = mysqli_fetch_row($res);
            echo"<li>Tel："; echo$ro[0];  echo"</li>";
            echo"<li>Office："; echo$ro[1];  echo"</li>";
            echo"<li>E-mail：<a href=\"mailto:$ro[2]\"> $ro[2]</a></li>";
            if($_SESSION['id']!=null){
                $tel = $_SESSION['tel'];
                $office = $_SESSION['office'];
                $email = $_SESSION['email'];
                echo "<form name=\"form\" method=\"post\" action=\"update_profile.php\"><div align='right'>";

                echo "Tel：<input type=\"text\" name=\"tel\" size='20'  value= $ro[0]> <br>";
                echo "Office：<input type=\"text\" name=\"office\" size='20'  value=$ro[1]> <br>";
                echo "E-mail：<input type=\"text\" name=\"email\" size='20'  value=$ro[2]> <br>";
                echo "<input type=\"submit\" name=\"button\" value=\"修改\" />";
                echo "</div></form>";

            }else{}
            ?>
        </div>
        <div class="col-sm-8 text-left" >
            <h3>半導體教學</h3>
            <hr>
            <div>
                <img src="s1.gif" width="33%" alt="陳兆南老師">
                <img src="s2.gif" width="33%" alt="陳兆南老師">
                <img src="s3.gif" width="33%" alt="陳兆南老師">
            </div>


        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
                <li><a href="course.php" >本學期開課課程</a></li>
            </div>
            <div class="well">
                <li><a href="semiconductor.php" >半導體教學</a></li>
            </div>
            <div class="well">
                <li><a href="tutorclass.php" >學輔時間課程</a></li>
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p><script  src="http://www.dreamhome.com.tw/escounter/counter.asp?name=karta19026&dir=11"></script>  Powered by 劉凱文</p>
</footer>

</body>
</html>