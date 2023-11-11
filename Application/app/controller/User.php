<?php

namespace app\controller;

use app\enums\UserType;

class User {
  public function index($params) {
    
    if(!isset($_SESSION['LOGGED'])) {
      return saveErrorAndRedirect('Usuário não autenticado', '/login');
    }
    if(!isset($params['user'])){
      return saveErrorAndRedirect('Dados do usuário não foram passados', '/');
    }
      $user_id = $params['user'];
      $user = fetchBy('user','id',$user_id);
      if(empty($user)){
        return saveErrorAndRedirect('Usuário não encontrado', '/');
      }

      unset($user->password);
    return [
      "view" => "user_profile.php",
      "title" => "Perfil do usuário",
      'style_file' => 'user_profile.css',
      "props" => ["user" => $user]
    ];
  }

  public function all(){
    if(!isset($_SESSION['LOGGED'])) {
      return saveErrorAndRedirect('Usuário não autenticado', '/login');
    }
    
    $users = fetchAll("user");
    foreach($users as $user){
      unset($user->password);
    }
    
    return [
      "view" => "users_list.php",
      "title" => "Lista de usuários",
      'style_file' => 'user_list.css',
      "props" => ["users" => $users]
    ];
  }

  public function create($params){
    if(!isset($_SESSION['LOGGED'])) {
      return saveErrorAndRedirect('Usuário não autenticado', '/login');
    }

    $create_type = $params['create'];
    $user_type = UserType::tryFrom($create_type);

    if(!$user_type) {
      saveErrorAndRedirect('Tipo de usuário não disponível para cadastro', '/');
    }

    return [
      "view" => "user_create.php",
      "title" => "Cadastro de usuário",
      'style_file' => 'user_create.css',
      "props" => ["user_type" => $user_type]
    ];
  }

  public function create_admin(){
    $email_exist = validate_email_exist($_POST['email']);
    if($email_exist) {
      return saveErrorFieldAndRedirect('email','Este email já existe', '/user/create/ADMIN');
    }
    
    $only_user_data = returnOnlyUserData($_POST);
    $new_user = createUser($only_user_data, 'ADMIN');

    if(!$new_user) {
      return saveErrorAndRedirect("Problemas ao salvar o usuário", '/');
    }

    return saveSuccessAndRedirect("Usuário administrador cadastrado com sucesso", '/');
  }

  public function create_teacher(){
    $email_exist = validate_email_exist($_POST['email']);
    if($email_exist) {
      return saveErrorFieldAndRedirect('email','Este email já existe', '/user/create/ADMIN');
    }
    
    $only_user_data = returnOnlyUserData($_POST);
    $new_user = createUser($only_user_data, 'TEACHER');
  }

  public function create_student(){
    $email_exist = validate_email_exist($_POST['email']);
    if($email_exist) {
      return saveErrorFieldAndRedirect('email','Este email já existe', '/user/create/ADMIN');
    }
    
    $only_user_data = returnOnlyUserData($_POST);
    $new_user = createUser($only_user_data, 'STUDENT');
  }

  public function create_supplier(){
    $email_exist = validate_email_exist($_POST['email']);
    if($email_exist) {
      return saveErrorFieldAndRedirect('email','Este email já existe', '/user/create/ADMIN');
    }
    
    $only_user_data = returnOnlyUserData($_POST);
    $new_user = createUser($only_user_data, 'SUPPLIER');
  }
}