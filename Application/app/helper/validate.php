<?php

function validate_email_exist($email){
  $user = fetchBy('user', 'email', $email);

  if(!$user){
    return false;
  }

  return true;
}

function returnOnlyFields($array, $fields){
  return array_filter($array, function ($key) use ($fields){
    return in_array($key, $fields);
  }, ARRAY_FILTER_USE_KEY);
}

function validateRegisterExist($table, $register){
  $user = fetchBy($table, 'registration', $register);

  if(!$user) {
    return false;
  }

  return true;
}

function returnField($object, $field){
  if(isset($object->$field)){
    echo $object->$field;
  }

  echo ''; 
}

function returnChecked($object, $field, $value){
  if(!isset($object->$field)){
    return false;
  }
  if($object->$field === $value){
    return true;
  }
  return false;
}