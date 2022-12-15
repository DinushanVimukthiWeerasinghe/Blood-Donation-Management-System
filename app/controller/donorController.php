<?php

namespace App\controller;

use App\model\Report\Report;
use App\model\users\Donor;
use App\model\users\User;
use App\model\donation\donation;
use App\model\Authentication\Login;
use App\view\components\Card\donationDetailsCard;
use core\Application;
use Core\Request;
use Core\Response;

class donorController extends \Core\Controller
{

    public function usrCheck(Response $response){
        $guest = Application::$app->isGuest();
        if($guest){
            $response->redirect('/donor/login');
        }
    }

    public function home(Request $request, Response $response)
    {
        $this->usrCheck($response);
        $user = Application::$app->getUser();
        $name = $user->getFirstName();
        return $this->render('donor',['name'=>$name]);
    }

    public function login(Request $request, Response $response)
    {
        $guest = Application::$app->isGuest();
        if(!$guest) {
            $response->redirect('/donor');
        }
        if ($request->isPost())
        {
            $login = new Login();
            $login->loadData($request->getBody());
            if ($login->validate() && $login->login())
            {
                $response->redirect('/donor');
                return '';
            }
            else{
                echo "<center style='color: red; font-size: x-large;'>Wrong Credentials Try Again!!!</center>";
            }
        }
        $this->layout = 'auth';
        return $this->render('Donor/login');
    }

    public function profile(Request $request, Response $response)
    {
        $this->usrCheck($response);
        $donor = new Donor();
        $report = new Report();
        $user = Application::$app->getUser();
        $primaryKey = $user->primaryKey();
        $primaryValue = $user->{$primaryKey};
        $donor->loadData(Donor::findOne(['Donor_ID'=>$primaryValue]));
        if(Report::findOne(['Donor_ID'=>$primaryValue])) {
            $report->loadData(Report::findOne(['Donor_ID' => $primaryValue]));
        }
        if ($donor->isNotRegistered()){
            return $this->render('Donor/register');
        }
//        if ($report->isNotAvailable()){
//            //echo '<script>getEleme</script>'
//            return $this->render('Donor/profile', $donor->getAttributes());
//        }
        return $this->render('Donor/profile', $donor->getAttributes() + $report->getBriefReport());
    }
    public function signup(Request $request, Response $response)
    {
        if ($request-> isPost()){
            $user = new User();
            $user->loadData($request->getBody());
            $user->setId(time());
            $user->setPassword($user->getPassword());
            if(User::findOne(['email' => $user->getEmail()]))
            {
                echo "<center style='color: red;font-size: x-large'>This Email is already registered <a href='/donor/login'>Try Login</a></center>";
                return $this->render('Donor/signup');
            }

            if($user->validate() && $user->save())
            {
                $response->redirect('/donor/login');
            }

        }
        return $this->render('Donor/signup');
    }

    public function register(Request $request, Response $response)
    {
        $this->usrCheck($response);
        $user = Application::$app->getUser();
        $primaryKey = $user->primaryKey();
        $primaryValue = $user->{$primaryKey};

        if (Donor::findOne(['Donor_ID'=>$primaryValue])){
            $response->redirect('/donor/profile');
        }
        if($request->isPost()){
            $donor = new Donor();
            $donor->loadData($request->getBody());
            $donor->setDonorId($user->$primaryKey);
            $donor->setId($donor->getId());
            print_r($donor);

            if($donor->validate()&&$donor->save()){
                $response->redirect('/donor/profile');
            }
        }

        return $this->render('Donor/register');
    }

    public function guideline(Request $request, Response $response){
        return $this->render('Donor/donationGuideline');
    }

    public function history(Request $request, Response $response){
        $this->usrCheck($response);
        $user = Application::$app->getUser();
        $primaryKey = $user->primaryKey();
        $primaryValue = $user->{$primaryKey};
        $history = donation::findDonations($primaryValue);
        echo $this->render('Donor/donationHistory');
        echo '<div class="card-container">';

        if(!$history){
            echo '<div class="no-history">No History</div>';
        }

        foreach($history as $historyObj){
            $tempData = new donation();
            $tempData->loadData($historyObj);
            $card = new donationDetailsCard($tempData->getDetails());
            echo $card->render();
        }
        echo '</div>';
    }
}