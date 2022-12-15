<?php

namespace App\model\hospital;

class hospital extends \App\model\database\dbModel
{
    protected $HospitalId;
    protected $Address1;
    protected $Address2;
    protected $City;
    protected $Telephone;
    protected $Location;
    protected $Email;

    public function rules(): array
    {
        // TODO: Implement rules() method.
        return [
            'HospitalId' => [self::RULE_REQUIRED],
            'Address1' => [self::RULE_REQUIRED],
            'Address2' => [self::RULE_REQUIRED],
            'City' => [self::RULE_REQUIRED],
            'Telephone' => [self::RULE_REQUIRED],
            'Email' => [self::RULE_REQUIRED],
        ];
    }

    public static function getTableShort(): string
    {
        // TODO: Implement getTableShort() method.
        return 'hospital';
    }

    public static function tableName(): string
    {
        // TODO: Implement tableName() method.
        return 'hospital';
    }

    public static function PrimaryKey(): string
    {
        // TODO: Implement PrimaryKey() method.
        return 'HospitalId';
    }

    public function attributes(): array
    {
        // TODO: Implement attributes() method.
        return [
            'HospitalId',
            'Address1',
            'Address2',
            'City',
            'Telephone',
            'Location',
            'Email'
        ];
    }
}