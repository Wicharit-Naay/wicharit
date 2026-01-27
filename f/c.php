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
    กรอกคะแนน✏️ <input type="number" name="a" min="0" max="100" autofocus required>
    <button type="submit" name="Submit">🆗</button>
</form>
    <hr>
    <?php
     if(isset($_POST["Submit"] )){
        $score = $_POST["a"];

        if ($score >= 80) {
            $grade = "A | 😊" ;
            } else if ($score >= 70) {
            $grade = "B | 😃" ;
            } else if ($score >= 60) {
            $grade = "C | 🙂" ;
            } else if ($score >= 50) {
            $grade = "D | 😐" ;
            } else {
            $grade = "F | 🥺" ;
            }
            echo "🔴คะแนน $score 
            <hr>🟢ได้เกรด $grade" ;
     }
    ?>
</body>
</html>