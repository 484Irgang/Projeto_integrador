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
      "view" => "user_form.php",
      "title" => "Cadastro de usuário",
      'style_file' => 'user_form.css',
      "props" => ["user_type" => $user_type]
    ];
  }

  public function create_admin(){
    $email_exist = validate_email_exist($_POST['email']);
    if($email_exist) {
      return saveErrorFieldAndRedirect('email','Este email já existe', '/user/create/ADMIN');
    }
    
    $only_user_data = returnOnlyFields($_POST, ONLY_USER_FIELDS);
    $new_user_id = createUser($only_user_data, 'ADMIN');

    if(!$new_user_id) {
      return saveErrorAndRedirect("Problemas ao salvar o usuário", '/');
    }

    return saveSuccessAndRedirect("Administrador cadastrado com sucesso", '/');
  }

  public function create_teacher(){
    $email_exist = validate_email_exist($_POST['email']);
    $teacher_registration_exist = validateRegisterExist('teacher', $_POST['registration']);

    if($teacher_registration_exist) {
         return saveErrorFieldAndRedirect('registration','Esta matrícula já existe', '/user/create/TEACHER');
       }

    if($email_exist) {
      return saveErrorFieldAndRedirect('email','Este email já existe', '/user/create/TEACHER');
    }
    
    $only_user_data = returnOnlyFields($_POST, ONLY_USER_FIELDS);
    $new_user_id = createUser($only_user_data, 'TEACHER');

    if(!$new_user_id) {
      return saveErrorAndRedirect("Problemas ao salvar o usuário", '/');
    }

    $only_teacher_fields = returnOnlyFields($_POST, ONLY_TEACHER_FIELDS);
    $only_teacher_fields['registration_date'] = date('Y-m-d');
    
    $success = createUserType($only_teacher_fields, 'teacher', $new_user_id);

    if(!$success) {
      return saveErrorAndRedirect("Não foi possível criar o usuário como professor", '/');
    }

    return saveSuccessAndRedirect("Professor criado com sucesso", '/');
  }

  public function create_student(){
    $email_exist = validate_email_exist($_POST['email']);
    $student_registration_exist = validateRegisterExist('student', $_POST['registration']);

    if($student_registration_exist) {
         return saveErrorFieldAndRedirect('registration','Esta matrícula já existe', '/user/create/TEACHER');
       }
    if($email_exist) {
      return saveErrorFieldAndRedirect('email','Este email já existe', '/user/create/STUDENT');
    }

    
    $only_user_data = returnOnlyFields($_POST, ONLY_USER_FIELDS);
    $new_user_id = createUser($only_user_data, 'STUDENT');

    if(!$new_user_id) {
      return saveErrorAndRedirect("Problemas ao salvar o usuário", '/');
    }

    $only_student_data = returnOnlyFields($_POST, ONLY_STUDENT_FIELDS);
    $only_student_data['registration_date'] = date('Y-m-d');

    $success = createUserType($only_student_data, 'student', $new_user_id);

    if(!$success) {
      return saveErrorAndRedirect("Não foi possível criar o usuário como aluno", '/');
    }

    return saveSuccessAndRedirect("Aluno criado com sucesso", '/');
  }

  public function create_supplier(){
    $email_exist = validate_email_exist($_POST['email']);
    if($email_exist) {
      return saveErrorFieldAndRedirect('email','Este email já existe', '/user/create/SUPPLIER');
    }
    
    $only_user_data = returnOnlyFields($_POST, ONLY_USER_FIELDS);
    $new_user_id = createUser($only_user_data, 'SUPPLIER');

    if(!$new_user_id) {
      return saveErrorAndRedirect("Problemas ao salvar o usuário", '/');
    }

    $only_supplier_data = returnOnlyFields($_POST, ONLY_SUPPLIER_FIELDS);
    $success = createUserType($only_supplier_data, 'supplier', $new_user_id);

    if(!$success) {
      return saveErrorAndRedirect("Não foi possível criar o usuário como fornecedor", '/');
    }

    return saveSuccessAndRedirect("Fornecedor criado com sucesso", '/');
  }
}