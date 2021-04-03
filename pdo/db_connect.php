<?php
namespace pdo;
require_once "./pdo2/db_connect.php";
use pdo\pdo2\PDO_connect;
//DBの接続設定をしたPDOインスタンスをかえす。
function db_connect (){
    try{
        $pdo = new \PDO (PDO_connect::PDO_DSN, PDO_connect::PDO_USERNAME, PDO_connect::DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
        echo "接続が成功しました";
    }catch(PDOException $e){
        echo "Error:". $e->getMessage();
        die();
    }
}
db_connect();


?>