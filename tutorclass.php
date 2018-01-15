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
<style>
    table, th, td {
        border: 2px solid #c5e3ff;
        border-collapse: collapse;
        font-size:medium;
    }
</style>
<body bgcolor="#a8d9f1">

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
            <h1>106年數位內容組資工1B_導師班</h1>
            <hr>
            <div id="sites-canvas-main" class="sites-canvas-main">
                <div id="sites-canvas-main-content">
                    <table>
                        <tr align="center" bgcolor="#6495ed">
                            <td width="15"><b>週數</b></td>
                            <td ><b>日期</b></td>
                            <td><b>學輔課程內容</b></td>
                            <td><b>備註</b></td>
                        </tr>
                        <tr >
                            <td align="center">1</td>
                            <td>2017/09/20</td>
                            <td>班級幹部選舉</td>
                            <td></td>
                        </tr>
                        <tr >
                            <td align="center">2</td>
                            <td>2017/09/27</td>
                            <td>期初導師會議暨班級導師輔導知能研習	</td>
                            <td>不可辦理其他學輔課程。</td>
                        </tr>
                        <tr >
                            <td align="center">3</td>
                            <td>2017/10/04</td>
                            <td>中秋節放假</td>
                            <td></td>
                        </tr>
                        <tr >
                            <td align="center">4</td>
                            <td>2017/10/11</td>
                            <td>導生晤談</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">5</td>
                            <td>2017/10/18</td>
                            <td>大一資訊能力前測</td>
                            <td>教室提供考試，不可辦理其他學輔課程。</td>
                        </tr>
                        <tr>
                            <td align="center">6</td>
                            <td>2017/10/25</td>
                            <td>班會時間</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">7</td>
                            <td>2017/11/01</td>
                            <td>課程活動:數位科技使用的自我探索</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">8</td>
                            <td>2017/11/08</td>
                            <td>導生晤談</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">9</td>
                            <td>2017/11/15</td>
                            <td>期中考週</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">10</td>
                            <td>2017/11/22</td>
                            <td>導生晤談</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">11</td>
                            <td>2017/11/29</td>
                            <td>班會時間</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">12</td>
                            <td>2017/12/06</td>
                            <td>大一新生合唱比賽</td>
                            <td>大一新生創意合唱比賽</td>
                        </tr>
                        <tr>
                            <td align="center">13</td>
                            <td>2017/12/13</td>
                            <td>導生晤談</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">14</td>
                            <td>2017/12/20</td>
                            <td>導生晤談</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">15</td>
                            <td>2017/12/27</td>
                            <td>影片欣賞與討論</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">16</td>
                            <td>2017/01/03</td>
                            <td>班會時間</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">17</td>
                            <td>2017/01/10</td>
                            <td>導生晤談</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">18</td>
                            <td>2017/01/17</td>
                            <td>期末考週</td>
                            <td></td>
                        </tr>
                        
                    </table>
                                </div>

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