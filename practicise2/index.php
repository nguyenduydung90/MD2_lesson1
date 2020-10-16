<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style type="text/css">
    .login{
        height: 180px;width: 230px;
        margin: 0;
        padding: 10px;
        border: 1px #CCC solid;
    }
    .login input{
        padding: 5px;margin: 5px;
    }
</style>
<body>
<form action="" method="post">
    <div class="login">
        <h1>Login</h1>
        <input type="text" name="user" size="20" placeholder="username">
        <input type="text" name="pass" size="20" placeholder="password">
        <button type="submit">Sing in</button>
    </div>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $use=$_REQUEST['user'];
    $pass=$_REQUEST['pass'];
    if($use=='admin'&& $pass=='admin'){
        echo '<h2>Wellcome <span style="color: red"'.$use.'</span> to website</h2>';
        }
        else {
            echo "<h2><span style='color: blue'>Login Error</span></h2>";
        }

}
?>
</body>
</html>
