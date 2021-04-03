<?php
namespace pdo;

Class PDO_connect{
    const DB_DATABASE = "yigroupBlog";
    const DB_USERNAME = "root";
    const DB_PASSWORD = "root";
    const PDO_DSN = "mysql:host=localhost; charset=utf8; dbname=".PDO_connect::DB_DATABASE;
}
try {
    $dbh = new \PDO (PDO_connect::PDO_DSN, PDO_connect::DB_USERNAME, PDO_connect::DB_PASSWORD);
    echo "DBと接続しました。";
}catch (PDOExeption $e){
    echo "Error:". $e->getMessage();
    die(); //明示的な例外キャッチ//暗黙的ー＞set_exception_handler();
}

?>