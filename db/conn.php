<?php 
    $host = '127.0.0.1';
    $db = 'attendance_db';
    $user = 'root';
    $pass = '';
    $charset = 'ut8mb4';

    $dsn = "mysql:host=$host;dbname=$db;$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        echo 'Hello Database';
    } catch(PDOException $e){
        throw new PDOException($e->getMessage());

    }

?>