<?php
/**
 * Welcome Controller
 *
 * @author     Tom Valk <tomvalk@lt-box.info>
 * @copyright  2016 Tom Valk
 */

namespace App\Controller;

use Arvici\Component\Controller\BaseController;

class Welcome extends BaseController
{
    public function index()
    {
        $this->view->body('welcome')->render(['user' => 'Testing User']);
    }
}