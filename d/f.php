<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สรุปข้อมูลใบสมัคร - AuraTech Solutions</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --ios-card: rgba(255, 255, 255, 0.75);
            --ios-blur: blur(30px);
            --text-main: #1C1C1E;
            --text-sec: #8E8E93;
        }

        body {
            font-family: 'Prompt', 'Inter', sans-serif;
            /* ใช้พื้นหลังเดียวกับหน้าฟอร์มเพื่อให้ดูลื่นไหล */
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            background-attachment: fixed;
            min-height: 100vh;
            padding: 40px 0;
            color: var(--text-main);
        }

        .glass-card {
            background: var(--ios-card);
            backdrop-filter: var(--ios-blur);
            -webkit-backdrop-filter: var(--ios-blur);
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: auto;
            overflow: hidden; /* เพื่อให้ส่วนหัวโค้งตาม Card */
        }

        .card-header-custom {
            background: rgba(255, 255, 255, 0.5);
            padding: 30px;
            text-align: center;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .card-body-custom {
            padding: 40px;
        }

        /* iOS Settings List Style */
        .info-group {
            background: rgba(255, 255, 255, 0.5);
            border-radius: 12px;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 16px 20px;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            align-items: baseline;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .label {
            font-weight: 500;
            color: var(--text-main);
            min-width: 140px;
        }

        .value {
            color: #636366;
            text-align: right;
            font-weight: 400;
        }

        /* สำหรับข้อมูลยาวๆ เช่น Skills */
        .info-block {
            padding: 20px;
        }
        .info-block .label {
            display: block;
            margin-bottom: 8px;
            color: var(--text-main);
        }
        .info-block .value {
            text-align: left;
            background: rgba(255,255,255,0.6);
            padding: 15px;
            border-radius: 8px;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            background: #34C759; /* iOS Green */
            color: white;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-top: 10px;
            box-shadow: 0 2px 8px rgba(52, 199, 89, 0.3);
        }

        .btn-back {
            color: #007AFF;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: opacity 0.2s;
        }
        .btn-back:hover {
            color: #0056b3;
            opacity: 0.8;
        }

        .btn-print {
            background: #007AFF;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 24px;
            font-weight: 500;
            transition: transform 0.2s;
        }
        .btn-print:hover {
            transform: scale(1.02);
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="glass-card">
        
        <?php
        // ตรวจสอบว่ามีการส่งค่ามาจริงหรือไม่
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $position = htmlspecialchars($_POST['position']);
            $prefix = htmlspecialchars($_POST['prefix']);
            $fullname = htmlspecialchars($_POST['fullname']);
            $dob = htmlspecialchars($_POST['dob']);
            $education = htmlspecialchars($_POST['education']);
            $skills = !empty($_POST['skills']) ? nl2br(htmlspecialchars($_POST['skills'])) : "- ไม่มีข้อมูล -";
            $experience = !empty($_POST['experience']) ? nl2br(htmlspecialchars($_POST['experience'])) : "- ไม่มีข้อมูล -";

            // คำนวณอายุจากวันเกิด
            $birthDate = new DateTime($dob);
            $today = new DateTime();
            $age = $today->diff($birthDate)->y;
            $dob_formatted = $birthDate->format('d/m/Y'); // จัดรูปแบบวันที่
        } else {
            // กรณีเข้าไฟล์นี้โดยตรงไม่ได้ผ่านฟอร์ม
            echo "<div class='p-5 text-center'><h3>ไม่พบข้อมูล</h3><p>กรุณากรอกข้อมูลผ่านแบบฟอร์ม</p><a href='e.php' class='btn btn-primary'>กลับหน้าแรก</a></div>";
            exit;
        }
        ?>

        <div class="card-header-custom">
            <div style="font-size: 3rem; margin-bottom: 10px;">📄</div>
            <h3 class="mb-1">ข้อมูลใบสมัครงาน</h3>
            <p class="text-muted mb-0">Application Summary</p>
            <span class="status-badge">ยืนยันการส่งข้อมูลเรียบร้อย</span>
        </div>

        <div class="card-body-custom">
            
            <h5 class="mb-3 text-primary">ข้อมูลส่วนตัว (Personal Details)</h5>
            <div class="info-group">
                <div class="info-row">
                    <span class="label">ชื่อ-นามสกุล</span>
                    <span class="value"><?php echo $prefix . " " . $fullname; ?></span>
                </div>
                <div class="info-row">
                    <span class="label">วันเกิด</span>
                    <span class="value"><?php echo $dob_formatted; ?> (อายุ <?php echo $age; ?> ปี)</span>
                </div>
                <div class="info-row">
                    <span class="label">ระดับการศึกษา</span>
                    <span class="value"><?php echo $education; ?></span>
                </div>
            </div>

            <h5 class="mb-3 text-primary">ตำแหน่งที่สมัคร (Job Position)</h5>
            <div class="info-group">
                <div class="info-row">
                    <span class="label">ตำแหน่ง</span>
                    <span class="value fw-bold text-dark"><?php echo $position; ?></span>
                </div>
                <div class="info-row">
                    <span class="label">วันที่สมัคร</span>
                    <span class="value"><?php echo date("d/m/Y H:i"); ?></span>
                </div>
            </div>

            <h5 class="mb-3 text-primary">คุณสมบัติเพิ่มเติม (Qualifications)</h5>
            <div class="info-group">
                <div class="info-block border-bottom">
                    <span class="label">ความสามารถพิเศษ</span>
                    <div class="value"><?php echo $skills; ?></div>
                </div>
                <div class="info-block">
                    <span class="label">ประสบการณ์ทำงาน</span>
                    <div class="value"><?php echo $experience; ?></div>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-5">
                <a href="javascript:history.back()" class="btn-back">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left me-1" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                    </svg>
                    แก้ไขข้อมูล
                </a>
                <button onclick="window.print()" class="btn btn-print">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill me-2" viewBox="0 0 16 16">
                        <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                        <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                    </svg>
                    พิมพ์ใบสมัคร
                </button>
            </div>

        </div>
    </div>
</div>

</body>
</html>