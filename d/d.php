<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>วิชาฤทธิ์ ร้อยคำลือ (นะนาย) | GPT</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ฟอนต์ SF Pro (เหมือน iOS) -->
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">

<style>
    body {
        font-family: 'SF Pro Display', sans-serif;
        background: linear-gradient(145deg, #dbe8ff, #f4f7ff);
        min-height: 100vh;
        padding: 40px 10px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Glass effect card */
    .ios-card {
        background: rgba(255,255,255,0.35);
        border-radius: 25px;
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        padding: 30px;
        width: 100%;
        max-width: 450px;
        animation: fadein 0.8s ease;
    }

    @keyframes fadein {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .ios-title {
        font-weight: 700;
        font-size: 1.7rem;
        text-align: center;
        margin-bottom: 25px;
        color: #0a2540;
    }

    /* iOS button style */
    .ios-btn {
        border-radius: 14px;
        padding: 10px;
        font-size: 1.05rem;
        transition: 0.25s;
    }
    .ios-btn-primary {
        background: linear-gradient(120deg, #007aff, #0a84ff);
        border: none;
        color: white;
    }
    .ios-btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0,122,255,0.4);
    }

    .ios-btn-secondary {
        background: #ffffff;
        border: 1px solid #d9d9d9;
    }
    .ios-btn-secondary:hover {
        background: #f1f1f1;
    }

    /* Floating label */
    .form-floating label {
        font-size: 0.9rem;
        color: #666;
    }
</style>
</head>

<body>

<div class="ios-card">
    <h1 class="ios-title">ฟอร์มสมาชิก iOS Style</h1>

    <form method="post" action="">

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="fullname" required>
            <label for="fullname">ชื่อ - สกุล</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" required>
            <label for="phone">เบอร์โทร</label>
        </div>

        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="height" name="height" min="100" max="220" step="0.1" placeholder="height" required>
            <label for="height">ความสูง (ซม.)</label>
        </div>

        <div class="mb-3">
            <label class="form-label">สีที่ชอบ</label>
            <input type="color" class="form-control form-control-color" name="color">
        </div>

        <div class="form-floating mb-4">
            <select class="form-select" name="major" id="major">
                <option value="การบัญชี">การบัญชี</option>
                <option value="การจัดการ">การจัดการ</option>
                <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                <option value="ธุรกิจดิจิทัลและระบบสารสนเทศ">ธุรกิจดิจิทัลและระบบสารสนเทศ</option>
            </select>
            <label for="major">สาขาวิชา</label>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" name="Submit" class="ios-btn ios-btn-primary">สมัครสมาชิก</button>
            <button type="reset" class="ios-btn ios-btn-secondary">ล้างข้อมูล</button>
            <button type="button" onclick="window.location='https://www.msu.ac.th';" class="ios-btn ios-btn-secondary">ไปที่ MSU</button>
            <button type="button" onclick="window.print();" class="ios-btn ios-btn-secondary">พิมพ์</button>
        </div>

    </form>

    <hr class="my-4">

    <?php
    if(isset($_POST['Submit'])){
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $height = $_POST['height'];
        $color = $_POST['color'];
        $major = $_POST['major'];

        echo "<strong>ชื่อ-สกุล:</strong> ".$fullname."<br>";
        echo "<strong>เบอร์โทร:</strong> ".$phone."<br>";
        echo "<strong>ความสูง:</strong> ".$height."<br>";
        echo "<strong>สีที่ชอบ:</strong> ".$color.
             "<div style='width:50px; height:20px; border-radius:6px; background:{$color}'></div>";
        echo "<strong>สาขาวิชา:</strong> ".$major."<br>";
    }
    ?>

</div>

</body>
</html>
