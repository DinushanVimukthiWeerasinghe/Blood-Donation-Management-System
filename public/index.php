<?php

use App\controller\adminController;
use App\controller\authController;
use App\controller\donorController;
use App\controller\managerController;
use App\controller\siteController;
use Core\Application;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
$config=[
    'db'=>[
        'dsn'=>$_ENV['DB_DSN'],
        'user'=>$_ENV['DB_USER'],
        'password'=>$_ENV['DB_PASSWORD']
    ],
];



$app =new Application(dirname(__DIR__), $config);

$app->forbiddenRoute->setForbiddenRotes([
    'manager'=>['/manager/dashboard']
]);
//$app->db->applyMigrations();
$app->router->get('/', [siteController::class, 'home']);
$app->router->get('/about', [siteController::class, 'about']);
$app->router->get('/donor', [donorController::class, 'home']);
$app->router->get('/admin/login', [adminController::class, 'login']);
$app->router->post('/admin/login', [adminController::class, 'login']);
$app->router->get('/admin/register', [adminController::class, 'register']);
$app->router->post('/admin/register', [adminController::class, 'register']);

//Logout
$app->router->get('/logout', [authController::class, 'logout']);

//Manager Login
$app->router->get('/manager/login', [managerController::class, 'login']);
$app->router->post('/manager/login', [managerController::class, 'login']);

// Manager Register
$app->router->get('/manager/register', [managerController::class, 'register']);
$app->router->post('/manager/register', [managerController::class, 'register']);

//Manager Dashboard
$app->router->get('/manager/dashboard', [managerController::class, 'dashboard']);

//print_r($_SESSION);
$app->run();