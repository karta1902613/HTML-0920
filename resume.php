<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>陳兆南副教授-簡歷</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
    if($_SESSION['id'] != null){
        echo " <link rel=\"stylesheet\" href=\"css/adminstyle.css\">"  ;
    }else{
        echo "<link rel=\"stylesheet\" href=\"css/style.css\"> "  ;
    }
    ?>
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
                <li class="active"><a href="resume.php">簡歷</a></li>
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
            $sqe = "SELECT * FROM Profile";
            $res = mysqli_query($link,$sqe);
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
        <div class="col-sm-8 text-left">
            <div class="container">
                <h1>簡歷</h1>

                <ul class="nav nav-pills" >
                    <li class="active"><a data-toggle="pill" href="#home">學歷</a></li>
                    <li><a data-toggle="pill" href="#menu1">經歷</a></li>
                    <li><a data-toggle="pill" href="#menu2">專長</a></li>
                </ul>
                <hr>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <h3>學歷</h3>
                        <?php
                        //新增
                        include("mysql_connect.inc.php");
                        $sqd = "SELECT * FROM Education";
                        $ree = mysqli_query($link,$sqd);
                        ?>
                            <?php
                            while($row=mysqli_fetch_array($ree)){
                                echo "<li>", $row[edu]."</li>";
                            }
                            ?>
                        <?php
                        if($_SESSION['id'] != null){
                            echo '<hr>';
                            echo' 
                    <div class="container">
                        <div id="add" class="tab-pane fade in active">';
                            echo '<form name="form" method="post" action="add_education.php">';
                            echo'   學歷：<input type="text" size="30" name="edu"  /> <br>                                    
                <p align="center"><input type="submit" name="button"  value="新增" /></p>
                </form>
               </div>
              </div>         
                 <hr>';
                            $id = $_SESSION['id'];

                            $edu = $_SESSION['edu'];
                            $number = $_SESSION['number'];

                            //修改
                            echo"
                                
        <form name=\"form\" method=\"post\" action=\"update_education.php\">
        <div class=\"container\">
        學歷選項：
  <select name='number' id='form' >";
                            $res = mysqli_query($link,$sqd);
                            while($rs=mysqli_fetch_array($res)) {
                                $x=$rs["number"];
                                echo"<option name=\"number\" value=\"$x\">";echo $rs["edu"];echo "</option>";
                            }
                            echo"
  </select>
                <br>
                      學歷：<input type=\"text\" size=\"30\"  name=\"edu\"  /> <br>                                     
                 <p align=\"center\"><input type=\"submit\" name=\"button\"  value=\"修改\" /></p>
                </form>
               </div>
                <hr>";
                            //刪除
                            echo "       
            <form name=\"form\" method=\"post\" action=\"delete_education.php\">
             <div class=\"container\">
              學歷選項：
            <select name='number' id='form'>";
                            $re = mysqli_query($link,$sqd);
                            while($rd=mysqli_fetch_array($re)) {
                                $d=$rd["number"];
                                echo"<option name=\"number\" value=\"$d\">";echo $rd["edu"];echo "</option>";
                            }
                            echo"</select> <br>";
                            echo "<p align='center'><input  type=\"submit\" name=\"button\" value=\"刪除\" /></p>";
                            echo" </form>
               
                    </div>";
                        }else{
                        }
                        ?>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>經歷</h3>
                        <?php
                        //新增
                        include("mysql_connect.inc.php");
                        $sqx = "SELECT * FROM Experience";
                        $rex = mysqli_query($link,$sqx);
                        ?>
                        <?php
                        while($row=mysqli_fetch_array($rex)){
                            echo "<li>", $row[exp]."</li>";
                        }
                        ?>
                        <?php
                        if($_SESSION['id'] != null){
                            echo '<hr>';
                            echo' 
                    <div class="container">
                        <div id="add" class="tab-pane fade in active">';
                            echo '<form name="form" method="post" action="add_experience.php">';
                            echo'   經歷：<input type="text" size="30" name="exp"  /> <br>                                    
                <p align="center"><input type="submit" name="button"  value="新增" /></p>
                </form>
               </div>
              </div>         
                 <hr>';
                            $id = $_SESSION['id'];

                            $exp = $_SESSION['exp'];
                            $number = $_SESSION['number'];

                            //修改
                            echo"
                                
        <form name=\"form\" method=\"post\" action=\"update_experience.php\">
        <div class=\"container\">
        經歷選項：
  <select name='number' id='form' >";
                            $rex = mysqli_query($link,$sqx);
                            while($rs=mysqli_fetch_array($rex)) {
                                $ex=$rs["number"];
                                echo"<option name=\"number\" value=\"$ex\">";echo $rs["exp"];echo "</option>";
                            }
                            echo"
  </select>
                <br>
                      經歷：<input type=\"text\" size=\"30\"  name=\"exp\"  /> <br>                                     
                 <p align=\"center\"><input type=\"submit\" name=\"button\"  value=\"修改\" /></p>
                </form>
               </div>
                <hr>";
                            //刪除
                            echo "       
            <form name=\"form\" method=\"post\" action=\"delete_experience.php\">
             <div class=\"container\">
              經歷選項：
            <select name='number' id='form'>";
                            $re = mysqli_query($link,$sqx);
                            while($rd=mysqli_fetch_array($re)) {
                                $d=$rd["number"];
                                echo"<option name=\"number\" value=\"$d\">";echo $rd["exp"];echo "</option>";
                            }
                            echo"</select> <br>";
                            echo "<p align='center'><input  type=\"submit\" name=\"button\" value=\"刪除\" /></p>";
                            echo" </form>
               
                    </div>";
                        }else{
                        }
                        ?>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>專長</h3>
                        <?php
                        //新增
                        include("mysql_connect.inc.php");
                        $sqk = "SELECT * FROM Skill";
                        $rek = mysqli_query($link,$sqk);
                        ?>
                        <?php
                        while($row=mysqli_fetch_array($rek)){
                            echo "<li>", $row[skill]."</li>";
                        }
                        ?>
                        <?php
                        if($_SESSION['id'] != null){
                            echo '<hr>';
                            echo' 
                    <div class="container">
                        <div id="add" class="tab-pane fade in active">';
                            echo '<form name="form" method="post" action="add_skill.php">';
                            echo'   專長：<input type="text" size="30" name="skill"  /> <br>                                    
                <p align="center"><input type="submit" name="button"  value="新增" /></p>
                </form>
               </div>
              </div>         
                 <hr>';
                            $id = $_SESSION['id'];

                            $skill = $_SESSION['skill'];
                            $number = $_SESSION['number'];

                            //修改
                            echo"
                                
        <form name=\"form\" method=\"post\" action=\"update_skill.php\">
        <div class=\"container\">
        專長選項：
  <select name='number' id='form' >";
                            $res = mysqli_query($link,$sqk);
                            while($rs=mysqli_fetch_array($res)) {
                                $sx=$rs["number"];
                                echo"<option name=\"number\" value=\"$sx\">";echo $rs["skill"];echo "</option>";
                            }
                            echo"
  </select>
                <br>
                      專長：<input type=\"text\" size=\"30\"  name=\"skill\"  /> <br>                                     
                 <p align=\"center\"><input type=\"submit\" name=\"button\"  value=\"修改\" /></p>
                </form>
               </div>
                <hr>";
                            //刪除
                            echo "       
            <form name=\"form\" method=\"post\" action=\"delete_skill.php\">
             <div class=\"container\">
              學歷選項：
            <select name='number' id='form'>";
                            $re = mysqli_query($link,$sqk);
                            while($rd=mysqli_fetch_array($re)) {
                                $d=$rd["number"];
                                echo"<option name=\"number\" value=\"$d\">";echo $rd["skill"];echo "</option>";
                            }
                            echo"</select> <br>";
                            echo "<p align='center'><input  type=\"submit\" name=\"button\" value=\"刪除\" /></p>";
                            echo" </form>
               
                    </div>";
                        }else{
                        }
                        ?>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                    </div>
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