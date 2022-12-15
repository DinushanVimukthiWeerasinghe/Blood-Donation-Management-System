<?php

namespace App\model\users;

use App\model\database\dbModel;

class Manager extends Person
{


    public function rules(): array
    {
        return [
            'First_Name' => [self::RULE_REQUIRED],
            'Last_Name' => [self::RULE_REQUIRED],
            'NIC' => [self::RULE_REQUIRED],
            'Contact_No' => [self::RULE_REQUIRED],
            'Address1' => [self::RULE_REQUIRED],
            'Address2' => [self::RULE_REQUIRED],
            'City' => [self::RULE_REQUIRED],
            'Officer_ID' => [self::RULE_REQUIRED],
            'Branch_ID' => [self::RULE_REQUIRED]
        ];
    }

    public static function getTableShort(): string
    {
        return 'bbm';
    }

    public static function tableName(): string
    {
        return 'blood_bank_manager';
    }

    public static function PrimaryKey(): string
    {
        return 'Officer_ID';
    }

    public function attributes(): array
    {
        return [
            'First_Name',
            'Last_Name',
            'NIC',
            'Contact_No',
            'Address1',
            'Address2',
            'City',
            'Officer_ID',
            'Branch_ID'
        ];
    }

    public function labels(): array
    {
        return [
            'First_Name' => 'First Name',
            'Last_Name' => 'Last Name',
            'NIC' => 'NIC',
            'Contact_No' => 'Contact No',
            'Address1' => 'Address1',
            'Address2' => 'Address2',
            'City' => 'City',
            'Officer_ID' => 'Officer ID',
            'Branch_ID' => 'Branch ID'
        ];
    }
}