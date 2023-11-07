<?php

namespace app\controller;

class User {
  public function index($params) {
    return [
      "view" => "user_profile.php",
      "title" => "Perfil do usuário",
      "props" => $params
    ];
  }

  public function all(){
    $users = fetchAll("user");
    
    return [
      "view" => "users_list.php",
      "title" => "Lista de usuários",
      "props" => ["users" => $users]
    ];
  }
}