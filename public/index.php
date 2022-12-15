<?php

use App\controller\adminController;
use App\controller\authController;
use App\controller\donorController;
use App\controller\fileController;
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
    'email'=>[
        'host'=>$_ENV['EMAIL_HOST'],
        'port'=>$_ENV['EMAIL_PORT'],
        'username'=>$_ENV['EMAIL_USERNAME'],
        'password'=>$_ENV['EMAIL_PASSWORD'],
        'encryption'=>$_ENV['EMAIL_ENCRYPTION'],
        'from'=>$_ENV['EMAIL_FROM']
    ]
];


try {
    $app = new Application(dirname(__DIR__), $config);
} catch (\PHPMailer\PHPMailer\Exception $e) {
    echo $e->getMessage();
}

$app->forbiddenRoute->setForbiddenRotes([
    'manager'=>['/manager/dashboard']
]);
//$app->db->applyMigrations();
$app->router->get('/', [siteController::class, 'home']);
$app->router->get('/home', [siteController::class, 'home']);
$app->router->get('/about', [siteController::class, 'about']);
$app->router->get('/donor', [donorController::class, 'home']);
$app->router->get('/contact', [siteController::class, 'contact']);
$app->router->post('/contact', [siteController::class, 'contact']);


$app->router->get('/user/register', [siteController::class, 'userRegister']);
$app->router->post('/user/register', [siteController::class, 'userRegister']);

$app->router->get('/user/login', [siteController::class, 'userLogin']);
$app->router->post('/user/login', [siteController::class, 'userLogin']);


$app->router->get('/admin/login', [adminController::class, 'login']);
$app->router->post('/admin/login', [adminController::class, 'login']);
$app->router->get('/admin/register', [adminController::class, 'register']);
$app->router->post('/admin/register', [adminController::class, 'register']);
$app->router->post('/upload', [fileController::class, 'upload']);

//Logout
$app->router->get('/logout', [authController::class, 'logout']);

//Manager Login
$app->router->get('/manager/login', [authController::class, 'managerLogin']);
$app->router->post('/manager/login', [authController::class, 'managerLogin']);

// Manager Register
$app->router->get('/manager/register', [managerController::class, 'register']);
$app->router->post('/manager/register', [managerController::class, 'register']);

//Manager Dashboard
$app->router->get('/manager/dashboard', [managerController::class, 'dashboard']);


$app->router->get('/manager/mngMedicalOfficer', [managerController::class, 'ManageMedicalOfficer']);

$app->router->get('/manager/mngMedicalOfficer/add', [managerController::class, 'AddMedicalOfficer']);
$app->router->post('/manager/mngMedicalOfficer/add', [managerController::class, 'AddMedicalOfficer']);

$app->router->get('/manager/mngMedicalOfficer/search', [managerController::class, 'SearchMedicalOfficer']);

$app->router->get('/manager/mngRequests', [managerController::class, 'ManageRequests']);
$app->router->post('/manager/mngRequests', [managerController::class, 'ManageRequests']);


$app->router->get('/manager/mngSponsorship', [managerController::class, 'ManageSponsors']);
$app->router->post('/manager/mngSponsorship', [managerController::class, 'ManageSponsors']);

$app->router->get('/manager/mngDonors', [managerController::class, 'ManageDonors']);
$app->router->post('/manager/mngDonors', [managerController::class, 'ManageDonors']);

$app->router->get('/manager/mngCampaigns', [managerController::class, 'ManageCampaigns']);
$app->router->post('/manager/mngCampaigns', [managerController::class, 'ManageCampaigns']);

$app->router->get('/manager/mngReport', [managerController::class, 'ManageReport']);
$app->router->post('/manager/mngReport', [managerController::class, 'ManageReport']);


$app->router->post('/manager/upload', [managerController::class, 'upload']);



//View Medical Officer
$app->router->get('/manager/mngMedicalOfficer/view', [managerController::class, 'ViewMedicalOfficer']);
$app->router->post('/manager/mngMedicalOfficer/view', [managerController::class, 'ViewMedicalOfficer']);

//print_r($_SESSION);
$app->run();