<?php

function controller($matchUri,$params) {

  $uriValue = array_values($matchUri)[0];

  [$controller, $method] = explode('@', $uriValue);

  $controllerWithPath = CONTROLLER_PATH.$controller;

  if(!class_exists($controllerWithPath)){
    throw new Exception("Controler não encontrado");
  }

  if(!method_exists($controllerWithPath, $method)){
    throw new Exception("Metodo não encontrado no controler");
  }

  $controller = new $controllerWithPath;
  return $controller->$method($params);
}