<?php

namespace app\controller;

class Login{
  public function index(){
    return [
      "view" => "login.php",
      "title" => "Login",
      'style_file' => 'login.css'
    ];
  }
}