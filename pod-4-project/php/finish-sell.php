<?php
$customer_id = $_POST['customer_id'];
$product_id = $_POST['product_id'];
$quantities = $_POST['quantity'];



include 'db.php';

$sql = "INSERT INTO sells (customer_id, product_id, quantity) VALUES ('$customer_id', '$product_id', '$quantities')";

mysqli_query($conn, $sql);

header('location: ../pages/sell-list.php');


