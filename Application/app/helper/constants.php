<?php
define('CONTROLLER_PATH', "app\\controller\\");
define('ROOT_PATH', dirname(__FILE__, 3));
define('VIEWS_PATH', ROOT_PATH."/app/views/");

define('ONLY_USER_FIELDS', ['first_name', 'last_name', 'telephone', 'email', 'born_date', 'document_type', 'document_number', 'password']);