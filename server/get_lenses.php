<?php

include('connection.php');


$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='lenses' LIMIT 4");

$stmt->execute();

$lenses = $stmt->get_result();//[]

?>