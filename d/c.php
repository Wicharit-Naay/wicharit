<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>วิชาฤทธิ์ ร้อยคำลือ (นะนาย) | Gemini</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        :root {
            --ios-glass: rgba(255, 255, 255, 0.75);
            --ios-glass-dark: rgba(255, 255, 255, 0.15);
            --ios-blur: 20px;
            --primary-gradient: linear-gradient(135deg, #007AFF, #00C6FF);
            --accent-gradient: linear-gradient(135deg, #FF2D55, #FF9500);
        }

        body {
            font-family: 'Prompt', sans-serif;
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1d1d1f;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Card Design */
        .ios-card {
            background: rgba(255, 255, 255, 0.65);
            backdrop-filter: blur(30px);
            -webkit-backdrop-filter: blur(30px);
            border-radius: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .ios-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px 0 rgba(31, 38, 135, 0.25);
        }

        h1 {
            font-weight: 600;
            background: -webkit-linear-gradient(45deg, #1d1d1f, #434344);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Inputs */
        .form-control, .form-select {
            background: rgba(255, 255, 255, 0.5);
            border: none;
            border-radius: 1rem;
            padding: 1rem;
            box-shadow: inset 2px 2px 5px rgba(0,0,0,0.03);
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 0 0 4px rgba(0, 122, 255, 0.2);
            transform: scale(1.01);
        }

        /* Color Input Customization */
        input[type="color"] {
            height: 50px;
            cursor: pointer;
            padding: 5px;
        }

        /* Buttons */
        .btn-ios {
            border-radius: 50px;
            padding: 10px 25px;
            font-weight: 500;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            border: none;
        }

        .btn-primary-ios {
            background: var(--primary-gradient);
            color: white;
            box-shadow: 0 4px 15px rgba(0, 122, 255, 0.3);
        }

        .btn-primary-ios:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 122, 255, 0.5);
            color: white;
        }

        .btn-outline-ios {
            background: white;
            color: #333;
            border: 1px solid rgba(0,0,0,0.1);
        }
        
        .btn-outline-ios:hover {
            background: #f1f1f1;
            transform: scale(1.05);
        }

        /* Result Box */
        .result-box {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 1.5rem;
            border-left: 5px solid #00C6FF;
            animation: slideUp 0.5s ease-out;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .color-dot {
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            vertical-align: middle;
            margin-left: 10px;
        }
    </style>
</head>
<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                
                <div class="card ios-card p-4 p-md-5">
                    <div class="text-center mb-4">
                        <div class="badge bg-primary bg-opacity-10 text-primary rounded-pill mb-2 px-3 py-2">
                            MEMBER FORM
                        </div>
                        <h1 class="h3 mb-1">วิชาฤทธิ์ ร้อยคำลือ (นะนาย)</h1>
                        <p class="text-muted small">ระบบสมัครสมาชิก (Gemini Edition)</p>
                    </div>

                    <form method="post" action="" class="needs-validation" novalidate>
                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="ชื่อ-สกุล" required autofocus>
                            <label for="fullname"><i class="bi bi-person-fill me-2"></i>ชื่อ-สกุล</label>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="เบอร์โทร" required>
                                    <label for="phone"><i class="bi bi-telephone-fill me-2"></i>เบอร์โทร</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="height" name="height" placeholder="ความสูง" min="100" max="220" step="1" required>
                                    <label for="height"><i class="bi bi-rulers me-2"></i>ความสูง (ซม.)</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select" id="major" name="major" required>
                                <option value="" selected disabled>กรุณาเลือกสาขาวิชา</option>
                                <option value="การบัญชี">การบัญชี</option>
                                <option value="การจัดการ">การจัดการ</option>
                                <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                                <option value="ธุรกิจดิจิทัลและระบบสารสนเทศ">ธุรกิจดิจิทัลและระบบสารสนเทศ</option>
                            </select>
                            <label for="major"><i class="bi bi-mortarboard-fill me-2"></i>สาขาวิชา</label>
                        </div>

                        <div class="mb-4">
                            <label class="form-label text-muted small ms-2">สีที่ชอบ</label>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent border-0 ps-0">
                                    <i class="bi bi-palette-fill text-secondary"></i>
                                </span>
                                <input type="color" class="form-control form-control-color w-100 rounded-4" name="color" value="#007AFF" title="เลือกสีที่ชอบ">
                            </div>
                        </div>

                        <hr class="border-secondary opacity-10 my-4">

                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <button type="submit" name="Submit" class="btn btn-primary-ios flex-grow-1">
                                <i class="bi bi-check-circle-fill me-2"></i>สมัครสมาชิก
                            </button>
                            <button type="reset" class="btn btn-outline-ios">
                                <i class="bi bi-arrow-counterclockwise"></i> Reset
                            </button>
                        </div>

                        <div class="d-flex justify-content-center gap-3 mt-3">
                            <button type="button" class="btn btn-sm btn-light rounded-pill px-3 text-muted" onclick="window.location='https://www.msu.ac.th';">
                                <i class="bi bi-globe me-1"></i> Go to MSU
                            </button>
                            <button type="button" class="btn btn-sm btn-light rounded-pill px-3 text-muted" onclick="window.print();">
                                <i class="bi bi-printer me-1"></i> พิมพ์
                            </button>
                        </div>
                    </form>
                </div>

                <?php if(isset($_POST['Submit'])): 
                    $fullname = htmlspecialchars($_POST['fullname']);
                    $phone = htmlspecialchars($_POST['phone']);
                    $height = htmlspecialchars($_POST['height']);
                    $color = htmlspecialchars($_POST['color']);
                    $major = htmlspecialchars($_POST['major']);
                ?>
                <div class="result-box p-4 mt-4 shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-success text-white rounded-circle p-2 me-3">
                            <i class="bi bi-check-lg h4 m-0"></i>
                        </div>
                        <h4 class="m-0 text-success">บันทึกข้อมูลสำเร็จ</h4>
                    </div>
                    <div class="row g-2">
                        <div class="col-12 border-bottom pb-2">
                            <small class="text-muted">ชื่อ-สกุล</small><br>
                            <strong><?php echo $fullname; ?></strong>
                        </div>
                        <div class="col-6 border-bottom pb-2 pt-2">
                            <small class="text-muted">เบอร์โทร</small><br>
                            <?php echo $phone; ?>
                        </div>
                        <div class="col-6 border-bottom pb-2 pt-2">
                            <small class="text-muted">ความสูง</small><br>
                            <?php echo $height; ?> ซม.
                        </div>
                        <div class="col-6 pt-2">
                            <small class="text-muted">สาขาวิชา</small><br>
                            <?php echo $major; ?>
                        </div>
                        <div class="col-6 pt-2">
                            <small class="text-muted">สีที่ชอบ</small><br>
                            <span class="text-uppercase"><?php echo $color; ?></span>
                            <span class="color-dot" style="background:<?php echo $color; ?>"></span>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>