<?php

namespace app\enums;

enum UserType: String {
  case ADMIN = "ADMIN";
  case STUDENT = "STUDENT";
  case TEACHER = "TEACHER";
  case SUPPLIER = "SUPPLIER";
}