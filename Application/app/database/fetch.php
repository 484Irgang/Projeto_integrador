<?php
function fetchAll($table, $fields = "*") {
  try {
    $db = connect();
  $query = $db->query("select {$fields} from {$table}");
  return $query->fetchAll();
  }catch(PDOException $error) {
    echo $error->getMessage();
  }
}

function fetchBy($table, $field, $value, $fields = "*"){
  try {
    $connect_db = connect();
    $prepare = $connect_db->prepare("select {$fields} from {$table} where {$field} = :{$field}");
    $prepare->execute([$field => $value]);
    return $prepare->fetch();
  }
  catch(PDOException $error) {
    echo $error->getMessage();
  }
}