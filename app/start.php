<?php
/**
 * Start bootstrapping
 */
// define path root
define('PATH_ROOT', dirname(__DIR__));

// load bootstrap files
require_once PATH_ROOT . '/app/bootstrap/debug.php';
require_once PATH_ROOT . '/app/bootstrap/session.php';
require_once PATH_ROOT . '/app/bootstrap/constants.php';
require_once PATH_ROOT . '/app/bootstrap/autoload.php';
require_once PATH_ROOT . '/app/bootstrap/config.php';
require_once PATH_ROOT . '/app/bootstrap/database.php';
require_once PATH_ROOT . '/app/bootstrap/controllers.php';
require_once PATH_ROOT . '/app/bootstrap/container.php';
require_once PATH_ROOT . '/app/bootstrap/template.php';
