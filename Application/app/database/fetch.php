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