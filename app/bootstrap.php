<?php
/**
 * Arvici App Bootstrap
 *
 * @author     Tom Valk <tomvalk@lt-box.info>
 * @copyright  2016 Tom Valk
 */

defined('BASEPATH') || define('BASEPATH', __DIR__ . '/../');
defined('APPPATH') || define('APPPATH', __DIR__ . '/');
$configDir = APPPATH . 'Config/';

require_once $configDir . 'App.php';
require_once $configDir . 'Router.php';
require_once $configDir . 'Template.php';
require_once $configDir . 'Database.php';

// Run the router.
\Arvici\Component\Router::getInstance()->run();
