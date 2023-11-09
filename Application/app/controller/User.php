<?php

namespace app\controller;

class User {
  public function index($params) {
    if(!isset($params['user'])){
      redirect('/');
    }
      $user_id = $params['user'];
      $user = fetchBy('user','id',$user_id);
    return [
      "view" => "user_profile.php",
      "title" => "Perfil do usuário",
      'style_file' => 'user_profile.css',
      "props" => ["user" => $user]
    ];
  }

  public function all(){
    $users = fetchAll("user");
    
    return [
      "view" => "users_list.php",
      "title" => "Lista de usuários",
      'style_file' => 'user_list.css',
      "props" => ["users" => $users]
    ];
  }
}