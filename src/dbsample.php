<?php
    try {
        $dsn = 'mysql:dbname=yoyakudb;host=db';
        $db = new PDO($dsn, 'user01', 'user01pass');
        echo "接続に成功しました";
    } catch (PDOException $s) {
        echo "接続に失敗しました";
        echo $e->getMessage();
        exit;
    }
?>
