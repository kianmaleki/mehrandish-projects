<?php
$customerName = $_POST['customerName'];
$customerPhone = $_POST['customerPhone'];
$customerEmail = $_POST['customerEmail'];
$customerAddress = $_POST['customerAddress'];
$customerType = $_POST['customerType'];

include 'db.php';

$sql = "INSERT INTO customers (name, phone, email, address, type) VALUES ('$customerName', '$customerPhone', '$customerEmail', '$customerAddress', '$customerType')";

mysqli_query($conn, $sql);

header('location: ../pages/customer-list.php');

