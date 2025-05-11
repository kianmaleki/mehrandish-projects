<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت فروش جدید</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>ثبت فروش جدید</h1>
        </header>
        <main>
            <div class="form-container">
                <form id="sellForm" method="post" action="../php/finish-sell.php">
                    <div class="form-group">
                        <label for="customer">انتخاب مشتری:</label>
                        <select id="customer" name="customer_id" required>
                            <option value="">انتخاب کنید</option>
                            <?php
                            include '../php/db.php';
                            $sql = "SELECT * FROM customers";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div id="products-section">
                        <div class="form-group product-row">
                            <label>انتخاب کالا:</label>
                            <select name="product_id" required>
                                <option value="">انتخاب کنید</option>
                                <?php
                                $sql = "SELECT * FROM products";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row['id'] . "'>" . $row['name'] . " - " . $row['code'] . "</option>";
                                }
                                ?>
                            </select>
                            <input type="number" name="quantity" min="1" placeholder="تعداد" required style="width: 80px; display: inline-block;margin-top: 10px;">
                        </div>
                    </div>
                    <button type="submit" class="btn">ثبت فروش</button>
                </form>
            </div>
            <div style="text-align: center; margin-top: 1rem;">
                <a href="../index.html" class="btn">بازگشت به صفحه اصلی</a>
            </div>
        </main>
        <footer>
            <p>© ۱۴۰۳ سیستم مدیریت محصولات و مشتریان</p>
        </footer>
        <script src="../js/sell.js"></script>
    </div>
</body>
</html> 