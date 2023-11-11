<?php

namespace app\controller;

class Login{
  public function index(){
    if(isset($_SESSION['LOGGED'])) {
      return saveErrorAndRedirect('Usuário já está logado', '/');
    }

    return [
      "view" => "login.php",
      "title" => "Login",
      'style_file' => 'login.css'
    ];
  }

  public function store() {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');

    if (empty($email) || empty($password)){
      return saveErrorAndRedirect('Dados precisam ser inseridos', '/login');
    }

    $user = fetchAdminUser("email", $email);

    if(!$user || $password !== $user->password){
      return saveErrorAndRedirect('Usuário ou senha incorretos', '/login');
    }
    
    $_SESSION['LOGGED'] = $user;
    return redirect('/');
    
}
}