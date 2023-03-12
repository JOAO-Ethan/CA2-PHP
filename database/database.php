<?php
    $dsn = 'mysql:host=localhost;dbname=D00263493';
    $username = 'root';
    $password = 'root';
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database/database_error.php');
        exit();
    }
?>