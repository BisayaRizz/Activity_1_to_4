<?php 

    $conn = new mysqli('localhost', 'root', '');

    $conn->query("CREATE DATABASE IF NOT EXISTS api_db");

    echo $conn->error;

?>