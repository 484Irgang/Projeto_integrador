<?php
$host = $_ENV['MYSQLHOST'];
$password = $_ENV['MYSQL_ROOT_PASSWORD'];

try {
  $db = new PDO('mysql:host=viaduct.proxy.rlwy.net;dbname=railway', 'root', $password);
  echo 'Banco de dados acessado com sucesso';
} catch (PDOException $e){
  echo $e;
}