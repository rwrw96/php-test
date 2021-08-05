<?php
    try{
        $db = new PDO ('mysql:dbname=phpdb;host=http://3.112.125.4/;charset=utf8', 
        'root','root');
    } catch(PDOexception $e) {
        echo 'DB接続エラー' . $e->getMessage();
    }
?>