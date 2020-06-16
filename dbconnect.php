<?php
try {
    $db = new PDO('mysql:dbname=GCD;host=127.0.0.1;charset=utf8', 'root', 'EtDAz7J2nXQy3D2w');
} catch(PDOException $e) {
    echo 'DB接続エラー: ' . $e->getMessage();
}
?>