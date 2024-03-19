<?php
include '../back_end/users_profiles.php';
header('Content-type: application/json');

$results = new Users(); 
$data = $results->getAll();

echo json_encode($data);

?>