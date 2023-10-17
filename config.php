<?php
    $dns = 'mysql:host=127.0.0.1;dbname=doan;charset=utf8mb4';
    $user = 'root';
    $pass = '';
    $options = ['PDO::ATTR_ERRMODE' => 'PDO::ERRMODE_EXCEPTION'];
    
    try
    {
        $conn = new PDO($dns, $user, $pass, $options);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    if (session_status() != PHP_SESSION_ACTIVE) {
        session_start();
    }

    date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
