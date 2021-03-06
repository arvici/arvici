<?php
/**
 * Welcome Controller
 *
 * @author     Tom Valk <tomvalk@lt-box.info>
 * @copyright  2017 Tom Valk
 */

namespace App\Controller;

use Arvici\Component\Controller\BasicController;
use Arvici\Exception\ControllerNotFoundException;


class Welcome extends BasicController
{
    public function index()
    {
        $this->view->body('welcome')->render(['user' => 'Testing User']);
    }

    public function json()
    {
        $this->response->json(array(
            'first' => true,
            'second' => true,
            'multi' => array(
                'Hello!'
            )
        ))->send();
    }

    public function exception()
    {
        throw new ControllerNotFoundException("Controller provided should give an exception on this route call!");
    }
}