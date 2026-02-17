<?php
include_once("check_login.php");
include_once("connectdb.php"); // ดึงไฟล์เชื่อมต่อฐานข้อมูลมาเผื่อไว้เลย
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จัดการสินค้า - Admin Panel</title>
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
        .card { border: none; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.05); }
        .product-img { width: 50px; height: 50px; object-fit: cover; border-radius: 5px; }
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
                <a href="products.php" class="active"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a>
                <a href="orders.php"><i class="bi bi-cart-check me-2"></i> จัดการออเดอร์</a>
                <a href="customers.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a>
                <hr class="mx-3 border-secondary">
                <a href="logout.php" class="text-danger"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a>
            </nav>
        </div>

        <div class="col-md-9 col-lg-10 main-content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="fw-bold">จัดการสินค้า</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 small">
                            <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                    </nav>
                </div>
                <a href="product_add.php" class="btn btn-primary shadow-sm">
                    <i class="bi bi-plus-circle me-1"></i> เพิ่มสินค้าใหม่
                </a>
            </div>

            <div class="card shadow-sm">
                <div class="card-header bg-white py-3">
                    <h6 class="mb-0 fw-bold"><i class="bi bi-table me-2"></i>รายการสินค้าทั้งหมด</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th width="5%">ID</th>
                                    <th width="10%">รูปภาพ</th>
                                    <th width="35%">ชื่อสินค้า</th>
                                    <th width="15%">ราคา</th>
                                    <th width="15%">หมวดหมู่</th>
                                    <th width="20%" class="text-center">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="../images/sample.jpg" class="product-img" alt="Product"></td>
                                    <td>
                                        <div class="fw-bold text-dark">เสื้อยืด Oversize</div>
                                        <div class="text-muted small">คงเหลือ: 15 ชิ้น</div>
                                    </td>
                                    <td>฿290.00</td>
                                    <td><span class="badge bg-info-subtle text-info border border-info">เสื้อผ้า</span></td>
                                    <td class="text-center">
                                        <div class="btn-group border">
                                            <a href="product_edit.php?id=1" class="btn btn-sm btn-white text-primary" title="แก้ไข"><i class="bi bi-pencil-square"></i></a>
                                            <a href="product_delete.php?id=1" class="btn btn-sm btn-white text-danger" title="ลบ" onclick="return confirm('ยืนยันการลบสินค้า?')"><i class="bi bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>