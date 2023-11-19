<?php

function update($table, $user_data, $column, $user_id){
  $db = connect();

  $sql = "UPDATE $table SET ";

  $user_fields = array_keys($user_data);

  foreach($user_fields as $field) {
    if(end($user_fields) !== $field)
      $sql .= "$field = :$field, ";
    else
      $sql .= "$field = :$field";
  }

  $sql .= " WHERE $column = $user_id";

  try{
    $update = $db->prepare($sql);
    $success = $update->execute($user_data);
    return $success;
  }
  catch(PDOException $error) {
    var_dump($error->getMessage());
    die();
    return saveErrorAndRedirect($error->getMessage(), '/home');
  }
}