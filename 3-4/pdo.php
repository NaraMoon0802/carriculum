<?php

function connect(){
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "root";
    $db_name = "checktest4";
    $dsn = "mysql: host=$db_host; charset=utf8; dbname=$db_name";
    return new PDO($dsn, $db_user, $db_pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
?>