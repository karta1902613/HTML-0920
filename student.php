<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>陳兆南副教授-學生</title>
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

</head>
<style>
    table, th, td {
        border: 3px solid #c5e3ff;
        border-collapse: collapse;
        font-size:large;
    }
</style>
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
                <li><a href="academic.php">學術</a></li>
                <li><a href="book.php">著作</a></li>
                <li  class="active"><a href="student.php">學生</a></li>
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
    <div class="row content" a>

        <div>
            <h1 align="center">學生</h1>
            <hr>
            <?php
            include("mysql_connect.inc.php");
            $sql = "SELECT * FROM Student";
            $result = mysqli_query($link,$sql);

            ?>
            <table cellpadding="0" cellspacing="0" class="tb_main" align="center">
                <?php
                $num = 1;

                while($row=mysqli_fetch_array($result))
                {
                    echo"<tr bgcolor='#ffefd5'>";
                    echo"<th>";
                    echo "學生姓名：".$row["name"] ."<br>";
                    echo "聯絡方式：".$row["email"] ."<br>";
                    echo "研究方向：".$row["research"] ;
                    echo"</th>";
                    echo"</tr>";
                    $num ++;
                }

                ?>
            </table>

            <?php
            if($_SESSION['id'] != null){

                echo '<hr>';
                echo' <div class="container">
     
              <div id="add" class="tab-pane fade in active">';
                echo '<form name="form" method="post" action="add_student.php">';

                echo'   學生姓名：<input type="text" size="5" name="name"  /> <br>
                        聯絡方式：<input type="text" size="45" name="email"  /> <br>
                        研究方向：<input type="text" size="45" name="research" /> <br>
                <p align="center"><input type="submit" name="button"  value="新增" /></p>
                </form>
                </div>
                 </div>
                 
                 <hr>
                 ';
                $id = $_SESSION['id'];

                $name = $_SESSION['name'];
                $email = $_SESSION['email'];
                $research = $_SESSION['research'];

                echo"
        <form name=\"form\" method=\"post\" action=\"update_student.php\">
        <div class=\"container\">
        學生選項：
  <select name='number' id='form' >
  ";

                $res = mysqli_query($link,$sql);
                while($rs=mysqli_fetch_array($res)) {
                    $x=$rs["number"];
                    echo"<option name=\"number\" value=\"$x\">";echo $rs["name"];echo "</option>";
                }
                echo"
</select>
                <br>
                       學生姓名：<input type=\"text\" size=\"5\" name=\"name\" value=$row[1] > <br>
                       聯絡方式：<input type=\"text\" size=\"45\" name=\"email\" value=$row[2] > <br>
                       研究方向：<input type=\"text\" size=\"45\" name=\"research\"  value=$row[3]> <br>
                       
                 <p align=\"center\"><input type=\"submit\" name=\"button\"  value=\"修改\" /></p>
                </form>
               </div>
               <hr>
              
           
           
            <form name=\"form\" method=\"post\" action=\"delete_student.php\">
             <div class=\"container\">
              學生選項：
            <select name='number' id='form'>
                ";

                $re = mysqli_query($link,$sql);
                while($rd=mysqli_fetch_array($re)) {
                    $d=$rd["number"];
                    echo"<option name=\"number\" value=\"$d\">";echo $rd["name"];echo "</option>";

                }
                echo"</select> <br>";
                echo "<p align='center'><input  type=\"submit\" name=\"button\" value=\"刪除\" /></p>";
                echo" </form>
               
                    </div>
            ";
            }else{
            }
            ?>

        </div>

    </div>
</div>

<footer class="container-fluid text-center">
    <p><script  src="http://www.dreamhome.com.tw/escounter/counter.asp?name=karta19026&dir=11"></script>  Powered by 劉凱文</p>
</footer>

</body>
</html>