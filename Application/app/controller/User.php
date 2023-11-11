<?php

namespace app\controller;

use app\enums\UserType;

class User {
  public function index($params) {
    
    if(!isset($_SESSION['LOGGED'])) {
      $_SESSION['error_message'] = 'Usuário não autenticado';
      return redirect('/login');
    }
    if(!isset($params['user'])){
      $_SESSION['error_message'] = 'Dados do usuário não foram passados';
      return redirect('/');
    }
      $user_id = $params['user'];
      $user = fetchBy('user','id',$user_id);
      if(empty($user)){
        $_SESSION['error_message'] = 'Usuário não encontrado';
        return redirect('/');
      }
    return [
      "view" => "user_profile.php",
      "title" => "Perfil do usuário",
      'style_file' => 'user_profile.css',
      "props" => ["user" => $user]
    ];
  }

  public function all(){
    if(!isset($_SESSION['LOGGED'])) {
      $_SESSION['error_message'] = 'Usuário não autenticado';
      return redirect('/login');
    }
    
    $users = fetchAll("user");
    
    return [
      "view" => "users_list.php",
      "title" => "Lista de usuários",
      'style_file' => 'user_list.css',
      "props" => ["users" => $users]
    ];
  }

  public function create($params){
    if(!isset($_SESSION['LOGGED'])) {
      $_SESSION['error_message'] = 'Usuário não autenticado';
      return redirect('/login');
    }

    $create_type = $params['create'];
    $user_type = UserType::tryFrom($create_type);

    if(!$user_type) {
      $_SESSION['error_message'] = 'Tipo de usuário não disponível para cadastro';
      return redirect('/');
    }

    return [
      "view" => "user_create.php",
      "title" => "Cadastro de usuário",
      'style_file' => 'user_create.css',
      "props" => ["user_type" => $user_type]
    ];
  }
}