<?php

$router->define([

	'php_oop_pdo' => 'controllers/index.php',
	'php_oop_pdo/about' => 'controllers/about.php',
	'php_oop_pdo/contact' => 'controllers/contact.php',
  '404' => 'controllers/404.php',
  'php_oop_pdo/users' => 'controllers/user.php',
  'php_oop_pdo/userinsert' => 'controllers/userinsert.php'
]);

// $router->define('about', 'controllers/about.php');

// Route::get('contact','controllers/contact.php');