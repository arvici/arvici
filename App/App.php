<?php
/**
 * App
 *
 * @author     Tom Valk <tomvalk@lt-box.info>
 * @copyright  2017 Tom Valk
 */


namespace App;

use Arvici\Component\Router;
use Arvici\Heart\App\BaseApp;


class App extends BaseApp
{

    /**
     * Initiate the App. This can be used to inject configuration items such as routes.
     */
    public function load()
    {
        return;
    }

    /**
     * Register the routes of the app.
     *
     * @param Router $router
     */
    public function registerRoutes(Router $router)
    {
        $router->before('\App\Middleware\AppGlobal::before');
        $router->after('\App\Middleware\AppGlobal::after');

        $router->get('/', '\App\Controller\Welcome::index');
        $router->get('/json', '\App\Controller\Welcome::json');

        $router->get('/exception', '\App\Controller\Welcome::exception');
    }
}
