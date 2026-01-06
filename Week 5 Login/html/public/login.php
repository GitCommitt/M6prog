<?php
include_once("../source/dataclasses/mydb.php");

$connection = database_connect();
$result = $connection->query("SELECT 'het werkt' as nice");

$data = $result->fetch_all(MYSQLI_ASSOC);
header('Content-Type: application/json');
echo json_encode($data);
?>
