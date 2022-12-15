<?php

namespace App\model\users;

use App\model\database\dbModel;
use Core\Application;
use Core\Session;

class Campaign extends dbModel
{

    protected string $campaign='';
    protected int $manage ;
    protected string $location='';
    protected string $donor='';
    protected string $postal='';
    protected string $date='';
    protected string $amount='';
    public Session $session;
//    protected int $status= self::STATUS_INACTIVE;
//    protected string $postalcode='';
//    protected string $tel='';
//    protected string $role='Organisation';

    public function save()
    {
        //mnbhbjhjhchjhs
        $this->manage = Application::$app->session->get('user')->getSessionData();
        return parent::save();
    }

    public static function PrimaryKey(): string
    {
        return 'id';
    }

    public function attributes(): array
    {
        return [
            'campaign',
            'donor',
            'location',
            'postal',
            'date',
            'amount',
            'manage'

        ];
    }

    public function rules(): array
    {
        // TODO: Implement rules() method.
    }

    public static function getTableShort(): string
    {
        // TODO: Implement getTableShort() method.
    }

    public static function tableName(): string
    {
        return 'campaign';
    }
    public function create(): bool
    {
        return $this->save();
    }
//    public function history(): bool
//    {
//        $campaign= (new \App\model\users\Campaign)->findOne(['id' => $_SESSION['userInfo']]);
//    }
}