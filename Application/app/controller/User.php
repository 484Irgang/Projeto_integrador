<?php

namespace app\controller;

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
}