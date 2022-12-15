<?php

namespace App\controller;

use App\model\Authentication\Login;
use Core\Application;
use Core\Request;
use Core\Response;
use App\view\components\card\requestDetailsCard;
use App\model\request\EmergencyRequest;

class hospitalController extends \Core\Controller
{
    public function __construct()
    {
        $this->layout='auth';
    }

    public function register()
    {
        return $this->render('hospital/register');
    }

    public function login(Request $request,Response $response)
    {
//        var_dump(password_hash('1234',PASSWORD_DEFAULT));
//        exit();
//        password_hash('1234',PASSWORD_DEFAULT);
        $login = new Login();
        if($request->isPost())
        {
//            print_r($login);
//            exit();
            $login->loadData($request->getBody());
            if($login->validate() && $login->login())
            {
                $response->redirect('/hospital/hospitalBoard');
                return '';
            }
            else
            {
                print_r($login);
                exit();
            }
        }
        return $this->render('hospital/login');
    }

    public function dashboard()
    {
        return $this->render('hospital/hospitalBoard');
    }

    public function createEmergency(Request $request,Response $response)
    {
        $EmergencyRequest = new EmergencyRequest();
//        echo "oli";
        if ($request->isPost())
        {
            $EmergencyRequest->loadData($request->getBody());
            $currentUsr = Application::$app->getUser();
            //exit();
            $EmergencyRequest->setOfficerId($currentUsr->getUid());
            print_r($EmergencyRequest);
            if ($EmergencyRequest->validate())
            {
                echo 'hi';
                if ($EmergencyRequest->save())
                {
                    $response->redirect('/hospital/hospitalBoard');
                    return '';
                }
            }
        }
        return $this->render('hospital/createEmergency');
    }
    public function viewEmergency(Request $request, Response $response)
    {
        $currentUsr = Application::$app->getUser();
        //echo $currentUsr->getUid();
        $EmergencyRequest = new EmergencyRequest();
        $UID = $currentUsr->getUid();
        //$body = $EmergencyRequest->RetrieveAll('HI');
        $body = $EmergencyRequest->RetrieveAll(['Officer_ID' => $UID]);
        foreach($body as $value)
        {
            //print_r($value);
//            $value->getAttributeVal();
            //print_r($value->getAttributeVal());
            $requestDetailsCard = new requestDetailsCard($value->getAttributeVal());
            echo $requestDetailsCard->render();
        }
        return $this->render('hospital/viewEmergency');
    }
}
