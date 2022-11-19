<?php

namespace App\controller;

use Core\Application;

class authController extends \Core\Controller
{
    public function logout()
    {
        Application::$app->session->remove('user');
        Application::$app->response->redirect('/');
    }

}