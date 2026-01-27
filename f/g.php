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
    แม่สูตรคูณ <input type="number" name="a" min="0" max="100" autofocus required>
    <button type="submit" name="Submit">🆗</button>
</form>
    <hr>
    <?php
     if(isset($_POST["Submit"] )){
        $m = $_POST["a"];

        for($i=1;$i<=12;$i++){
            $b = $m*$i;
            echo "{$m}x{$i} = {$b} <br>";
        }
     }
    ?>
</body>
</html>