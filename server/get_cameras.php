<?php

include('connection.php');


$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='cameras' LIMIT 4");

$stmt->execute();

$cameras_products = $stmt->get_result();//[]

?>