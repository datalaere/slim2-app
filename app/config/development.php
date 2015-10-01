<?php
return array(
	'app' => array(
		'url' => 'http://localhost',
		'hash' => array(
			'algo' => PASSWORD_BCRYPT,
			'cost' => 10
		)
	),
	'db' => array(
		'driver' => 'mysql',
		'host' => '127.0.0.1',
		'name' => 'mini-mvc',
		'username' => 'root',
		'password' => 'root',
		'charset' => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix' => ''
	),
	'auth' => array(
		'session' => 'user_id',
		'remember' => 'user_r'
	),
	'mail' => array(
		'smtp_auth' => TRUE,
		'smtp_secure' => 'tls',
		'host' => 'smtp.gmail.com',
		'username' => 'sde.thom855j@gmail.com',
		'password' => 'sde101292',
		'port' => 587,
		'html' => TRUE
	),
	'twig' => array(
		'debug' => TRUE
	),
	'csrf' => array(
		'session' => 'csrf_token'
	)
);

