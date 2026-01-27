<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>วิชาฤทธิ์ ร้อยคำลือ</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --ios-bg: #F2F2F7;
            --ios-card: rgba(255, 255, 255, 0.65);
            --ios-primary: #007AFF;
            --ios-blur: blur(25px);
            --text-main: #1C1C1E;
            --text-sec: #8E8E93;
        }

        body {
            font-family: 'Prompt', 'Inter', sans-serif;
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); /* Pastel Gradient */
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px 0;
            color: var(--text-main);
        }

        /* Glassmorphism Card Style */
        .glass-card {
            background: var(--ios-card);
            backdrop-filter: var(--ios-blur);
            -webkit-backdrop-filter: var(--ios-blur);
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            padding: 40px;
            max-width: 700px;
            width: 100%;
            margin: auto;
            transition: transform 0.3s ease;
        }

        .header-logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .header-logo h2 {
            font-weight: 600;
            letter-spacing: -0.5px;
            background: -webkit-linear-gradient(45deg, #007AFF, #5856D6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Custom Input Style (iOS Feel) */
        .form-label {
            font-weight: 500;
            color: #3A3A3C;
            font-size: 0.95rem;
            margin-bottom: 8px;
        }

        .form-control, .form-select {
            background-color: rgba(255, 255, 255, 0.5);
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 12px;
            padding: 12px 15px;
            font-size: 1rem;
            transition: all 0.2s ease;
            box-shadow: inset 0 1px 2px rgba(0,0,0,0.02);
        }

        .form-control:focus, .form-select:focus {
            background-color: #fff;
            box-shadow: 0 0 0 4px rgba(0, 122, 255, 0.15);
            border-color: var(--ios-primary);
        }

        /* Custom Button */
        .btn-ios {
            background: linear-gradient(180deg, #007AFF 0%, #0062CC 100%);
            border: none;
            border-radius: 14px;
            padding: 14px;
            font-weight: 600;
            font-size: 1.1rem;
            width: 100%;
            color: white;
            box-shadow: 0 4px 12px rgba(0, 122, 255, 0.3);
            transition: all 0.3s ease;
        }

        .btn-ios:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 122, 255, 0.4);
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="glass-card">
        <div class="header-logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-layers-fill mb-2 text-primary" viewBox="0 0 16 16">
                <path d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882l7.5-4z"/>
                <path d="M2.125 8.567l-1.86.992a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 0 1-1.41 0L2.125 8.567z"/>
            </svg>
            <h2>วิชาฤทธิ์ ร้อยคำลือ (นะนาย)</h2>
            <p class="text-muted small">แบบฟอร์มสมัครงาน (Employment Application)</p>
        </div>

        <form action="f.php" method="post">
            
            <div class="mb-4">
                <label for="position" class="form-label">ตำแหน่งที่ต้องการสมัคร (Position)</label>
                <select class="form-select" id="position" name="position" required>
                    <option value="" selected disabled>เลือกตำแหน่งงาน...</option>
                    <option value="UX/UI Designer">Senior UX/UI Designer</option>
                    <option value="Full Stack Developer">Full Stack Developer (PHP/React)</option>
                    <option value="AI Engineer">AI & Machine Learning Engineer</option>
                    <option value="Digital Marketing">Digital Marketing Manager</option>
                    <option value="Data Analyst">Data Analyst</option>
                </select>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 mb-3 mb-md-0">
                    <label for="prefix" class="form-label">คำนำหน้า (Title)</label>
                    <select class="form-select" id="prefix" name="prefix" required>
                        <option value="นาย">นาย (Mr.)</option>
                        <option value="นาง">นาง (Mrs.)</option>
                        <option value="นางสาว">นางสาว (Ms.)</option>
                    </select>
                </div>
                <div class="col-md-8">
                    <label for="fullname" class="form-label">ชื่อ-นามสกุล (Full Name)</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="ระบุชื่อจริงและนามสกุล" required>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6 mb-3 mb-md-0">
                    <label for="dob" class="form-label">วันเดือนปีเกิด (Date of Birth)</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
                <div class="col-md-6">
                    <label for="education" class="form-label">ระดับการศึกษา (Education)</label>
                    <select class="form-select" id="education" name="education" required>
                        <option value="" selected disabled>เลือกระดับการศึกษา...</option>
                        <option value="มัธยมศึกษา">มัธยมศึกษาตอนปลาย / ปวช.</option>
                        <option value="อนุปริญญา">อนุปริญญา / ปวส.</option>
                        <option value="ปริญญาตรี">ปริญญาตรี (Bachelor's Degree)</option>
                        <option value="ปริญญาโท">ปริญญาโท (Master's Degree)</option>
                        <option value="ปริญญาเอก">ปริญญาเอก (Doctoral Degree)</option>
                    </select>
                </div>
            </div>

            <hr style="border-top: 1px solid rgba(0,0,0,0.1); margin: 30px 0;">

            <div class="mb-3">
                <label for="skills" class="form-label">ความสามารถพิเศษ (Special Skills)</label>
                <textarea class="form-control" id="skills" name="skills" rows="3" placeholder="เช่น ภาษาอังกฤษ, การเขียนโปรแกรม, การใช้งานโปรแกรมต่างๆ"></textarea>
            </div>

            <div class="mb-4">
                <label for="experience" class="form-label">ประสบการณ์ทำงาน (Work Experience)</label>
                <textarea class="form-control" id="experience" name="experience" rows="3" placeholder="ระบุตำแหน่งและสถานที่ทำงานที่ผ่านมา (ถ้ามี)"></textarea>
            </div>

            <button type="submit" class="btn btn-ios">ส่งใบสมัครงาน</button>
        </form>
        </div>
</div>

</body>
</html>