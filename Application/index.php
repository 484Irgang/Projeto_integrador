<?php
  require 'vendor/autoload.php';

  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->safeLoad();

  function getPDO() {
    try{
      $host = $_ENV['MYSQLHOST'];
      $database = $_ENV['MYSQLDATABASE'];
      $user = $_ENV['MYSQLUSER'];
      $port = $_ENV['MYSQLPORT'];
      $password = $_ENV['MYSQL_ROOT_PASSWORD'];


      $db = new PDO('mysql:host='.$host.';dbname='.$database.';charset=utf8mb4;port='.$port, $user, $password);
      $info = $db->query("SELECT * from student");
      print_r($info);
      echo '<br> Banco de dados conectado <br>';
    } catch( PDOException $e) {
      print_r($e);
    }
  }
  getPDO();

  echo '<pre>';
  print_r($_ENV);
  echo '</pre>';
?>