<?php 
return [
  "POST" => [
    "/login" => "Login@store",
    "/user/create/ADMIN" => "User@create_admin",
    "/user/create/STUDENT" => "User@create_student",
    "/user/create/TEACHER" => "User@create_teacher",
    "/user/create/SUPPLIER" => "User@create_supplier",
    "/user/update/[0-9]+" => "User@update_user"
  ],
  "GET" => [
    "/" => "Home@index",
    "/home" => "Home@index",
    "/user/create/[A-Z]+" => "User@create",
    "/user/[0-9]+" => "User@index",
    "/user/all" => "User@all",
    "/login" => "Login@index",
    "/login/destroy" => "Login@destroy",
    "/user/update/[0-9]+" => "User@update"
  ]
];