<?php

use App\controller\siteController;
use App\controller\organisationController;
use Core\Application;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
$config=[
//    'userClass' => app\models\User::class,
    'db'=>[
        'dsn'=>$_ENV['DB_DSN'],
        'user'=>$_ENV['DB_USER'],
        'password'=>$_ENV['DB_PASSWORD']
    ],
];
$app =new Application(dirname(__DIR__), $config);
$app->db->applyMigrations();
$app->router->get('/login', [organisationController::class, 'login']);
$app->router->get('/', [organisationController::class, 'home']);
//$app->router->get('/', [siteController::class, 'home']);
$app->router->get('/register', [organisationController::class, 'register']);
$app->router->post('/register', [organisationController::class, 'register']);
$app->router->get('/contact', [siteController::class, 'contact']);
$app->run();