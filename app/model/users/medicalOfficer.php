<?php

namespace App\model\users;

use App\model\database\dbModel;

class   medicalOfficer extends Person
{



    public function rules(): array
    {
        return [
            'ID'=>[self::RULE_REQUIRED],
            'First_Name'=>[self::RULE_REQUIRED],
            'Last_Name'=>[self::RULE_REQUIRED],
            'NIC'=>[self::RULE_REQUIRED,self::RULE_UNIQUE],
            'Joined_Date'=>[self::RULE_REQUIRED],
            'Status'=>[self::RULE_REQUIRED],
            'Position'=>[self::RULE_REQUIRED],
            'Email'=>[self::RULE_REQUIRED,self::RULE_UNIQUE],
            'Address1'=>[self::RULE_REQUIRED],
            'Address2'=>[self::RULE_REQUIRED],
            'City'=>[self::RULE_REQUIRED],
            'ImageURL'=>[self::RULE_REQUIRED],
            'Contact_No'=>[self::RULE_REQUIRED],
        ];
    }

    public static function getTableShort(): string
    {
        return 'mo';
    }

    public static function tableName(): string
    {
        return 'medical_officer';
    }

    public static function PrimaryKey(): string
    {
        return 'ID';
    }

    public function attributes(): array
    {
        return [
            'ID',
            'First_Name',
            'Last_Name',
            'NIC',
            'Joined_Date',
            'Status',
            'Position',
            'Email',
            'Address1',
            'Address2',
            'City',
            'ImageURL',
            'Contact_No',
        ];
    }

    public function GetAttributesValue($attributes)
    {
        return $this->{$attributes};
    }

    public function labels(): array
    {
        return [
            'ID'=>'Officer ID',
            'First_Name'=>'First Name',
            'Last_Name'=>'Last Name',
            'NIC'=>'NIC',
            'Joined_Date'=>'Joined Date',
            'Status'=>'Status',
            'Position'=>'Position',
            'Email'=>'Email',
            'Address1'=>'Address1',
            'Address2'=>'Address2',
            'City'=>'City',
            'ImageURL'=>'Image URL',
            'Contact_No'=>'Contact No',
        ];
    }
}