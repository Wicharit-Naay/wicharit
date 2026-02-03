<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>วิชาฤทธิ์ ร้อยคำลือ</title>
</head>
<body>
    <h1>a.php</h1>

    <?php
    $_SESSION['name']="วิชาฤทธิ์ ร้อยคำลือ";
    $_SESSION['nickname']="นะนาย";

    //echo $_SESSION['nickname'];
    //echo  $_SESSION['name'] ;
    ?>    

</body>
</html>