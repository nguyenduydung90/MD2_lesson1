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
    <input type="text" name="number" placeholder="enter number">
    <button type="submit">READ</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num = $_REQUEST['number'];
    $num1 = $num - 10;
    if ( $num < 10) {
        switch ($num) {
            case 0:
                echo 'zero';
                break;
            case 1:
                echo 'one';
                break;
            case 2:
                echo 'two';
                break;
            case 3:
                echo 'three';
                break;
            case 4:
                echo 'four';
                break;
            case 5:
                echo 'five';
                break;
            case 6:
                echo 'six';
                break;
            case 7:
                echo 'seven';
                break;
            case 8:
                echo 'eight';
                break;
            case 9:
                echo 'nice';
                break;
            default:
                echo 'chưa làm cái đọc số to hơn';
                break;

        }

    } else if ($num < 20) {
        switch ($num1) {
            case 0:
                echo 'ten';
                break;
            case 1:
                echo 'eleven';
                break;
            case 2:
                echo 'twelve';
                break;
            case 3:
                echo 'thirteen';
                break;
            case 4:
                echo 'fourteen';
                break;
            case 5:
                echo 'fifteen';
                break;
            case 6:
                echo 'sixteen';
                break;
            case 7:
                echo 'seventeen';
                break;
            case 8:
                echo 'eighteen';
                break;
            case 9:
                echo 'nineteen';
                break;
            default:
                echo 'Lớn hơn chưa làm';
                break;
        }
    }
}
?>
</body>
</html>
