<?php
define("DB_DATABASE", "yigroupBlog");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("PDO_DSN", "mysql:host=localhost; charset=utf8; dbname=".DB_DATABASE);
//define();で定数を定義するとき、定数は文字列として扱う""か''が必要
//class内だとconst で定義。ex: const DB_DATABASE = "jigroupBlog";
function db_connect(){
    try{
        $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
        echo "success!!";
    } catch (PDOException $e){
        echo "Error:". $e->getMessage();
        die();
    }
}

?>