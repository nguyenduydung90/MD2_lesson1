<?php
include_once 'Calculate.php';

?>

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
    <div>
        <h1>Simple Calculator</h1>
        <span>First operand:<input type="text" name="first" placeholder="first number"></span>
        <span>Second operand:<input type="text" name="second" placeholder="second number"></span>
        <span>Operator:<select name="calcu">
                <option>+</option>
                <option>-</option>
                <option>x</option>
                <option>/</option>
            </select></span>
        <button type="submit">Calculate</button>
    </div>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $x=$_REQUEST['first'];
    $y=$_REQUEST['second'];
    $z=$_REQUEST['calcu'];
    $cal=new Calculate($x,$y);
    if($z=='+'){
        echo "Result: ".$cal->plus();
    }else if ($z=='-'){
        echo "Result: ".$cal->subtraction();
    }else if ($z=='x'){
        echo "Result: ".$cal->multiplication();
    }else{
        echo "Result: ".$cal->division();
    }
}
?>

</body>
</html>
