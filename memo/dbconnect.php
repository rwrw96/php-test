<?php
    try{
        $db = new PDO ('mysql:dbname=phpdb;host=localhost;charset=utf8', 
        'root','root');
    } catch(PDOexception $e) {
        echo 'DB接続エラー' . $e->getMessage();
    }
?>