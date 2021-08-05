<?php
    try{
        $db = new PDO ('mysql:dbname=mydb;host=mydb.cle5jiuhhe8w.ap-northeast-1.rds.amazonaws.com;charset=utf8', 
        'root','root');
    } catch(PDOexception $e) {
        echo 'DB接続エラー' . $e->getMessage();
    }
?>