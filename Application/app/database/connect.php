<?php

function connect() {
  $dotenv = Dotenv\Dotenv::createImmutable(ROOT_PATH);
  $dotenv->safeLoad();

  $host = $_ENV['MYSQLHOST'];
  $database = $_ENV['MYSQLDATABASE'];
  $port = $_ENV['MYSQLPORT'];
  $user = $_ENV['MYSQLUSER'];
  $password = $_ENV['MYSQL_ROOT_PASSWORD'];

  return new PDO("mysql:host={$host};dbname={$database};charset=utf8;port={$port}", $user, $password, [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
  ]);
}