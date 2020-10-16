
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
<h2>Danh sach khach hang</h2>
<table border="1">
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
    </tr>
    <?php
    $customerlist = array(
    "1" => array("ten" => "Mai Văn Hoàn",
    "ngaysinh" => "1983-08-20",
    "diachi" => "Hà Nội",
    "anh" => "images/img1.jpg"),
    "2" => array("ten" => "Nguyễn Văn Nam",
    "ngaysinh" => "1983-08-20",
    "diachi" => "Bắc Giang",
    "anh" => "images/img2.jpg"),
    "3" => array("ten" => "Nguyễn Thái Hòa",
    "ngaysinh" => "1983-08-21",
    "diachi" => "Nam Định",
    "anh" => "images/img3.jpg"),
    "4" => array("ten" => "Trần Đăng Khoa",
    "ngaysinh" => "1983-08-22",
    "diachi" => "Hà Tây",
    "anh" => "images/img4.jpg"),
    "5" => array("ten" => "Nguyễn Đình Thi",
    "ngaysinh" => "1983-08-17",
    "diachi" => "Hà Nội",
    "anh" => "images/img5.jpg")
    );
    ?>

    <?php
    foreach($customerlist as $key=>$value):
    ?>
    <tr>
        <td><?php echo $key ?></td>
        <td><?php echo $value['ten'] ?></td>
        <td><?php echo $value['ngaysinh'] ?></td>
        <td><?php echo $value['diachi'] ?></td>

    </tr>
    <?php endforeach ?>

</table>
</body>
</html>
