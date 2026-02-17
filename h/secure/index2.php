<?php
include_once("check_login.php");
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลักแอดมิน - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f4f7f6;
            min-height: 100vh;
        }
        .sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #212529;
            color: #fff;
            transition: all 0.3s;
        }
        .sidebar .nav-link {
            color: rgba(255,255,255,0.7);
            padding: 15px 20px;
            border-radius: 0;
        }
        .sidebar .nav-link:hover {
            color: #fff;
            background: rgba(255,255,255,0.1);
        }
        .sidebar .nav-link.active {
            color: #fff;
            background: #0d6efd;
        }
        .main-content {
            width: 100%;
            padding: 30px;
        }
        .navbar-custom {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body class="d-flex">

    <nav class="sidebar d-flex flex-column p-0 vh-100 sticky-top">
        <div class="p-4 text-center">
            <h5 class="fw-bold mb-0">Admin Panel</h5>
            <small class="text-muted">ระบบจัดการหลังบ้าน</small>
        </div>
        <hr class="mx-3 my-0">
        <div class="nav flex-column nav-pills mt-3">
            <a href="index2.php" class="nav-link active">
                <i class="bi bi-speedometer2 me-2"></i> หน้าหลักแอดมิน
            </a>
            <a href="products.php" class="nav-link">
                <i class="bi bi-box-seam me-2"></i> จัดการสินค้า
            </a>
            <a href="orders.php" class="nav-link">
                <i class="bi bi-cart3 me-2"></i> จัดการออเดอร์
            </a>
            <a href="customers.php" class="nav-link">
                <i class="bi bi-people me-2"></i> จัดการลูกค้า
            </a>
            <div class="mt-auto">
                <hr class="mx-3">
                <a href="logout.php" class="nav-link text-danger">
                    <i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ
                </a>
            </div>
        </div>
    </nav>

    <div class="main-content flex-grow-1">
        <header class="navbar navbar-custom rounded-4 p-3 mb-4 d-flex justify-content-between align-items-center">
            <h2 class="h5 mb-0 fw-bold text-dark">หน้าหลักแอดมิน - Dashboard</h2>
            <div class="dropdown">
                <span class="text-muted me-2 small">ยินดีต้อนรับคุณ</span>
                <span class="badge bg-light text-dark border p-2">
                    <i class="bi bi-person-circle me-1"></i>
                    <strong><?php echo $_SESSION['aname']; ?></strong>
                </span>
            </div>
        </header>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-4 text-center">
                        <div class="display-6 text-primary mb-2"><i class="bi bi-box-seam"></i></div>
                        <h6 class="text-muted">รายการสินค้า</h6>
                        <h4 class="fw-bold mb-0">จัดการคลังสินค้า</h4>
                        <a href="products.php" class="btn btn-sm btn-outline-primary mt-3">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-4 text-center">
                        <div class="display-6 text-success mb-2"><i class="bi bi-cart-check"></i></div>
                        <h6 class="text-muted">ออเดอร์ใหม่</h6>
                        <h4 class="fw-bold mb-0">ตรวจสอบคำสั่งซื้อ</h4>
                        <a href="orders.php" class="btn btn-sm btn-outline-success mt-3">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-4 text-center">
                        <div class="display-6 text-warning mb-2"><i class="bi bi-people"></i></div>
                        <h6 class="text-muted">ฐานลูกค้า</h6>
                        <h4 class="fw-bold mb-0">จัดการสมาชิก</h4>
                        <a href="customers.php" class="btn btn-sm btn-outline-warning mt-3">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>