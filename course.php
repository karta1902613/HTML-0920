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
            <a class="navbar-brand  " href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">首頁</a></li>
                <li><a href="resume.php">簡歷</a></li>
                <li><a href="academic.php">學術</a></li>
                <li><a href="book.html">著作</a></li>
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
            <h2>106學年度上學期教授科目</h2>
            <hr>
            <table width="99%" align="center" cellpadding="0" cellspacing="0" class="standard-table"  border=" 2px solid #76a8ff">
                <tr bgcolor="#BFDFFF" align=middle  >
                    <td bgcolor="#AAAAFF" width=90><div align="center"><span class="style1">系所年級 </span></div></td>
                    <td bgcolor="#AAAAFF" width=90><div align="center"><span class="style1">課號 </span></div></td>
                    <td bgcolor="#AAAAFF" width=130><div align="center"><span class="style1">課名 </span></div></td>
                    <td bgcolor="#AAAAFF" width=40><div align="center"><span class="style1">修別 </span></div></td>
                    <td bgcolor="#AAAAFF" width=40><div align="center"><span class="style1">學<br />
    分 </span></div></td>
                    <td bgcolor="#AAAAFF" width=40><div align="center"><span class="style1">已選/最大<br />
    人數 </span></div></td>
                    <td bgcolor="#AAAAFF" width=70><div align="center"><span class="style1">授課教師 </span></div></td>
                    <td bgcolor="#AAAAFF" width=120><div align="center" class="style1">上課時間</div></td>
                    <td bgcolor="#AAAAFF" width=100><div align="center"><span class="style1">學程 </span></div></td>
                    <td bgcolor="#AAAAFF"  width=130><div align="center"><span class="style1">備註 </span></div></td>
                </tr>


                <tr onclick="doitme('course_outline_S6.asp?mCos_id=EE200167&mCos_Class=A&mSmtr=1061&cos_data=')" style="cursor:hand;" >

                    <td>資工系碩士班1年級</td>
                    <td><div align="center">EE200167A</div></td>
                    <td>3D物體成像</td>

                    <td><div align="center">選</div></td>
                    <td><div align="center">3</div></td>
                    <td><div align="center">23/40</div></td>

                    <td>陳兆南</td>
                    <td>
                        (四)234 I627  </td>
                    <td><div align="left">所定選修</div></td>
                    <td></td>

                </tr>


                <tr onclick="doitme('course_outline_S6.asp?mCos_id=EE200214&mCos_Class=A&mSmtr=1061&cos_data=')" style="cursor:hand;" >

                    <td>資工系碩士班1年級</td>
                    <td><div align="center">EE200214A</div></td>
                    <td>使用者導向智慧終端整合設計與前瞻應用專題</td>

                    <td><div align="center">選</div></td>
                    <td><div align="center">3</div></td>
                    <td><div align="center">6/35</div></td>

                    <td>陳永欽,陳兆南</td>
                    <td>
                        (四)789 I533  </td>
                    <td><div align="left"></div></td>
                    <td></td>

                </tr>


                <tr onclick="doitme('course_outline_guidan.asp?mCos_id=EE300037&mCos_Class=D&mSmtr=1061')" style="cursor:hand;" >

                    <td>資工系1年級</td>
                    <td><div align="center">EE300037D</div></td>
                    <td>學輔時間(一)</td>

                    <td><div align="center">必</div></td>
                    <td><div align="center">0</div></td>
                    <td><div align="center">17/20</div></td>

                    <td>陳兆南</td>
                    <td>
                        (三)8 I426   </td>
                    <td><div align="left"></div></td>
                    <td></td>

                </tr>


                <tr onclick="doitme('course_outline_S6.asp?mCos_id=EE320047&mCos_Class=A&mSmtr=1061&cos_data=')" style="cursor:hand;" >

                    <td>資工系(數位組)2年級</td>
                    <td><div align="center">EE320047A</div></td>
                    <td>多媒體導論</td>

                    <td><div align="center">選</div></td>
                    <td><div align="center">3</div></td>
                    <td><div align="center">47/50</div></td>

                    <td>陳兆南</td>
                    <td>
                        (一)9 H103 (二)78 H103    </td>
                    <td><div align="left">系定專業選修學程(數位內容服務平台學程)</div></td>
                    <td></td>

                </tr>


                <tr onclick="doitme('course_outline_S6.asp?mCos_id=EE320676&mCos_Class=A&mSmtr=1061&cos_data=')" style="cursor:hand;" >

                    <td>資工系(數位組)4年級</td>
                    <td><div align="center">EE320676A</div></td>
                    <td>行動遊戲設計</td>

                    <td><div align="center">選</div></td>
                    <td><div align="center">3</div></td>
                    <td><div align="center">40/41</div></td>

                    <td>陳兆南</td>
                    <td>
                        (三)567 I627   </td>
                    <td><div align="left">系定專業選修學程(數位內容技術與設計學程)</div></td>
                    <td></td>

                </tr>


                <tr onclick="doitme('course_outline_S6.asp?mCos_id=EE400119&mCos_Class=A&mSmtr=1061&cos_data=')" style="cursor:hand;" >

                    <td>資工系碩專班1年級</td>
                    <td><div align="center">EE400119A</div></td>
                    <td>互動式多媒體設計理論與實務</td>

                    <td><div align="center">選</div></td>
                    <td><div align="center">3</div></td>
                    <td><div align="center">9/20</div></td>

                    <td>陳永欽,陳兆南</td>
                    <td>
                        (一)BCD I533     </td>
                    <td><div align="left">所定選修</div></td>
                    <td></td>

                </tr>


                <tr onclick="doitme('course_outline_S6.asp?mCos_id=EE400120&mCos_Class=A&mSmtr=1061&cos_data=')" style="cursor:hand;" >

                    <td>資工系碩專班1年級</td>
                    <td><div align="center">EE400120A</div></td>
                    <td>數位教學設計與實作</td>

                    <td><div align="center">選</div></td>
                    <td><div align="center">3</div></td>
                    <td><div align="center">14/15</div></td>

                    <td>陳兆南</td>
                    <td>
                        (二)BCD I627    </td>
                    <td><div align="left">所定選修</div></td>
                    <td></td>

                </tr>


                <tr onclick="doitme('course_outline_S6.asp?mCos_id=GOG00272&mCos_Class=A&mSmtr=1061&cos_data=')" style="cursor:hand;" >

                    <td>通識課程1年級</td>
                    <td><div align="center">GOG00272A</div></td>
                    <td>物理與生活-3</td>

                    <td><div align="center">通識</div></td>
                    <td><div align="center">2</div></td>
                    <td><div align="center">58/60</div></td>

                    <td>陳兆南</td>
                    <td>
                        (一)34 M314     </td>
                    <td><div align="left">通識博雅課程-自然類</div></td>
                    <td></td>

                </tr>


                <tr onclick="doitme('course_outline_S6.asp?mCos_id=GOG00330&mCos_Class=A&mSmtr=1061&cos_data=')" style="cursor:hand;" >

                    <td>通識課程1年級</td>
                    <td><div align="center">GOG00330A</div></td>
                    <td>材料科學之生活與應用-4</td>

                    <td><div align="center">通識</div></td>
                    <td><div align="center">2</div></td>
                    <td><div align="center">70/70</div></td>

                    <td>陳兆南</td>
                    <td>
                        (二)56 I310    </td>
                    <td><div align="left">通識博雅課程-應用類</div></td>
                    <td></td>
                </tr>
            </table>


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