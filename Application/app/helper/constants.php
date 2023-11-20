<?php
define('CONTROLLER_PATH', "app\\controller\\");
define('ROOT_PATH', dirname(__FILE__, 3));
define('VIEWS_PATH', ROOT_PATH."/app/views/");

define('ONLY_USER_FIELDS', ['first_name', 'last_name', 'telephone', 'email', 'born_date', 'document_type', 'document_number', 'password']);
define('ONLY_TEACHER_FIELDS', ['registration', 'course', 'contract_type', 'contract_number', 'status']);
define('ONLY_STUDENT_FIELDS', ['registration', 'status', 'current_semester', 'course', 'course_value']);
define('ONLY_SUPPLIER_FIELDS', ['product_type', 'delivery_time', 'price_by_service', 'status', 'contract_number', 'service_type']);
define('STATUS_LABEL', ["ACTIVE" => "Ativo", "INACTIVE" => "Inativo", "SUSPENDED" => "Suspenso"]);