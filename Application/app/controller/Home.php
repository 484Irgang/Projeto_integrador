<?php

namespace app\controller;

class Home{
  public function index($params){
    return [
      'view' => 'home.php',
      'title' => 'Home page',
      'props' => $params
    ];
  }
}