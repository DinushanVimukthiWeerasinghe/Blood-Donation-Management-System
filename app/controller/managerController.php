<?php

namespace App\controller;

use App\model\Authentication\Login;
use App\model\users\Manager;
use App\model\users\medicalOfficer;
use App\model\users\User;
use Core\Application;
use Core\BaseMiddleware;
use Core\Controller;
use Core\File;
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
        $manager = Manager::findOne(['ID' => Application::$app->session->get('user')]);
        $params=[
            'firstName'=>$manager->getFirstName(),
            'lastName'=>$manager->getLastName()
        ];
        $this->layout='auth';
        return $this->render('Manager/managerBoard',$params);
    }

    public function ManageMedicalOfficer(): string
    {
        /* @var Manager $manager*/
        $manager = Manager::findOne(['ID' => Application::$app->session->get('user')]);
        $medicalOfficers=medicalOfficer::RetrieveAll();
        $params=[
            'firstName'=>$manager->getFirstName(),
            'lastName'=>$manager->getLastName(),
            'data'=>$medicalOfficers
        ];
        $this->layout='auth';
        return $this->render('Manager/mngMedicalOfficer',$params);
    }

    public function AddMedicalOfficer(Request $request, Response $response):string
    {
        $medicalOfficer=new medicalOfficer();
        if (Application::$app->request->isPost()){
            $medicalOfficer->loadData($request->getBody());

            $medicalOfficer->setID('MO'.rand(1000,9999));
            $medicalOfficer->setJoinedDate(date('Y-m-d'));
            $medicalOfficer->setRecentDate(date('Y-m-d'));
            $medicalOfficer->setStatus(1);

            $file=new File($_FILES['image']);
            $fileName=$file->GenerateFileName('MO');
            $medicalOfficer->setImageURL($fileName);

            if ($medicalOfficer->validate() && $medicalOfficer->save()){
                $file->saveFile();
                Application::$app->session->setFlash('success','Successfully Added Medical Officer!');
                $response->redirect('/manager/mngMedicalOfficer');
            }
        }
        $this->layout='auth';
        return $this->render('Manager/addMedicalOfficer',[
            'model'=>$medicalOfficer
        ]);
    }


    public function ViewMedicalOfficer(Request $request, Response $response)
    {
        if ($request->isGet()){
            $medicalOfficer=medicalOfficer::findOne(['ID'=>$request->getBody()['id']]);
            if (Application::$app->session->get('ID')){
                Application::$app->session->remove('ID');
            }
            Application::$app->session->setPermanant('ID',$medicalOfficer->getID());
            $this->layout='auth';
            return $this->render('Manager/viewMedicalOfficer',[
                'model'=>$medicalOfficer
            ]);
        }
        if ($request->isPost()){
            $Officer_ID=Application::$app->session->get('ID');
            $medicalOfficer=medicalOfficer::findOne(['ID'=>$Officer_ID]);
            $medicalOfficer->loadData($request->getBody());

            if ($medicalOfficer->validate(true) && $medicalOfficer->update($Officer_ID)){
                Application::$app->session->setFlash('success','Successfully Updated Medical Officer!');
                $response->redirect('/manager/mngMedicalOfficer?update=true');
            }
        }
    }

    public function upload(Request $request, Response $response)
    {
        $folderPath = Application::$ROOT_DIR."/public/upload/test/";
        $image_parts = explode(";base64,", $request->getBody()['image']);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = uniqid() . '.png';
        $file = $folderPath . $fileName;
        file_put_contents($file, $image_base64);
        return json_encode($file);
    }

    public function ManageSponsors()
    {
        $this->layout='auth';
        return $this->render('Manager/ManageSponsors');
    }

    public function ManageRequests(): string
    {
        $this->layout='auth';
        return $this->render('Manager/ManageRequests');}

    public function ManageDonors(): string
    {
        $this->layout='auth';
        return $this->render('Manager/ManageDonors');
    }


    public function ManageCampaigns(): string
    {
        $this->layout='auth';
        return $this->render('Manager/ManageCampaigns');
    }
    public function ManageReport(): string
    {
        $this->layout='auth';
        return $this->render('Manager/ManageReports');
    }

    public function SearchMedicalOfficer(Request $request, Response $response)
    {
        return json_encode(['data'=>'Hello']);
//        $medicalOfficers=medicalOfficer::Search($request->getBody()['search']);

    }

}