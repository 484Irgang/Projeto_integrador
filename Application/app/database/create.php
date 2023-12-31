<?php

function createUser($user_data, $user_type){
  $user_data['user_type'] = $user_type;

  $sql = "insert into user(";
  $sql.= implode(', ', array_keys($user_data)).')';
  $sql.= ' values(:'.implode(', :', array_keys($user_data)).')';

  try{
    $db = connect();
    $create = $db->prepare($sql);
    $sucess = $create->execute($user_data);
    if(!$sucess){
      return saveErrorAndRedirect("Não foi possível cadastrar o usuário","/");
    }
    $user_id = $db->lastInsertId();
    return $user_id;
  } catch(PDOException $error){
    return saveErrorAndRedirect($error->getMessage(), '/');
  }
}

function createUserType($user_data, $user_type, $user_id){
  $user_data['user_id'] = $user_id;

  $sql = "insert into {$user_type}(";
  $sql.= implode(', ', array_keys($user_data)).')';
  $sql.= ' values(:'.implode(', :', array_keys($user_data)).')';

  try{
    $db = connect();
    $create = $db->prepare($sql);
    $sucess = $create->execute($user_data);
    
    return $sucess;
  } catch(PDOException $error){
    return saveErrorAndRedirect($error->getMessage(), '/');
  }
}