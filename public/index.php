<?php

use App\controller\adminController;
use App\controller\AuthController;
use App\controller\donorController;
use App\controller\fileController;
use App\controller\managerController;
use App\controller\organisationController;
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
    'email'=>[
        'host'=>$_ENV['EMAIL_HOST'],
        'port'=>$_ENV['EMAIL_PORT'],
        'username'=>$_ENV['EMAIL_USERNAME'],
        'password'=>$_ENV['EMAIL_PASSWORD'],
        'encryption'=>$_ENV['EMAIL_ENCRYPTION'],
        'from'=>$_ENV['EMAIL_FROM']
    ]
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
$app->router->get('/organisation/register', [organisationController::class, 'register']);
$app->router->get('/organisation', [organisationController::class, 'home']);
$app->router->post('/organisation/register', [organisationController::class, 'register']);
$app->router->get('/organisation/login', [organisationController::class, 'login']);
$app->router->post('/organisation/login', [organisationController::class, 'login']);
$app->router->get('/organisation/manage', [organisationController::class, 'manage']);
$app->router->get('/organisation/create', [organisationController::class, 'create']);
$app->router->post('/organisation/create', [organisationController::class, 'create']);
$app->router->get('/organisation/history', [organisationController::class, 'history']);
$app->router->post('/admin/register', [adminController::class, 'register']);
$app->router->post('/upload', [fileController::class, 'upload']);

//Logout
$app->router->get('/logout', [AuthController::class, 'logout']);

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