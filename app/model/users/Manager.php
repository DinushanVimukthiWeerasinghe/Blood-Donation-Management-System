<?php

namespace App\model\users;

use App\model\database\dbModel;

class Manager extends dbModel
{

    private string $Officer_ID='';
    private string $First_Name='';
    private string $Last_Name='';
    private string $NIC='';
    private string $Branch_ID='';
    private string $Address1='';
    private string $Address2='';
    private string $City='';
    private string $Contact_No='';

    /**
     * @return string
     */
    public function getOfficerID(): string
    {
        return $this->Officer_ID;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->First_Name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->Last_Name;
    }

    /**
     * @return string
     */
    public function getNIC(): string
    {
        return $this->NIC;
    }

    /**
     * @return string
     */
    public function getBranchID(): string
    {
        return $this->Branch_ID;
    }

    /**
     * @return string
     */
    public function getAddress1(): string
    {
        return $this->Address1;
    }

    /**
     * @return string
     */
    public function getAddress2(): string
    {
        return $this->Address2;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->City;
    }

    /**
     * @return string
     */
    public function getContactNo(): string
    {
        return $this->Contact_No;
    }




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
}