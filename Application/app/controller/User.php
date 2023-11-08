<?php

namespace app\controller;

class User {
  public function index($params) {
    return [
      "view" => "user_profile.php",
      "title" => "Perfil do usuário",
      'style_file' => 'user_profile.css',
      "props" => $params
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