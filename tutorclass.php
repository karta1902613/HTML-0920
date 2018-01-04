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
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
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
            <li>Tel：+886-4-23323456  ext.48019</li>
            <li>Office：8019</li>
            <li>E-mail：<a href="mailto:chencn@asia.edu.tw"> chencn@asia.edu.tw</a></li>
        </div>
        <div class="col-sm-8 text-left" >
            <h1>106年數位內容組資工1B_導師班</h1>
            <hr>
            <div id="sites-canvas-main" class="sites-canvas-main">
                <div id="sites-canvas-main-content">
                    <table xmlns="http://www.w3.org/1999/xhtml" cellspacing="0" class="sites-layout-name-one-column sites-layout-hbox"><tbody>
                        <tr>
                            <td class="sites-layout-tile sites-tile-name-content-1"><div dir="ltr"><br /><span style="font-size:14pt;font-family:標楷體"><span lang="EN-US" style="background:yellow">1.2017年11</span><span style="background:yellow">月<span lang="EN-US">01</span>日<span lang="EN-US">(</span>三<span lang="EN-US">)</span>第<span lang="EN-US">8</span>節</span>於本班學輔課程地點<span lang="EN-US" style="background:yellow">I426</span><span style="background:yellow">教室</span>進行『數位科技使用的自我探索測驗』課程，</span><span style="background-color:transparent;font-family:標楷體;font-size:14pt">請班上同學出席參與。</span><br /><br /><table border="1" cellpadding="1" cellspacing="0" style="padding:0px;color:rgb(51,51,51);font-size:smaller;border-color:rgb(192,192,255);border-width:1px;border-style:double;font-family:新細明體;border-collapse:collapse;width:997.5px"><tbody style="padding:0px;margin:0px"><tr style="padding:0px;margin:0px;border-style:none;white-space:nowrap"></tr><tr style="padding:0px;margin:0px;color:cornflowerblue;background-color:lavender;font-size:medium"><th style="padding:0px;margin:0px">週數</th><th style="padding:0px;margin:0px">日期</th><th style="padding:0px;margin:0px"><span style="padding:0px;margin:0px">學輔課程內容</span> <span style="padding:0px;margin:0px;color:rgb(204,51,0)"></span></th><th style="padding:0px;margin:0px"><a style="padding:0px;margin:0px;color:cornflowerblue">備註</a></th><th style="padding:0px;margin:0px">開課單位</th><th style="padding:0px;margin:0px">活動內容</th><th style="padding:0px;margin:0px">活動地點</th><th style="padding:0px;margin:0px">開課資訊</th></tr><tr style="padding:0px;margin:0px;border-style:none;white-space:nowrap;color:black"><td style="padding:0px;margin:0px"><font size="3">1</font></td><td style="padding:0px;margin:0px"><font size="3">2017/09/20</font></td><td style="padding:0px;margin:0px"><span style="padding:0px;margin:0px"><font size="3">班級幹部選舉</font></span></td><td style="padding:0px;margin:0px;width:270px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td align="left" style="padding:0px;margin:0px"></td></tr><tr style="padding:0px;margin:0px;border-style:none;white-space:nowrap"><td style="padding:0px;margin:0px"><font size="3">2</font></td><td style="padding:0px;margin:0px"><font size="3">2017/09/27</font></td><td style="padding:0px;margin:0px"><span style="padding:0px;margin:0px"><font size="3">期初導師會議暨班級導師輔導知能研習</font></span></td><td style="padding:0px;margin:0px;width:270px"><font size="3">不可辦理其他學輔課程。</font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td align="left" style="padding:0px;margin:0px"></td></tr><tr style="padding:0px;margin:0px;border-style:none;white-space:nowrap"><td style="padding:0px;margin:0px"><font size="3">3</font></td><td style="padding:0px;margin:0px"><font size="3">2017/10/04</font></td><td style="padding:0px;margin:0px"><span style="padding:0px;margin:0px"><font size="3">中秋節放假</font></span></td><td style="padding:0px;margin:0px;width:270px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td align="left" style="padding:0px;margin:0px"></td></tr><tr style="padding:0px;margin:0px;border-style:none;white-space:nowrap;color:black"><td style="padding:0px;margin:0px"><font size="3">4</font></td><td style="padding:0px;margin:0px"><font size="3">2017/10/11</font></td><td style="padding:0px;margin:0px"><span style="padding:0px;margin:0px"><font size="3">導生晤談</font></span></td><td style="padding:0px;margin:0px;width:270px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td align="left" style="padding:0px;margin:0px"></td></tr><tr style="padding:0px;margin:0px;border-style:none;white-space:nowrap"><td style="padding:0px;margin:0px"><font size="3">5</font></td><td style="padding:0px;margin:0px"><font size="3">2017/10/18</font></td><td style="padding:0px;margin:0px"><span style="padding:0px;margin:0px"><font size="3">大一資訊能力前測</font></span></td><td style="padding:0px;margin:0px;width:270px"><font size="3">教室提供考試，不可辦理其他學輔課程。</font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td align="left" style="padding:0px;margin:0px"></td></tr><tr style="padding:0px;margin:0px;border-style:none;white-space:nowrap;color:black"><td style="padding:0px;margin:0px"><font size="3">6</font></td><td style="padding:0px;margin:0px"><font size="3">2017/10/25</font></td><td style="padding:0px;margin:0px"><span style="padding:0px;margin:0px"><font size="3">班會時間</font></span></td><td style="padding:0px;margin:0px;width:270px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td align="left" style="padding:0px;margin:0px"></td></tr><tr style="padding:0px;margin:0px;border-style:none;white-space:nowrap;color:black"><td style="padding:0px;margin:0px"><font size="3">7</font></td><td style="padding:0px;margin:0px"><font size="3">2017/11/01</font></td><td style="padding:0px;margin:0px"><span style="padding:0px;margin:0px"><font size="3">課程活動:數位科技使用的自我探索</font></span></td><td style="padding:0px;margin:0px;width:270px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3">學務處諮商輔導組</font></td><td style="padding:0px;margin:0px"><font size="3">數位科技使用的自我探索</font></td><td style="padding:0px;margin:0px"><font size="3">學輔教室</font></td><td align="left" style="padding:0px;margin:0px"></td></tr><tr style="padding:0px;margin:0px;border-style:none;white-space:nowrap;color:black"><td style="padding:0px;margin:0px"><font size="3">8</font></td><td style="padding:0px;margin:0px"><font size="3">2017/11/08</font></td><td style="padding:0px;margin:0px"><span style="padding:0px;margin:0px"><font size="3">導生晤談</font></span></td><td style="padding:0px;margin:0px;width:270px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td align="left" style="padding:0px;margin:0px"></td></tr><tr style="padding:0px;margin:0px;border-style:none;white-space:nowrap"><td style="padding:0px;margin:0px"><font size="3">9</font></td><td style="padding:0px;margin:0px"><font size="3">2017/11/15</font></td><td style="padding:0px;margin:0px"><span style="padding:0px;margin:0px"><font size="3">期中考週</font></span></td><td style="padding:0px;margin:0px;width:270px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td align="left" style="padding:0px;margin:0px"></td></tr><tr style="padding:0px;margin:0px;border-style:none;white-space:nowrap;color:black"><td style="padding:0px;margin:0px"><font size="3">10</font></td><td style="padding:0px;margin:0px"><font size="3">2017/11/22</font></td><td style="padding:0px;margin:0px"><span style="padding:0px;margin:0px"><font size="3">導生晤談</font></span></td><td style="padding:0px;margin:0px;width:270px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td align="left" style="padding:0px;margin:0px"></td></tr><tr style="padding:0px;margin:0px;border-style:none;white-space:nowrap;color:black"><td style="padding:0px;margin:0px"><font size="3">11</font></td><td style="padding:0px;margin:0px"><font size="3">2017/11/29</font></td><td style="padding:0px;margin:0px"><span style="padding:0px;margin:0px"><font size="3">班會時間</font></span></td><td style="padding:0px;margin:0px;width:270px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td align="left" style="padding:0px;margin:0px"></td></tr><tr style="padding:0px;margin:0px;border-style:none;white-space:nowrap;color:black"><td style="padding:0px;margin:0px"><font size="3">12</font></td><td style="padding:0px;margin:0px"><font size="3">2017/12/06</font></td><td style="padding:0px;margin:0px"><span style="padding:0px;margin:0px"><font size="3">大一新生合唱比賽</font></span></td><td style="padding:0px;margin:0px;width:270px"><font size="3">大一新生創意合唱比賽</font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td align="left" style="padding:0px;margin:0px"></td></tr><tr style="padding:0px;margin:0px;border-style:none;white-space:nowrap;color:black"><td style="padding:0px;margin:0px"><font size="3">13</font></td><td style="padding:0px;margin:0px"><font size="3">2017/12/13</font></td><td style="padding:0px;margin:0px"><span style="padding:0px;margin:0px"><font size="3">導生晤談</font></span></td><td style="padding:0px;margin:0px;width:270px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td align="left" style="padding:0px;margin:0px"></td></tr><tr style="padding:0px;margin:0px;border-style:none;white-space:nowrap;color:black"><td style="padding:0px;margin:0px"><font size="3">14</font></td><td style="padding:0px;margin:0px"><font size="3">2017/12/20</font></td><td style="padding:0px;margin:0px"><span style="padding:0px;margin:0px"><font size="3">導生晤談</font></span></td><td style="padding:0px;margin:0px;width:270px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td align="left" style="padding:0px;margin:0px"></td></tr><tr style="padding:0px;margin:0px;border-style:none;white-space:nowrap;color:black"><td style="padding:0px;margin:0px"><font size="3">15</font></td><td style="padding:0px;margin:0px"><font size="3">2017/12/27</font></td><td style="padding:0px;margin:0px"><span style="padding:0px;margin:0px"><font size="3">影片欣賞討論</font></span></td><td style="padding:0px;margin:0px;width:270px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td align="left" style="padding:0px;margin:0px"></td></tr><tr style="padding:0px;margin:0px;border-style:none;white-space:nowrap;color:black"><td style="padding:0px;margin:0px"><font size="3">16</font></td><td style="padding:0px;margin:0px"><font size="3">2018/01/03</font></td><td style="padding:0px;margin:0px"><span style="padding:0px;margin:0px"><font size="3">班會時間</font></span></td><td style="padding:0px;margin:0px;width:270px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td align="left" style="padding:0px;margin:0px"></td></tr><tr style="padding:0px;margin:0px;border-style:none;white-space:nowrap;color:black"><td style="padding:0px;margin:0px"><font size="3">17</font></td><td style="padding:0px;margin:0px"><font size="3">2018/01/10</font></td><td style="padding:0px;margin:0px"><span style="padding:0px;margin:0px"><font size="3">導生晤談</font></span></td><td style="padding:0px;margin:0px;width:270px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td style="padding:0px;margin:0px"><font size="3"> </font></td><td align="left" style="padding:0px;margin:0px"></td></tr><tr style="padding:0px;margin:0px;border-style:none;white-space:nowrap"><td style="padding:0px;margin:0px"><font size="3">18</font></td><td style="padding:0px;margin:0px"><font size="3">2018/01/17</font></td><td style="padding:0px;margin:0px"><span style="padding:0px;margin:0px"><font size="3">期末考週</font></span></td><td style="padding:0px;margin:0px;width:270px"> </td><td style="padding:0px;margin:0px"> </td><td style="padding:0px;margin:0px"> </td><td style="padding:0px;margin:0px"> <br /><br /></td></tr></tbody></table></div></td></tr></tbody></table>
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