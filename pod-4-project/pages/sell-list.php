<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست فروش‌ها</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>لیست فروش‌ها</h1>
        </header>
        <main>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>کد فروش</th>
                            <th>نام مشتری</th>
                            <th>کالاها</th>
                            <th>تعداد</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../php/db.php';
                        $sql = "SELECT * FROM sells";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {

                            $customer_sql = "SELECT name FROM customers WHERE id = " . $row['customer_id'];
                            $customer_result = mysqli_query($conn, $customer_sql);
                            $customer = mysqli_fetch_assoc($customer_result);

                            $product_sql = "SELECT name FROM products WHERE id = " . $row['product_id']; 
                            $product_result = mysqli_query($conn, $product_sql);
                            $product = mysqli_fetch_assoc($product_result);

                            echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $customer['name'] . "</td>
                            <td>" . $product['name'] . "</td>
                            <td>" . $row['quantity'] . "</td>
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