<?php
/**
 * Front controller
 *
 * https://github.com/Dostonbek121/district0x_minerbot1
 * Licensed under Apache 2.0
 * Any problem please contact me on :
 */

require_once 'vendor/autoload.php';

define('APPROOT_DIR', dirname(__DIR__));

$localConfig = [];

if (file_exists('config.php')) {
	$localConfig = require('config.php');
}
else {
	die('config.php is missing.');
}

require('vendor/autoload.php');

$config = array_merge(
	require('app/config/bot.php'),
	$localConfig
);

$bot = \app\core\CatBot::create($config);
$bot->run();
?>
