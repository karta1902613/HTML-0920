<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <title>陳兆南副教授-著作</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .row.content {
            background-color: #F0FAF0;
            height:2400px;
        }
        /*table*/

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
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">首頁</a></li>
                <li><a href="resume.php">簡歷</a></li>
                <li><a href="academic.php">學術</a></li>
                <li class="active"><a href="book.php">著作</a></li>
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
        <div class="col-sm-8 text-left">
            <h1>著作</h1>
            <hr>

            </h3>
            <div id="sites-canvas-main" class="sites-canvas-main">
                <div id="sites-canvas-main-content">
                    <p>期刊論文</p>
                    <div class="entry">
                        <table cellpadding="0" cellspacing="0" class="tb_main">
                            <tr class="odd">
                                <td width="5%">1</td>
                                <td>Ag–TiO2 composite photoelectrode for dye-sensitized solar cell  ，APPLIED PHYSICS A-MATERIALS SCIENCE & PROCESSING ,SCI <br>吳宛玉(Wan-Yu Wu)，徐俊發(Chun-Fa Hsu)，吳孟軍(Menq-Jion Wu)，陳兆南(CHAO-NAN CHEN)，黃俊杰(Jung-Jie Huang)<br/>2017&nbsp;Apr，123(5):1-8</td>
                            </tr>
                            <tr>
                                <td width="5%">2</td>
                                <td>Antireflection coating of SiO2 thin film in dye-sensitized solar cell prepared by liquid phase deposition  ，SURFACE & COATINGS TECHNOLOGY ,SCI <br>陳兆南(CHAO-NAN CHEN)，吳孟軍(Menq-Jion Wu)，徐俊發(Chun-Fa Hsu)，黃俊杰(Jung-Jie Huang)<br/>2017&nbsp;Jan，320():28-33</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">3</td>
                                <td>Surface passivation property of aluminum oxide thin film on silicon substrate by liquid phase deposition  ，THIN SOLID FILMS ,SCI <br>Che-Chun Lin(Che-Chun Lin)，Jung-Jie Huang(Jung-Jie Huang)，Dong-Sing Wuu(Dong-Sing Wuu)，陳兆南(CHAO-NAN CHEN)<br/>2016&nbsp;，618():118-123</td>
                            </tr>
                            <tr>
                                <td width="5%">4</td>
                                <td>Properties of double-layer Al2O3/TiO2 antireflection coatings by liquid phase deposition  ，THIN SOLID FILMS ,SCI <br>Dong-Sing Wuu(Dong-Sing Wuu)，Che-Chun Lin(Che-Chun Lin)，陳兆南(CHAO-NAN CHEN)，Hong-Hsiu Lee(Hong-Hsiu Lee)，Jung-Jie Hua(Jung-Jie Hua)<br/>2015&nbsp;Jun，584():248-252</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">5</td>
                                <td>Effects of Excimer Laser Annealing on Low-Temperature Solution Based Indium-Zinc-Oxide Thin Film Transistor Fabrication  ，Journal of Applied Research and Technology ,SCI <br>陳兆南(CHAO-NAN CHEN)，黃俊杰(Jung-Jie Huang)<br/>2014&nbsp;Sep，13(4):170-176</td>
                            </tr>
                            <tr>
                                <td width="5%">6</td>
                                <td>Characteristics of thin-film transistors based on silicon nitride passivation by excimer laser  patterning  ，THIN SOLID FILMS ,SCI <br>陳兆南(Chao-Nan Chen)，黃俊杰(Jung-Jie Huang)<br/>2013&nbsp;Feb，529():449-453</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">7</td>
                                <td>Effect of Electrical and Mechanical Stresses of Low Temperature a-Si:H TFTs Fabricated on Polyimide and Glass Substrates  ，THIN SOLID FILMS ,SCI <br>黃俊杰(Jung-Jie Huang)，陳兆南(Chao-Nan Chen)<br/>2013&nbsp;Feb，529():454-458</td>
                            </tr>
                            <tr>
                                <td width="5%">8</td>
                                <td>Taper angle of silicon nitride thin film control by laser direct pattern for transistors fabrication  ，Applied Mechanics and Materials ,EI <br>陳兆南(Chao-Nan Chen)，Huang, Jung-Jie(Huang, Jung-Jie)，Wu, Gwo-Mei(Wu, Gwo-Mei)，Chien, How-Wen(Chien, How-Wen)<br/>2013&nbsp;Jan，284-287():225-229</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">9</td>
                                <td>Size Effect of Silver Nanoparticle Melted into ZnO Nanorods for Photocatalytic Activity  ，Applied Mechanics and Materials ,EI <br>Jung Jie Hu(Jung Jie Hu)，Ching Hsun Chao(Ching Hsun Chao)，陳兆南(Chao-Nan Chen)，Chun Fa Hsu(Chun Fa Hsu)，Ming Wei Tsai(Ming Wei Tsai)<br/>2013&nbsp;Jan，284-287():367-374</td>
                            </tr>
                            <tr>
                                <td width="5%">10</td>
                                <td>Photo-resist Protected Technology Application on Solution-based IZO TFT  ，Advances in Information Sciences and Service Sciences ,EI <br>陳兆南(Chao-Nan Chen)，吳國梅(Gwo-Mei Wu)，蘇國輝(Kuo-Hui Su)，簡浩文(How-Wen Chien)，黃俊杰(Jung-Jie Huang)<br/>2012&nbsp;Nov，4(20):1-8</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">11</td>
                                <td>Surface modification of polyimide alignment films by ion beams for liquid crystal displays  ，SURFACE & COATINGS TECHNOLOGY ,SCI <br>H.W. Chien(H.W. Chien)，G.M. Wu(G.M. Wu)，C.W. Chiue(C.W. Chiue)，陳兆南(Chao-Nan Chen)<br/>2011&nbsp;Nov，206(5):797-800</td>
                            </tr>
                            <tr>
                                <td width="5%">12</td>
                                <td>Laser Direct Patterning of Organic Dielectric Passivation Layer for Fabricating Amorphous Silicon Thin-Film Transistors  ，JAPANESE JOURNAL OF APPLIED PHYSICS ,SCI <br>陳兆南(Chao-Nan Chen)，蘇國輝(Kuo-Hui Su)，陳永欽(Chen Yeong-Chin)<br/>2011&nbsp;Jun，50(6):066501-066504</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">13</td>
                                <td>Improved liquid crystal pretilt angles by patterned dual alignment coating structures  ，JOURNAL OF NANOSCIENCE AND NANOTECHNOLOGY ,SCI <br>Wu GM(Wu GM)，Chien HW(Chien HW)，陳兆南(Chao-Nan Chen)，Lin CY(Lin CY)，Huang JA(Huang JA)，Zeng HL(Zeng HL)<br/>2010&nbsp;Jul，10(7):4592-4595</td>
                            </tr>
                            <tr>
                                <td width="5%">14</td>
                                <td>Improved AMOLED with aligned poly-Si thinfilm transistors by laser annealing and chemical solution treatments  ，Physica B: Condensed Matter ,EI <br>G.M. Wu(G.M. Wu)，陳兆南(Chao-Nan Chen)，W.S. Feng(W.S. Feng)，H.C. Lu(H.C. Lu)<br/>2009&nbsp;，404(23-24):4649-4652</td>
                            </tr>
                        </table>
                        <p>研討會論文</p>
                    </div>
                    <div class="entry">
                        <table width="95%" border="0" cellpadding="0" cellspacing="0" class="tb_main">
                            <tr class="odd">
                                <td width="5%">1</td>
                                <td>Application of eBooks in Elementary School Disaster Prevention Education<br />the 2016 International Conference on Advanced Manufacture Technology and Industrial Application (AMTIA2016)<br />中國/上海，2016.9.25 ~ 2016.9.26<br />陳兆南、陳永欽、郁繼文、黃俊杰</td>
                            </tr>
                            <tr>
                                <td width="5%">2</td>
                                <td>Antireflection effect of SiO2 thin film of Dye-Sensitized Solar Cell Prepared by Liquid Phase Deposition<br />The International Conference on Technological Advances of Thin Films & Surface Coatings (Thinfilms2016)<br />新加坡，2016.7.12 ~ 2016.7.15<br />、、</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">3</td>
                                <td>Electrical characteristics of Al2O3 on p-type silicon substrate by liquid phase deposition<br />ThinFilms Workshop2015  cum the Thin Films Nanotechnology Conference<br />彰化縣大村鄉學府路大葉大學，2015.7.16 ~ 2015.7.17<br />、、陳永進、陳兆南、、</td>
                            </tr>
                            <tr>
                                <td width="5%">4</td>
                                <td>Effect of Magnetron Sputtering DC Power in Electrical and Optical Properties of Hydrogenated Ga-doped ZnO Films<br />ThinFilms Workshop2015  cum the Thin Films Nanotechnology Conference<br />彰化縣大村鄉大葉大學，2015.7.16 ~ 2015.7.17<br />陳兆南、、、、、</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">5</td>
                                <td>Surface Passivation of c-Si by Liquid Phase Deposition of Al2O3<br />ICMAT 2015, 8th International Conference on Materials for Advanced Technologies<br />新加坡新達城，2015.6.28 ~ 2015.7.3<br />陳兆南、、、、</td>
                            </tr>
                            <tr>
                                <td width="5%">6</td>
                                <td>Synthesis of silver nanoparticle by chemical reduction method for antibacterial application<br />The 7th International Conference on Technological Advances of Thin Films & Surface Coatings<br />Chongqing, China，2014.7.15 ~ 2014.7.18<br />、、</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">7</td>
                                <td>Efficiency enhancement in dye sensitized solar cell using silver nanoparticles<br />The 7th International Conference on Technological Advances of Thin Films & Surface Coatings<br />Chongqing, China，2014.7.15 ~ 2014.7.18<br />徐俊發</td>
                            </tr>
                            <tr>
                                <td width="5%">8</td>
                                <td>he concentration effect of silver nitrate for synthesis of silver nanowire by using polyol method<br />The 7th International Conference on Technological Advances of Thin Films & Surface Coatings<br />Chongqing, China，2014.7.15 ~ 2014.7.18<br />陳兆南、、、、、</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">9</td>
                                <td>Effect of Titanium Oxide Compact Layer of Dye-Sensitized Solar Cell Prepared by Liquid Phase Deposition<br />International Union Materials Research Societies - International Conference on Electronic Materials,<br />Taipei, Taiwan, 2014.，2014.6.10 ~ 2014.6.14<br />黃俊杰、吳孟軍、陳兆南、徐俊發、、</td>
                            </tr>
                            <tr>
                                <td width="5%">10</td>
                                <td>Characterization of Titanium Oxide Film on Stainless Steel Substrate by Liquid Phase Deposition<br />International Thin Films Conference<br />Taipei, Taiwan，2013.10</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">11</td>
                                <td>Synthesis of silver nanowire by polyol method for transparent conductive film application<br />International Conference on Metallurgical Coatings and Thin Films (ICMCTF) 2013<br />San Diego, CA, USA，2013.4.9</td>
                            </tr>
                            <tr>
                                <td width="5%">12</td>
                                <td>Size Effect of Silver Nanoparticle Melted into ZnO Nanorods for Photocatalytic Activity<br />International Conference on Engineering and Technology Innovation (ICETI) 2012<br />Kaohsiung, Taiwan，2012</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">13</td>
                                <td>Antireflection Coating using Fluorinated Titanium Oxide by Liquid Phase Deposition forSolar Cell Application<br />International Conference on Materials for Advanced Technologies (ICMAT 2011)<br />新加坡，2011.6.27 ~ 2011.7.1</td>
                            </tr>
                            <tr>
                                <td width="5%">14</td>
                                <td>Laser direct patterning application on PECVD silicon nitride dielectric passivation based a-Si thin film transistor fabrication<br />2011年美國真空協會國際電漿研討會(2011 AVS-IPW)<br />台灣_台北，2011.3.22 ~ 2011.3.25<br />黃俊杰、陳永欽、陳兆南、蘇國輝</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">15</td>
                                <td>Application of Laser Irradiation to Improve Transition Nucleus of Optically Compensated Bend mode Liquid Crystal Display<br />Thin Film 2010<br />中國哈爾濱，2010.7.11 ~ 2010.7.14<br />陳兆南</td>
                            </tr>
                            <tr>
                                <td width="5%">16</td>
                                <td>Photo-resist Protected Technology Application on High Performance Solution-based Indium Zinc Oxide Thin Film Transistor with Coplanar Homojunction Structure<br />Thin Film 2010 (11th-14th July 2010)<br />中國哈爾濱，2010.7.11 ~ 2011.7.14<br />陳兆南</td>
                            </tr>
                            <tr class="odd">
                                <td width="5%">17</td>
                                <td>Improved nucleation and transition in optically-compensated-bend displays by plasma beam treatments<br />ISPLASMA (2010)<br />Tokyo, Japan，2010.3.5 ~ 2010.3.9<br />陳兆南</td>
                            </tr>
                            <tr>
                                <td width="5%">18</td>
                                <td>Surfacemodification of polyimide alignment films by ion beams for liquid crystal displays<br />OPT 2010, 台灣光電科技研討會<br />台灣_台北<br />陳兆南</td>
                            </tr>
                        </table>
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