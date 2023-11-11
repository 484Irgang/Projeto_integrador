<?php

namespace app\controller;

class Home{
  public function index($params){
    
  if(!isset($_SESSION['LOGGED'])) {
    $_SESSION['error_message'] = 'Usuário não autenticado';
    return redirect('/login');
  }
    return [
      'view' => 'home.php',
      'title' => 'Home page',
      'style_file' => 'home.css',
      'props' => $params
    ];
  }
}