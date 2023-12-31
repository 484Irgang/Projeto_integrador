<?php

namespace app\controller;

use app\enums\UserType;

class User {
   public function all(){
    if(!isset($_SESSION['LOGGED'])) {
      return saveErrorAndRedirect('Usuário não autenticado', '/login');
    }
    
    $users = fetchAll("user");
    foreach($users as $user){
      $user_type = UserType::tryFrom($user->user_type);
      

    if(!$user_type) {
      return saveErrorAndRedirect('Tipo de usuário não disponível para edição', '/');
    }

    if($user_type !== UserType::ADMIN){
      $user_type_data = fetchBy($user_type->toString(), 'user_id', $user->id);
      
      if(!$user_type_data) {
        return saveErrorAndRedirect('Sem dados para esse tipo de usuário', '/');
      }

      unset($user->password);

      foreach($user_type_data as $field => $value){
        $user->$field = $value;
      }

      unset($user->user_id);
    }
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
      return saveErrorAndRedirect('Tipo de usuário não disponível para cadastro', '/');
    }

    return [
      "view" => "user_form.php",
      "title" => "Cadastro de usuário",
      'style_file' => 'user_form.css',
      "props" => ["user_type" => $user_type]
    ];
  }

  public function create_admin(){
    $telephone_validated = validateTelphone($_POST['telephone']);

    if(!$telephone_validated){
      return saveErrorFieldAndRedirect('telephone', 'Telefone sem digitos suficientes', '/user/create/ADMIN' );
    }
    $email_exist = validate_email_exist($_POST['email']);
    if($email_exist) {
      saveError("Campo inválido");
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
    $telephone_validated = validateTelphone($_POST['telephone']);

    if(!$telephone_validated){
      return saveErrorFieldAndRedirect('telephone', 'Telefone sem digitos suficientes', '/user/create/TEACHER' );
    }

    $email_exist = validate_email_exist($_POST['email']);
    $teacher_registration_exist = validateRegisterExist('teacher', $_POST['registration']);

    if($teacher_registration_exist) {
        saveError("Campo inválido");
         return saveErrorFieldAndRedirect('registration','Esta matrícula já existe', '/user/create/TEACHER');
       }

    if($email_exist) {
      saveError("Campo inválido");
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
    $telephone_validated = validateTelphone($_POST['telephone']);

    if(!$telephone_validated){
      return saveErrorFieldAndRedirect('telephone', 'Telefone sem digitos suficientes', '/user/create/STUDENT' );
    }

    $email_exist = validate_email_exist($_POST['email']);
    $student_registration_exist = validateRegisterExist('student', $_POST['registration']);

    if($student_registration_exist) {
        saveError("Campo inválido");
         return saveErrorFieldAndRedirect('registration','Esta matrícula já existe', '/user/create/STUDENT');
       }
    if($email_exist) {
      saveError("Campo inválido");
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
    $telephone_validated = validateTelphone($_POST['telephone']);

    if(!$telephone_validated){
      return saveErrorFieldAndRedirect('telephone', 'Telefone sem digitos suficientes', '/user/create/SUPPLIER' );
    }
    
    $email_exist = validate_email_exist($_POST['email']);
    if($email_exist) {
      saveError("Campo inválido");
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

  public function update($params){
    if(!isset($_SESSION['LOGGED'])) {
      return saveErrorAndRedirect('Usuário não autenticado', '/login');
    }

    $user_id = $params['update'];
    $user = fetchBy('user', 'id', $user_id);

    if(!$user){
      return saveErrorAndRedirect('Usuário não encontrado', '/home');
    }

    $user_type = UserType::tryFrom($user->user_type);

    if(!$user_type) {
      return saveErrorAndRedirect('Tipo de usuário não disponível para edição', '/');
    }

    if($user_type !== UserType::ADMIN){
      $user_type_data = fetchBy($user_type->toString(), 'user_id', $user_id);
      
      if(!$user_type_data) {
        return saveErrorAndRedirect('Sem dados para esse tipo de usuário', '/');
      }

      unset($user->password);

      foreach($user_type_data as $field => $value){
        $user->$field = $value;
      }
    }

    return [
      "view" => "user_form.php",
      "title" => "Edição de usuário",
      'style_file' => 'user_form.css',
      "props" => ["user_type" => $user_type, "user" => $user]
    ];
    
  }

  public function update_user($params){
    $user_id = $params['update'];

    $telephone_validated = validateTelphone($_POST['telephone']);

    if(!$telephone_validated){
      return saveErrorFieldAndRedirect('telephone', 'Telefone sem digitos suficientes', '/user/update/'.$user_id);
    }

    $email_exist = validate_email_exist($_POST['email'], intval($user_id));
    if($email_exist) {
      saveError("Campo inválido");
      return saveErrorFieldAndRedirect('email','Este email já existe', '/user/update/'.$user_id);
    }

    $only_user_data = returnOnlyFields($_POST, ONLY_USER_FIELDS);

    $success = update('user', $only_user_data, 'id', $user_id);

    if(!$success) {
      return saveErrorAndRedirect("Não foi possivel atualizar o usuário", '/home');
    }

    $user = fetchBy('user', 'id', $user_id, 'user_type');
    
    $user_type = UserType::tryFrom($user->user_type);

    if(isset($_POST['registration'])){
      $registration_exist = validateRegisterExist($user_type->toString(), $_POST['registration'], intval( $user_id));

      if($registration_exist) {
        saveError("Campo inválido");
         return saveErrorFieldAndRedirect('registration','Esta matrícula já existe', '/user/update/'.$user_id);
       }
    }

    if($user_type && $user_type !== UserType::ADMIN)
    {
      $only_user_type_fields = returnOnlyFields($_POST, $user_type->typeFields());
      
      $success = update($user_type->toString(), $only_user_type_fields, 'user_id', $user_id );

      if(!$success) {
        return saveErrorAndRedirect("Não foi possível salvar os dados como ".$user_type->getLabel(), '/home');
      }
    }

    return saveSuccessAndRedirect("Usuário atualizado com sucesso", '/home');
  }

  public function delete($params){
    $user_id = $params['delete'];
    $user = fetchBy('user', 'id', $user_id);

    if(!isset($user)){
      return saveErrorAndRedirect('Usuário não encontrado', '/user/all');
    }

    $success = delete('user', 'id', $user_id);

    if(!$success){
      return saveErrorAndRedirect('Não foi possível excluir o usuário', '/user/all');
    }

    $user_type = UserType::tryFrom($user->user_type);

    if(isset($user_type) && $user_type !== UserType::ADMIN){
      $success = delete($user_type->toString(), 'user_id', $user_id);

      if(!$success){
        return saveErrorAndRedirect('Não foi possível excluir os dados como '.$user_type->getLabel(), '/user/all');
      }
    }

    return saveSuccessAndRedirect('Usuário deletado com successo', '/user/all');
  }
}