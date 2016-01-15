<?php
/**
 * Framework Bootstrap
 *
 * @author     Tom Valk <tomvalk@lt-box.info>
 * @copyright  2016 Tom Valk
 */
if (! defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

// Load composer autoloader
require_once __DIR__ . DS . 'vendor' . DS . 'autoload.php';

// Load framework..
