<?php 

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pdo_login';


try {
    $conn = new PDO("mysql:host={$server}, dbname={$dbname}", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}


?>