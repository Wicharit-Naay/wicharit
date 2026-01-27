<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>วิชาฤทธิ์ ร้อยคำลือ (นะนาย)</title>
</head>
<body>
    <h1>วิชาฤทธิ์ ร้อยคำลือ (นะนาย)</h1>
    <table border="1">
        <tr>
            <th>Order ID</th>
            <th>สินค้า</th>
            <th>ประเภทสินค้า</th>
            <th>วันที่</th>
            <th>ประเทศ</th>
            <th>จำนวนเงิน</th>
            <th>รูป</th>
        </tr>

        <?php
        include_once("connectdb.php");
        //$sql = "SELECT * FROM `popsupermarket` 
        //WHERE p_country = 'Sweden' 
        //AND p_category = 'Vegetables'
        //ORDER BY p_product_name ASC";
        $sql = "SELECT * FROM `popsupermarket`";
        $rs = mysqli_query($conn, $sql);
        $total = 0;
        while ($data = mysqli_fetch_array($rs)){
            $total += $data['p_amount'];
        ?>
        <tr>
            <td><?php echo $data['p_order_id'];?></td>
            <td><?php echo $data['p_product_name'];?></td>
            <td><?php echo $data['p_category'];?></td>
            <td><?php echo $data['p_date'];?></td>
            <td><?php echo $data['p_country'];?></td>
            <td align ="right"><?php echo number_format($data['p_amount'],0);?></td>
            <td><img src="<?php echo $data['p_product_name'];?>.jpg" width="55"></td>
        </tr>
        <?php } ?>

        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><b><?php echo number_format($total,0);?></b></td>
            <td>&nbsp;</td>
        </tr>
    </table>
</body>
</html>