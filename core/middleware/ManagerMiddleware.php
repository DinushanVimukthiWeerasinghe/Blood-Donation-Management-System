<?php

namespace Core\middleware;

use Core\Application;

class ManagerMiddleware extends \Core\BaseMiddleware
{

    public function execute()
    {
        if (Application::$app->getUser()->getRole() !== 'manager') {
            Application::$app->response->redirect('/');
        }

    }
}