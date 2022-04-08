<?php

$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'LastFinally';
try{
  $link = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

}catch(PDOException $exception){
  echo("Ocoreu um problema, segue o erro: " . $exception);

}