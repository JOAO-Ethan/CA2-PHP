<?php
    $dsn = 'mysql:host=localhost;dbname=D00263493';
    $username = 'D00263493';
    $password = '9Fq6Ufku';
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database/database_error.php');
        exit();
    }
?>