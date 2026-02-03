<?php
session_start();

// 1. ส่วนประมวลผลการ Login (PHP Logic)
if (isset($_POST['Submit'])) {
    include_once("connectdb.php");

    // ใช้ trim เพื่อตัดช่องว่างที่อาจเผลอกดมา
    $username = trim($_POST['auser']);
    $password = trim($_POST['apwd']);

    // ใช้ Prepared Statement เพื่อความปลอดภัย
    $stmt = mysqli_prepare($conn, "SELECT a_id, a_name, a_password FROM admin WHERE a_username = ? LIMIT 1");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_array($result);

    if ($data && $password === $data['a_password']) {
        // กรณีผ่าน: สร้าง Session และแจ้งเตือนสำเร็จ
        $_SESSION['aid'] = $data['a_id'];
        $_SESSION['aname'] = $data['a_name'];
        
        $msg = "ยินดีต้อนรับคุณ " . $data['a_name'];
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    import('https://cdn.jsdelivr.net/npm/sweetalert2@11').then(Swal => {
                        Swal.default.fire({
                            title: 'สำเร็จ!',
                            text: '$msg',
                            icon: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        }).then(() => {
                            window.location='index2.php';
                        });
                    });
                });
              </script>";
    } else {
        // กรณีไม่ผ่าน: แจ้งเตือนข้อผิดพลาด
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    import('https://cdn.jsdelivr.net/npm/sweetalert2@11').then(Swal => {
                        Swal.default.fire({
                            title: 'ผิดพลาด!',
                            text: 'Username หรือ Password ไม่ถูกต้อง',
                            icon: 'error',
                            confirmButtonText: 'ตกลง'
                        });
                    });
                });
              </script>";
    }
    mysqli_stmt_close($stmt);
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login: ระบบหลังบ้าน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f8f9fa;
        }
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="container login-container">
    <div class="row w-100 justify-content-center">
        <div class="col-md-5 col-lg-4">
            <div class="card p-4">
                <div class="card-body">
                    <h3 class="text-center mb-4 fw-bold text-primary">ระบบหลังบ้าน</h3>
                    <p class="text-center text-muted small mb-4">วิชาฤทธิ์ ร้อยคำลือ (นะนาย)</p>
                    
                    <form method="post" action="">
                        <div class="mb-3">
                            <label for="auser" class="form-label">ชื่อผู้ใช้งาน (Username)</label>
                            <input type="text" class="form-control" name="auser" id="auser" placeholder="กรอกชื่อผู้ใช้" autofocus required>
                        </div>
                        <div class="mb-4">
                            <label for="apwd" class="form-label">รหัสผ่าน (Password)</label>
                            <input type="password" class="form-control" name="apwd" id="apwd" placeholder="กรอกรหัสผ่าน" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="Submit" class="btn btn-primary btn-lg">เข้าสู่ระบบ</button>
                        </div>
                    </form>
                </div>
            </div>
            <p class="text-center mt-4 text-secondary small">&copy; 2026 MBS</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>