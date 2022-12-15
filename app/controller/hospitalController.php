<?php

namespace App\controller;

use App\model\Authentication\Login;
use Core\Application;
use Core\Request;
use Core\Response;
use App\view\components\card\requestDetailsCard;
use App\model\request\EmergencyRequest;
use App\view\components\card\successCard;

class hospitalController extends \Core\Controller
{
    public function __construct()
    {
        $this->layout='auth';
        $this->registerMiddleware(new \Core\middleware\AuthenticationMiddleware(['register','login'],1));
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
            }

        }
        return $this->render('hospital/login',['model' => $login]);
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
            //print_r($EmergencyRequest);
            if ($EmergencyRequest->validate())
            {
                //echo 'hi';
                if ($EmergencyRequest->save())
                {
                    $card = new successCard();
                    echo $card->render();
                    return $this->render('hospital/hospitalBoard');
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

        return $this->render('hospital/viewEmergency',['body' => $body]);
    }
}
