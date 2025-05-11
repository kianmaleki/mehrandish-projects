<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست محصولات</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>لیست محصولات</h1>
        </header>
        
        <main>
            <div class="table-container">
                <div style="margin-bottom: 1rem;">
                    <a href="add-product.html" class="btn">افزودن محصول جدید</a>
                </div>
                
                <table>
                    <thead>
                        <tr>
                            <th>کد محصول</th>
                            <th>نام محصول</th>
                            <th>دسته‌بندی</th>
                            <th>قیمت (تومان)</th>
                            <th>موجودی</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                        include '../php/db.php';
                        $sql = "SELECT * FROM products";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                            <td>" . $row['code'] . "</td>
                            <td>" . $row['name'] . "</td>
                            <td>" . $row['category'] . "</td>
                            <td>" . $row['price'] . "</td>
                            <td>" . $row['stock'] . "</td>
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