<?php

namespace app\controller;

class Login{
  public function index(){
    if(isset($_SESSION['LOGGED'])) {
      unset($_SESSION['LOGGED']);
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
      $_SESSION['error_message'] = 'Dados precisam ser inseridos';
      return redirect('/login');
    }

    $user = fetchAdminUser("email", $email);

    if(!$user || $password !== $user->password){
      $_SESSION['error_message'] = 'Usuário ou senha incorretos';
      return redirect('/login');
    }
    
    $_SESSION['LOGGED'] = $user;
    return redirect('/');
    
}
}