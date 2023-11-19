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

  function returnUserBorn($user){
    if(!isset($user)) return '';

    $date = new DateTime($user->born_date);

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

    return '<div id="field">
      <p>Matrícula: <span>110.123.144-24</span></p>
    </div>
  
    <div id="field">
      <p>Status: <span>Inativo</span></p>
    </div>
  
    <div id="field">
      <p>Semestre: <span>2º</span></p>
    </div>
  
    <div id="field">
      <h3>Curso</h3>
      <p>Nome: <span>Bombeiro civil</span></p>
      <p>Preço: <span>R$ 300,00</span></p>
    </div>
  
    <div id="field">
      <p>Data de cadastro: <span>13/04/1999</span></p>
    </div>';
  }
?>