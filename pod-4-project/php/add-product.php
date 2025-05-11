<?php
$productName = $_POST['productName'];
$productCode = $_POST['productCode'];
$productPrice = $_POST['productPrice'];
$productCategory = $_POST['productCategory'];
$productDescription = $_POST['productDescription'];
$productStock = $_POST['productStock'];

include 'db.php';

// Prepare the SQL statement with proper column names
$sql = "INSERT INTO products (product_name, description, price, stock_quantity) VALUES (?, ?, ?, ?)";

// Create a prepared statement
$stmt = mysqli_prepare($conn, $sql);

// Bind parameters
mysqli_stmt_bind_param($stmt, "ssdi", $productName, $productDescription, $productPrice, $productStock);

// Execute the statement
mysqli_stmt_execute($stmt);

// Close the statement
mysqli_stmt_close($stmt);

header('location: ../pages/product-list.php');
