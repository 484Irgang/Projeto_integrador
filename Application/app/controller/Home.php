<?php

namespace app\controller;

class Home{
  public function index($params){
    
  if(!isset($_SESSION['LOGGED'])) {
    return saveErrorAndRedirect('Usuário não autenticado', '/login');
  }
    return [
      'view' => 'home.php',
      'title' => 'Home page',
      'style_file' => 'home.css',
      'props' => $params
    ];
  }
}