<?php
require_once "./db_connect.php";

$sql = "INSERT INTO users (name, password) VALUES ('Taro Yamada', 'taro')";
$pdo = db_connect();
try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    echo "インサートしました";
}catch(Exception $e){
    echo "Error:". $e->getMessage();
    die();
}
?>