<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="money" size="10" placeholder="enter number">
    <input type="text" name="interset" size="10" placeholder="enter interset of year">
    <input type="text" name="year" size="10" placeholder="enter year">
    <button type="submit">Result</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $money=$_REQUEST['money'];
    $inter=$_REQUEST['interset'];
    $year=$_REQUEST['year'];
    $total=0;
    for($i=1;$i<=$year;$i++){
        $total=($money+($money*$inter))*$i;
    }
    echo $total;
}
?>
</body>
</html>
