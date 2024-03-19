<?php 
include '../back_end/users_migrations.php';
header('Content-type: application/json');

$migrations = new Users_migrations();
$data = $migrations->createTable();

echo json_encode($data);
?>