<?php
    try{
        $db = new PDO ('mysql:dbname=testdb;host=127.0.0.1;charset=utf8', 
        'root','root');
    } catch(PDOexception $e) {
        echo 'DB接続エラー' . $e->getMessage();
    }
?>