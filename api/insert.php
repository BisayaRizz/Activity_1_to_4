<?php
include '../back_end/users_profiles.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $results = new Users();
    $data = $results->Userinserts($_POST);

    echo json_encode($data);
} else {
    echo json_encode([
        'status' => 400,
        'message' => 'Bad Request: Data should be sent via POST method'
    ]);
}
?>
