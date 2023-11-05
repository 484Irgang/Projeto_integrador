<?php
  require 'vendor/autoload.php';

  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->safeLoad();

  function getPDO() {
    try{
      $db = new PDO('mysql:host=viaduct.proxy.rlwy.net;dbname=railway;charset=utf8mb4;port=17472', 'root', 'CBac1AEAcchg3-1eCFHd64Ec3ba1a65H');
      $info = $db->query("SELECT * from student");
      print_r($info);
      echo 'conected';
    } catch( PDOException $e) {
      print_r($e);
    }
  }
  getPDO();

  print_r($_ENV);
?>