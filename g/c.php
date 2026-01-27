<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>วิชาฤทธิ์ ร้อยคำลือ (นะนาย) - Dynamic Total</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    
    <style>
        body { padding: 20px; background-color: #f4f7f6; }
        .table-container { background: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); }
        .total-highlight { font-size: 1.2rem; font-weight: bold; color: #dc3545; }
    </style>
</head>
<body>

<div class="container-fluid table-container">
    <h1 class="mb-4 text-primary">วิชาฤทธิ์ ร้อยคำลือ (นะนาย)</h1>
    
    <table id="myDataTable" class="table table-striped table-hover border" style="width:100%">
        <thead class="table-dark">
            <tr>
                <th>Order ID</th>
                <th>สินค้า</th>
                <th>ประเภทสินค้า</th>
                <th>วันที่</th>
                <th>ประเทศ</th>
                <th>จำนวนเงิน</th>
                <th>รูป</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once("connectdb.php");
            $sql = "SELECT * FROM `popsupermarket`";
            $rs = mysqli_query($conn, $sql);
            while ($data = mysqli_fetch_array($rs)){
            ?>
            <tr>
                <td><?php echo $data['p_order_id'];?></td>
                <td><?php echo $data['p_product_name'];?></td>
                <td><?php echo $data['p_category'];?></td>
                <td><?php echo $data['p_date'];?></td>
                <td><?php echo $data['p_country'];?></td>
                <td align="right" data-order="<?php echo $data['p_amount'];?>">
                    <?php echo number_format($data['p_amount'], 0);?>
                </td>
                <td align="center">
                    <img src="<?php echo $data['p_product_name'];?>.jpg" width="40" class="img-thumbnail" onerror="this.src='https://via.placeholder.com/40'">
                </td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot class="table-light">
            <tr>
                <th colspan="5" style="text-align:right">ยอดรวมที่ค้นหาพบ:</th>
                <th id="sum_display" style="text-align:right" class="total-highlight">0</th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#myDataTable').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.13.7/i18n/th.json"
        },
        "footerCallback": function (row, data, start, end, display) {
            var api = this.api();

            // ฟังก์ชันสำหรับลบเครื่องหมายคอมมาออกก่อนคำนวณ
            var intVal = function (i) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ? i : 0;
            };

            // คำนวณยอดรวมของข้อมูลที่แสดงอยู่ (Filtered data)
            var total = api
                .column(5, { page: 'current' }) // คอลัมน์ที่ 5 (จำนวนเงิน) เฉพาะหน้าที่แสดง
                .data()
                .reduce(function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0);
            
            // กรณีต้องการยอดรวมทั้งหมดที่ค้นหาเจอ (ทุกหน้า)
            var totalAllPages = api
                .column(5, { search: 'applied' }) 
                .data()
                .reduce(function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0);

            // อัปเดตตัวเลขใน Footer
            $(api.column(5).footer()).html(
                totalAllPages.toLocaleString(undefined, {minimumFractionDigits: 0})
            );
        }
    });
});
</script>

</body>
</html>