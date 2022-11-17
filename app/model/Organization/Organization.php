<?php

namespace App\model\Organization;

use Core\Session;

class Organization extends \App\model\database\dbModel
{
    protected string $campaign = '';
    protected int $manage;
    protected string $location = '';
    protected string $donor = '';
    protected string $postal = '';
    protected string $date = '';
    protected string $amount = '';
    public Session $session;

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

    public static function PrimaryKey(): string
    {
        // TODO: Implement PrimaryKey() method.
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
}