<?php

namespace App\controller;

use App\model\users\Donor;
use App\model\users\User;
use App\model\Authentication\Login;
use core\Application;
use Core\Request;
use Core\Response;

class donorController extends \Core\Controller
{
    public function home(Request $request, Response $response)
    {
        $guest = Application::$app->isGuest();
        if($guest) {
            return $this->render('Donor/login');
        }
        $user = Application::$app->getUser();
        $name = $user->getFirstName();
        return $this->render('donor',['name'=>$name]);
    }

    public function login(Request $request, Response $response)
    {
        if ($request->isPost())
        {
            $login = new Login();
            $login->loadData($request->getBody());
            if ($login->validate() && $login->login())
            {
                $response->redirect('/donor');
                return '';
            }
        }
        $this->layout = 'auth';
        return $this->render('Donor/login');
    }

    public function profile(Request $request, Response $response)
    {
        $donor = new Donor();
        $user = Application::$app->getUser();
        $primaryKey = $user->primaryKey();
        $primaryValue = $user->{$primaryKey};
        $donor->loadData(Donor::findOne(['Donor_ID'=>$primaryValue]));
        $donorDetails = $donor->getAttributes();
        if ($donorDetails['Donor_ID']===null){
            return $this->render('Donor/register');
        }
        //print_r($donorDetails);
        return $this->render('Donor/profile', $donorDetails);
        //$response->redirect('/donor/profile',['data'=>$donor]);
        //echo Donor::tableName();
        //print_r(Donor::findOne(['Donor_ID'=>'123']));
    }
}