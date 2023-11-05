<?php
$host = $_ENV['MYSQLHOST'];
$password = $_ENV['MYSQL_ROOT_PASSWORD'];
echo $host." = ".$password;

// try {
//   $db = new PDO('mysql:host='.$host.';dbname=railway', 'root', $password);
//   echo 'Banco de dados acessado com sucesso';
// } catch (PDOException $e){
//   echo $e;
// }