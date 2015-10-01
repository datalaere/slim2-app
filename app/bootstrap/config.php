<?php
/*
 * App bootstrap
 */
use Slim\Slim;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;
use Noodlehaus\Config;

$app = new Slim(array(
	'mode' => file_get_contents(PATH_ROOT . '/env.php'),
	'view' => new Twig(),
	'templates.path' => PATH_ROOT . '/app/views'
	));

$app->configureMode($app->config('mode'), function() use ($app) {
	$app->config = Config::load(PATH_ROOT . "/app/config/{$app->mode}.php");
});


$view = $app->view();

$view->parserOptions = array(
	'debug' => $app->config->get('twig.debug')
);

$view->parserExtensions = array(
	new TwigExtension()
);

