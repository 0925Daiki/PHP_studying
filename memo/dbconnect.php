<?php
//データベースと接続 catch以降は「例外処理」
try{
  $db = new PDO('mysql:dbname=my_db;host=127.0.0.1;charset=utf8','root','');
} catch(PDOException $e){
  echo 'DB接続エラー:' . $e->getMessage();
}
?>