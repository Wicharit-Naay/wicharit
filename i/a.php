<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>วิชาฤทธิ์ ร้อยคำลือ (นะนาย)</title>
</head>
<body>
    <h1>ข้อมูลภาค -- วิชาฤทธิ์ ร้อยคำลือ (นะนาย)</h1>
    
<form method="post" action="">
    ชื่อภาค <input type="text" name="rname" autofocus required>
    <button type="submit" name="Submit">บันทึก</button>
</form>
<br>
<br>

<?php
if(isset($_POST['Submit'])){
    include_once("connectdb.php");
    $rname = $_POST['rname'];
    $sql2 ="INSERT INTO `regions` VALUES (NULL, '{$rname}')";
    mysqli_query($conn,$sql2) or dir ("insert ไม่ได้");
}
?>

    <table border="1">
        <tr>
            <th>รหัสภาค</th>
            <th>ชื่อภาค</th>
        </tr>

        <?php
        include_once("connectdb.php");
        $sql = "SELECT * FROM `regions` ORDER BY `r_id` ASC";
        $rs = mysqli_query($conn,$sql);
        while($data = mysqli_fetch_array($rs)){
    ?>

        <tr>
            <td><?php echo $data['r_id'];?></td>
            <td><?php echo $data['r_name'];?></td>
        </tr>

        <?php }?>
    </table>

</body>
</html>