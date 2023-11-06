<?php

namespace app\controller;

class User {
  public function index($params) {
    return [
      "view" => "user.php",
      "data" => $params
    ];
  }
}