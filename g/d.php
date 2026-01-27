<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>วิชาฤทธิ์ ร้อยคำลือ (นะนาย)</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .chart-container {
            width: 80%;
            margin: auto;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        canvas {
            max-width: 400px;
            max-height: 400px;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <h1>วิชาฤทธิ์ ร้อยคำลือ (นะนาย)</h1>
    <table border="1" width="50%">
        <tr>
            <th>ประเทศ</th>
            <th>ยอดขาย</th>
        </tr>

        <?php
        include_once("connectdb.php");
        $sql = "SELECT p_country, SUM(p_amount) AS total FROM popsupermarket GROUP BY p_country;";
        $rs = mysqli_query($conn, $sql);
        
        // สร้าง Array สำหรับเก็บข้อมูลไปใช้ใน Chart
        $labels = [];
        $data_values = [];

        while ($data = mysqli_fetch_array($rs)){
            // เก็บข้อมูลลง Array
            $labels[] = $data['p_country'];
            $data_values[] = $data['total'];
        ?>
        <tr>
            <td><?php echo $data['p_country'];?></td>
            <td align="right"><?php echo number_format($data['total'], 0);?></td>
        </tr>
        <?php } ?>
    </table>

    <hr>

    <div class="chart-container">
        <div>
            <h3>กราฟแท่ง (Bar Chart)</h3>
            <canvas id="barChart"></canvas>
        </div>
        <div>
            <h3>กราฟวงกลม (Pie Chart)</h3>
            <canvas id="pieChart"></canvas>
        </div>
    </div>

    <script>
        // 3. นำข้อมูลจาก PHP Array มาแปลงเป็น JavaScript Variable (JSON)
        const labels = <?php echo json_encode($labels); ?>;
        const dataValues = <?php echo json_encode($data_values); ?>;

        // กำหนดสีพื้นฐานสำหรับกราฟ
        const backgroundColors = [
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)'
        ];

        // สร้าง Bar Chart
        const ctxBar = document.getElementById('barChart').getContext('2d');
        new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'ยอดขายรวมตามประเทศ',
                    data: dataValues,
                    backgroundColor: backgroundColors,
                    borderColor: backgroundColors.map(color => color.replace('0.6', '1')),
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });

        // สร้าง Pie Chart
        const ctxPie = document.getElementById('pieChart').getContext('2d');
        new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: dataValues,
                    backgroundColor: backgroundColors,
                    hoverOffset: 4
                }]
            }
        });
    </script>
</body>
</html>