<?php 
return [
  "POST" => [
    "/login" => "Login@store"
  ],
  "GET" => [
    "/" => "Home@index",
  "/user/create" => "User@create",
  "/user/[0-9]+" => "User@index",
  "/user/all" => "User@all",
  "/login" => "Login@index"
  ]
];