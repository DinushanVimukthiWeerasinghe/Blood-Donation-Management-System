<?php

namespace App\controller;

use App\model\Authentication\Login;
use App\model\users\Manager;
use App\model\users\medicalOfficer;
use App\model\users\User;
use Core\Application;
use Core\BaseMiddleware;
use Core\Controller;
use Core\middleware\AuthenticationMiddleware;
use Core\middleware\ManagerMiddleware;
use Core\Request;
use Core\Response;
use Core\SessionObject;

class managerController extends Controller
{

    public function __construct()
    {
        $this->registerMiddleware(new AuthenticationMiddleware(['login'], BaseMiddleware::ALLOWED_ROUTES));
        $this->registerMiddleware(new ManagerMiddleware());
    }



    public function register(Request $request,Response $response ): string
    {
        $manager=new Manager();
        if ($request->isPost())
        {
            $manager->loadData($request->getBody());
            $manager->getFile()->saveFile();
            if($manager->validate() && $manager->save())
            {
                
                $response->redirect('/manager/login');
            }
        }
        $this->layout='auth';
        return $this->render('Manager\register');
    }

    public function dashboard(): string
    {
        /* @var Manager $manager*/
        $manager = Manager::findOne(['Officer_ID' => Application::$app->session->get('user')]);
        $params=[
            'firstName'=>$manager->getFirstName(),
            'lastName'=>$manager->getLastName()
        ];
        $this->layout='auth';
        return $this->render('Manager\managerBoard',$params);
    }

    public function ManageMedicalOfficer(): string
    {
        /* @var Manager $manager*/
        $manager = Manager::findOne(['Officer_ID' => Application::$app->session->get('user')]);
        $medicalOfficers=medicalOfficer::RetrieveAll();
        $params=[
            'firstName'=>$manager->getFirstName(),
            'lastName'=>$manager->getLastName(),
            'data'=>$medicalOfficers
        ];
        $this->layout='auth';
        return $this->render('Manager\mngMedicalOfficer',$params);
    }

    public function AddMedicalOfficer(Request $request, Response $response):string
    {
        $medicalOfficer=new medicalOfficer();
        if (Application::$app->request->isPost()){

            $medicalOfficer->loadData($request->getBody());

            $medicalOfficer->setOfficerID('MO'.rand(1000,9999));
            $medicalOfficer->setJoinedDate(date('Y-m-d'));
            $medicalOfficer->setRecentDate(date('Y-m-d'));
            $medicalOfficer->setStatus(1);
            $file=$medicalOfficer->getFile('image');
            $medicalOfficer->setImageURL($file->getFileName());

            if ($medicalOfficer->validate() && $medicalOfficer->save()){
                $file->saveFile();
                $response->redirect('/manager/mngMedicalOfficer');
            }
        }
        $this->layout='auth';
        return $this->render('Manager\addMedicalOfficer',[
            'model'=>$medicalOfficer
        ]);
    }


    public function ViewMedicalOfficer(Request $request, Response $response)
    {
        if ($request->isGet()){
            $medicalOfficer=medicalOfficer::findOne(['Officer_ID'=>$request->getBody()['id']]);
            if (Application::$app->session->get('Officer_ID')){
                Application::$app->session->remove('Officer_ID');
            }
            Application::$app->session->setPermanant('Officer_ID',$medicalOfficer->getOfficerID());
            $this->layout='auth';
            return $this->render('Manager\viewMedicalOfficer',[
                'model'=>$medicalOfficer
            ]);
        }
        if ($request->isPost()){
            $Officer_ID=Application::$app->session->get('Officer_ID');
            $medicalOfficer=medicalOfficer::findOne(['Officer_ID'=>$Officer_ID]);
            $medicalOfficer->loadData($request->getBody());

            if ($medicalOfficer->validate(true) && $medicalOfficer->update($Officer_ID)){
                $response->redirect('/manager/mngMedicalOfficer?update=true');
            }
        }
    }

}