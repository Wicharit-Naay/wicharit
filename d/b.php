<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>วิชาฤทธิ์ ร้อยคำลือ (นะนาย)</title>
</head>
<style>
</style>
<body>
    <h1>ฟอร์มสมาชิก | วิชาฤทธิ์ ร้อยคำลือ (นะนาย)</h1>
    <form method="post" action="">
        ชื่อ-สกุล<input type="text" name="fullname" required autofocus>*<br>
        เบอร์โทร<input type="text" name="phone"required>*<br>
        ความสูง<input type="number" name="height"step="0" max="220" min="100" required> ซม.*<br>
        สีที่ชอบ<input type="color" name="color"><br>
        สาขาวิชา
        <select name="major">
            <option value="การบัญชี">การบัญชี</option>
            <option value="การจัดการ">การจัดการ</option>
            <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
            <option value="ธุรกิจดิจิทัลและระบบสารสนเทศ">ธุรกิจดิจิทัลและระบบสารสนเทศ</option>
        </select><br>
        <!--<input type="submit" name="Submit" value="สมัครสมาขิก">-->
        <button type="submit" name="Submit">สมัครสมาขิก</button>
        <button type="reset">Reser</button>
        <button type="button" onclick="window.location='https://www.msu.ac.th';">Go to MSU</button>
        <button type="button" onclick="window.print();">พิมพ์</button>
    </form>
    <hr>

    <?php
    if(isset($_POST['Submit'])){
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $height = $_POST['height'];
        $color = $_POST['color'];
        $major = $_POST['major'];

        echo "ชื่อ-สกุล:".$fullname."<br>"; 
        echo "เบอร์โทร:".$phone."<br>";
        echo "ความสูง:".$height."<br>";
        echo "สีที่ชอบ:".$color."<div style='background:{$color}'> . </div>";
        echo "สาขาวิชา:".$major."<br>";
    }
    ?>
</body>
</html>