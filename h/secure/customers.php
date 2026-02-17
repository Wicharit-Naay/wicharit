<?php
include_once("check_login.php");
include_once("connectdb.php");
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จัดการลูกค้า - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background: #212529; color: white; }
        .sidebar a { color: rgba(255,255,255,0.8); text-decoration: none; padding: 12px 20px; display: block; transition: 0.3s; }
        .sidebar a:hover { background: #343a40; color: white; padding-left: 25px; }
        .sidebar a.active { background: #0d6efd; color: white; }
        .main-content { padding: 30px; }
        .card { border: none; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        .avatar-circle { width: 40px; height: 40px; background: #e9ecef; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #6c757d; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 p-0 sidebar d-none d-md-block shadow">
            <div class="p-4 text-center">
                <h5 class="fw-bold text-primary">ADMIN PANEL</h5>
                <p class="small text-muted mb-0"><i class="bi bi-person-circle"></i> <?php echo $_SESSION['aname']; ?></p>
            </div>
            <nav class="mt-2">
                <a href="index2.php"><i class="bi bi-speedometer2 me-2"></i> หน้าหลักแอดมิน</a>
                <a href="products.php"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a>
                <a href="orders.php"><i class="bi bi-cart-check me-2"></i> จัดการออเดอร์</a>
                <a href="customers.php" class="active"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a>
                <hr class="mx-3 border-secondary">
                <a href="logout.php" class="text-danger"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a>
            </nav>
        </div>

        <div class="col-md-9 col-lg-10 main-content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="fw-bold">รายชื่อลูกค้า</h3>
                    <p class="text-muted small mb-0">จัดการข้อมูลสมาชิกและประวัติการใช้งาน</p>
                </div>
                <div class="input-group w-25 shadow-sm">
                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control border-start-0" placeholder="ค้นหาลูกค้า...">
                </div>
            </div>

            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th class="ps-4" width="8%">#</th>
                                    <th width="30%">ชื่อ-นามสกุล</th>
                                    <th width="25%">อีเมล / เบอร์โทรศัพท์</th>
                                    <th width="15%">วันที่สมัคร</th>
                                    <th width="22%" class="text-center">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // ตัวอย่างคำสั่ง SQL (เปลี่ยนชื่อตาราง/คอลัมน์ตามจริง)
                                // $sql = "SELECT * FROM users ORDER BY user_id DESC";
                                // $query = mysqli_query($conn, $sql);
                                // while($row = mysqli_fetch_array($query)) { 
                                ?>
                                <tr>
                                    <td class="ps-4">1</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-circle me-3">สม</div>
                                            <div>
                                                <div class="fw-bold">สมชาย สายลม</div>
                                                <div class="text-muted small">ID: CUST-001</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div><i class="bi bi-envelope small"></i> somchai@email.com</div>
                                        <div class="text-muted small"><i class="bi bi-telephone small"></i> 081-234-5678</div>
                                    </td>
                                    <td>01 ก.พ. 2026</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-primary rounded-pill px-3 me-1">รายละเอียด</button>
                                        <button class="btn btn-sm btn-outline-danger rounded-pill px-3"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <?php // } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <nav class="mt-4">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">ก่อนหน้า</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">ถัดไป</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>