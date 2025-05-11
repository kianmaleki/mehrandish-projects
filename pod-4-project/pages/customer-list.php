<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست مشتریان</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>لیست مشتریان</h1>
        </header>
        
        <main>
            <div class="table-container">
                <div style="margin-bottom: 1rem;">
                    <a href="add-customer.html" class="btn">افزودن مشتری جدید</a>
                </div>
                
                <table>
                    <thead>
                        <tr>
                            <th>نام و نام خانوادگی</th>
                            <th>شماره تماس</th>
                            <th>ایمیل</th>
                            <th>نوع مشتری</th>
                            <th>آدرس</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                        include '../php/db.php';
                        $sql = "SELECT * FROM customers";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                            <td>" . $row['name'] . "</td>
                            <td>" . $row['phone'] . "</td>
                            <td>" . $row['email'] . "</td>
                            <td>" . $row['type'] . "</td>
                            <td>" . $row['address'] . "</td>
                        </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            
            <div style="text-align: center; margin-top: 1rem;">
                <a href="../index.html" class="btn">بازگشت به صفحه اصلی</a>
            </div>
        </main>
        
        <footer>
            <p>© ۱۴۰۳ سیستم مدیریت محصولات و مشتریان</p>
        </footer>
    </div>
</body>
</html> 