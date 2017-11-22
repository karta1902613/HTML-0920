<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:06
 */
$r=$_POST["r"];
$g=$_POST["g"];
$b=$_POST["b"];
$var=test;
$n=8;
$m=8;

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?php
echo"<table width='100' border='2'>";
for($i=1;$i<=$n;$i++){
    echo"<tr>";
    for($j=1;$j<=$m;$j++){
        $x=$i*$j;
        echo "<td style='width: 30px; text-align: center;'><span style='font-size: 2em;'>$x</span></td>";
    }
    echo"</tr>";
    //echo"<br>";
}
//echo "<h1 align='center'><span style='color:rgb($r,$g,$b)' $var></span> </h1>";
echo"</table>";
?>

</body>
</html>



