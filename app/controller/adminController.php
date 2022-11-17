<?php

namespace App\controller;

use App\model\users\Admin;
use Core\BaseMiddleware;
use Core\middleware\AuthenticationMiddleware;
use Core\Request;
use Core\Response;

class adminController extends \Core\Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthenticationMiddleware(['login'],BaseMiddleware::ALLOWED_ROUTES));
    }
    public function login(Request $request, Response $response): string
    {
        $this->layout='auth';
        return $this->render('Admin\login');
    }

    public function register(Request $request, Response $response): string
    {
        if ($request->isPost())
        {
            $admin=new Admin();
            $admin->loadData($request->getBody());

        }

        $this->layout='auth';
        return $this->render('Admin\register');
    }
}