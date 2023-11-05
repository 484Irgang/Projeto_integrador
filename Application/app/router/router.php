<?php

function matchInRoutes($uri, $routes) {
  if(array_key_exists($uri, $routes)) {
    return [$uri => $routes[$uri]];
  }

  return [];
}

function checkDinamicUri($uri, $routes){
  return array_filter($routes, function($value) use($uri) {
    $regex = str_replace('/', '\/', ltrim($value));
    return preg_match("/^$regex$/", ltrim($uri));
  }, ARRAY_FILTER_USE_KEY);
}

function returnMatchedParams($uri, $matchedUri){
  $matchedKey = ltrim(array_key_first($matchedUri), '/');
  $uri = ltrim($uri, '/');

  $arrUri = explode('/', $uri);
  $arrMatchedKey = explode('/', $matchedKey );

  $params = array_diff($arrUri,
  $arrMatchedKey);

  $newparams = [];

  foreach ($params as $index => $param) {
    $newparams[$arrUri[$index - 1]] = $param;
  }

  return $newparams;
}

function router() {
  $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

  $routes = require 'routes.php';
  $matchedUri = matchInRoutes($uri,$routes);

  if(empty($matchedUri)) {
    $matchedUri = checkDinamicUri($uri, $routes);
    if(!empty($matchedUri)){
      
      $params = returnMatchedParams($uri, $matchedUri);
      var_dump($params);
      die();
    }
  }

  var_dump($matchedUri);
}