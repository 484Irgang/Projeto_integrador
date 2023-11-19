<?php

function validate_email_exist($email, $user_id = null){
  $user = fetchBy('user', 'email', $email);

  if(!$user){
    return false;
  }
  else if(isset($user_id) && $user_id === $user->id){
    return false;
  }

  return true;
}

function returnOnlyFields($array, $fields){
  return array_filter($array, function ($key) use ($fields){
    return in_array($key, $fields);
  }, ARRAY_FILTER_USE_KEY);
}

function validateRegisterExist($table, $register,  $user_id = null){
  $user = fetchBy($table, 'registration', $register);

  if(!$user) {
    return false;
  }
 
  else if(isset($user_id) && $user_id === $user->user_id){
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

function returnCheckedOrSelected($object, $field, $value, $attr){
  if(!isset($object->$field)){
    return ;
  }
  if($object->$field === $value){
    return $attr;
  }
  return ;
}

function validateTelphone($number){
  if(strlen($number) < 12){
    return false;
  }

  return true;
}