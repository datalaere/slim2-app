<?php
/** 
 * Bootstrap container
 */
use Models\User\UserModel;

$app->container->set('user', function() {
	return new UserModel;
});
use Modules\Hash;

$app->container->singleton('hash', function() use ($app) {
	return new Hash($app->config);
});
