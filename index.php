<?php
function onConnectDB() {
  $password = $_ENV['MYSQL_ROOT_PASSWORD'];
  try {
    $db = new PDO('mysql:host=viaduct.proxy.rlwy.net;dbname=railway', 'root', $password);
    echo 'Banco de dados acessado com sucesso';
  } catch (PDOException $e){
    echo $e;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <button onclick="onConnectDB()">Chamar</button>
</body>
</html>