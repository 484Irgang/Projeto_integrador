<?php

function validate_email_exist($email){
  $user = fetchBy('user', 'email', $email);

  if(!$user){
    return false;
  }

  return true;
}

function returnOnlyUserData($array){
  return array_filter($array, function ($key){
    return in_array($key, ONLY_USER_FIELDS);
  }, ARRAY_FILTER_USE_KEY);
}