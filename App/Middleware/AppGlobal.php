<?php
/**
 * AppGlobal.php
 *
 * @author     Tom Valk <tomvalk@lt-box.info>
 * @copyright  2017 Tom Valk
 */

namespace App\Middleware;


use Arvici\Component\Middleware\BaseMiddleware;

class AppGlobal extends BaseMiddleware
{
    public function before()
    {
        \Logger::debug("Starting controllers, before middleware called");
    }

    public function after()
    {
        \Logger::debug("Stopping controllers, after middleware called");
    }
}