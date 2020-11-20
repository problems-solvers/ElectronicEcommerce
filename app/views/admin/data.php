<?php
	$conn = new PDO("mysql:host=localhost;dbname=store", 'root', '');
    $stmt = $conn->prepare('select COUNT(order_status) as counts, staus  from orders GROUP BY order_status ');
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_OBJ);
echo json_encode($results);
?>