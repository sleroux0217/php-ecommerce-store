<?php

include('connection.php');

$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='tripods' LIMIT 4");

$stmt->execute();

$tripods = $stmt->get_result();//[]

?>