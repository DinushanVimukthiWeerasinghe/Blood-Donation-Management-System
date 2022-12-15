<?php

namespace Core\middleware;

use Core\Application;
use Core\BaseMiddleware;

class OrganisationMiddleware extends BaseMiddleware
{
    public function execute()
    {
        if (Application::$app->getUser()->getRole() != 'Organisation') {
            Application::$app->response->redirect('login.php');
        }
    }
}