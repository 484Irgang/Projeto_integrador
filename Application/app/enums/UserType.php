<?php

namespace app\enums;

enum UserType: String {
  case ADMIN = "ADMIN";
  case STUDENT = "STUDENT";
  case TEACHER = "TEACHER";
  case SUPPLIER = "SUPPLIER";

  function getLabel(){
    return match($this){
      UserType::ADMIN => 'Administrador',
      UserType::STUDENT => 'Aluno',
      UserType::SUPPLIER => 'Fornecedor',
      UserType::TEACHER => 'Professor'
    };
  }

  function getForm(){
    return match($this){
      UserType::ADMIN => 'form/admin.php',
      UserType::STUDENT => 'form/student.php',
      UserType::SUPPLIER => 'form/supplier.php',
      UserType::TEACHER => 'form/teacher.php',
    };
  }
}