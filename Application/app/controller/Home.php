<?php

namespace app\controller;

class Home{
  public function index($params){
    return [
      'view' => 'home.php',
      'title' => 'Home page',
      'style_file' => 'home.css',
      'props' => $params
    ];
  }
}