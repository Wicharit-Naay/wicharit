<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login: วิชาฤทธิ์ ร้อยคำลือ (นะนาย)</title>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4a90e2;
            --bg-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        body {
            font-family: 'Sarabun', sans-serif;
            background: var(--bg-gradient);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            text-align: left;
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box; /* สำคัญเพื่อให้ padding ไม่ดันขนาด input */
            transition: border-color 0.3s;
        }

        input:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: var(--primary-color);
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
            margin-top: 10px;
        }

        button:hover {
            background-color: #357abd;
        }

        .footer-text {
            margin-top: 1.5rem;
            font-size: 0.8rem;
            color: #888;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h1>เข้าสู่ระบบหลังบ้าน</h1>
        <p style="color: #666; margin-bottom: 20px;">วิชาฤทธิ์ ร้อยคำลือ (นะนาย)</p>
        
        <form method="post" action="">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="auser" autofocus required placeholder="กรอกชื่อผู้ใช้">
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="apwd" required placeholder="กรอกรหัสผ่าน">
            </div>
            
            <button type="submit" name="Submit">Login</button>
        </form>
        
        <div class="footer-text">
            &copy; <?php echo date("Y"); ?> All Rights Reserved.
        </div>
    </div>

    <?php
    if(isset($_POST['Submit'])){
        include_once("connectdb.php");
        // กรองข้อมูลเบื้องต้นเพื่อความปลอดภัย (แนะนำ)
        $user = mysqli_real_escape_string($conn, $_POST['auser']);
        $pass = mysqli_real_escape_string($conn, $_POST['apwd']);
        
        $sql = "SELECT * FROM admin WHERE a_username = '$user' AND a_password='$pass' LIMIT 1";
        $rs = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($rs);

        if($num == 1){
            $data = mysqli_fetch_array($rs);
            $_SESSION['aid'] = $data['a_id'];
            $_SESSION['aname'] = $data['a_name'];  
            echo "<script>";
            echo "window.location='index2.php';";
            echo "</script>";
        } else{
            echo "<script>";
            echo "alert('เดี๋ยวๆ !!! รหัสผ่านของคุณไม่ถูกต้องนะครับ');";
            echo "</script>";
        }
    }
    ?>
</body>
</html>
