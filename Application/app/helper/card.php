<?php

use app\enums\UserType;

  function returnUserName($user){
    if(!isset($user)) return '';

    return $user->first_name.' '.$user->last_name ?? '';
  }

  function returnUserType($user){
    if(!isset($user)) return '';

    $user_type = UserType::tryFrom($user->user_type);

    if(!isset($user_type)) return '';

    return $user_type->getLabel();
  }

  function returnDate($date){
    if(!isset($date)) return '';

    $date = new DateTime($date);

    return $date->format("d/m/Y");
  }

  function returnTelephone($user){
    if(!isset($user)) return '';

    $number = preg_replace("/\D/", '', $user->telephone);
    preg_match("/(?P<n3>\d{2})(?P<n2>\d{5})(?P<n1>\d{4})$/", $number, $matches);

    return '('.$matches['n3'].') '.$matches['n2'].'-'.$matches['n1'];
  }

  function returnEmail($user) {
    if(!isset($user)) return '';

    return $user->email;
  }

  function returnUserDocument($user){
    if(!isset($user)) return '';

    if($user->document_type === 'CNPJ'){
      return "Pessoa Jurídica";
    }
    else {
      return "Pessoa Fisica";
    }
  }

  function returnDocumentNumber($user) {
    if(!isset($user)) return '';

    return $user->document_number;
  }

  function returnUserTypeInfo($user){
    if(!isset($user)) return '';

    $user_type = UserType::tryFrom($user->user_type);

    if(!isset($user_type) || $user_type === UserType::ADMIN) return '';

    if($user_type === UserType::STUDENT) {
      return returnStudentInfo($user);
    }
    else if($user_type === UserType::TEACHER){
      return returnTeacherInfo($user);
    }
    else if($user_type === UserType::SUPPLIER){
      return returnSupplierInfo($user);
    }
  }

  function returnStudentInfo($user){
    return '<div id="field">
    <p>Matrícula: <span>'.$user->document_number.'</span></p>
    </div>

    <div id="field">
      <p>Status: <span>'.STATUS_LABEL[$user->status].'</span></p>
    </div>

    <div id="field">
      <p>Semestre: <span>'.$user->current_semester.'º</span></p>
    </div>

    <div id="field">
      <h3>Curso</h3>
      <p>Nome: <span>'.$user->course.'</span></p>
      <p>Preço: <span>R$ '.$user->course_value.'</span></p>
    </div>

    <div id="field">
      <p>Data de cadastro: <span>'.returnDate($user->registration_date).'</span></p>
    </div>';
  }

  function returnTeacherInfo($user){
    return '<div id="field">
    <p>Matrícula: <span>'.$user->document_number.'</span></p>
    </div>

    <div id="field">
      <p>Status: <span>'.STATUS_LABEL[$user->status].'</span></p>
    </div>

    <div id="field">
      <h3>Curso</h3>
      <p>Nome: <span>'.$user->course.'</span></p>
      <p>Contrato: <span>'.$user->contract_type.'</span></p>
      <p>Numero de contrato: <span>'.$user->contract_number.'</span></p>
    </div>

    <div id="field">
      <p>Data de cadastro: <span>'.returnDate($user->registration_date).'</span></p>
    </div>';
  }

  function returnSupplierInfo($user){
    return '<div id="field">
      <h3>Informações de serviço</h3>
      <p>Tipo de serviço: <span>'.$user->service_type.'</span></p>
      <p>Tipo de produto: <span>'.$user->product_type.'</span></p>
      <p>Horário de entrega: <span>'.$user->delivery_time.'</span></p>
      <p>Preço: <span>R$ '.$user->price_by_service.'</span></p>
    </div>

    <div id="field">
      <p>Numero de contrato: <span>'.$user->contract_number.'</span></p>
    </div>

    <div id="field">
      <p>Status: <span>'.STATUS_LABEL[$user->status].'</span></p>
    </div>';
  }
?>