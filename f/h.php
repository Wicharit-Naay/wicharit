<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>วิชาฤทธิ์ ร้อยคำลือ (นะนาย)👑</title>
</head>
<body>
    <h1>วิชาฤทธิ์ ร้อยคำลือ (นะนาย)👑</h1>

    <form method="post" action="">
    รหัสนิสิต <input type="number" name="a" autofocus required>
    <button type="submit" name="Submit">🆗</button>
</form>
    <hr>
    <?php
     if(isset($_POST["Submit"] )){
        $id = $_POST["a"];
        $y = substr($id,0,2);
        echo "<img src = 'http://202.28.32.210/picture/{$y}/{$id}.jpg' width='400'";
        echo "{$y}";
     }
    ?>
</body>
</html>