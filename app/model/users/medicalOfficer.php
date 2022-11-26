<?php

namespace App\model\users;

use App\model\database\dbModel;

class medicalOfficer extends dbModel
{

    protected string $Officer_ID='';
    protected string $First_Name='';
    protected string $Last_Name='';
    protected string $NIC='';
    protected string $Joined_Date='';
    protected string $Email='';
    protected string $Address1='';
    protected string $Address2='';
    protected string $City='';
    protected string $ImageURL='';
    protected string $Contact_No='';
    protected string $Status='';
    protected string $position='';

    /**
     * @param string $Status
     */
    public function setStatus(string $Status): void
    {
        $this->Status = $Status;
    }



    /**
     * @param string $position
     */
    public function setPosition(string $position): void
    {
        $this->position = $position;
    }


    /**
     * @param string $Recent_Date
     */
    public function setRecentDate(string $Recent_Date): void
    {
        $this->Recent_Date = $Recent_Date;
    }


    /**
     * @param string $Joined_Date
     */
    public function setJoinedDate(string $Joined_Date): void
    {
        $this->Joined_Date = $Joined_Date;
    }


    /**
     * @param string $Officer_ID
     */
    public function setOfficerID(string $Officer_ID): void
    {
        $this->Officer_ID = $Officer_ID;
    }



    /**
     * @return string
     */
    public function getImageURL(): string
    {
        return $this->ImageURL;
    }

    /**
     * @param string $ImageURL
     */
    public function setImageURL(string $ImageURL): void
    {
        $this->ImageURL = $ImageURL;
    }



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
    public function getName(): string
    {
        return $this->First_Name." ".$this->Last_Name;
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
    public function getJoinedDate(): string
    {
        return $this->Joined_Date;
    }

    /**
     * @return string
     */

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->Status;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    public function rules(): array
    {
        return [
            'Officer_ID'=>[self::RULE_REQUIRED],
            'First_Name'=>[self::RULE_REQUIRED],
            'Last_Name'=>[self::RULE_REQUIRED],
            'NIC'=>[self::RULE_REQUIRED,self::RULE_UNIQUE],
            'Joined_Date'=>[self::RULE_REQUIRED],
            'Status'=>[self::RULE_REQUIRED],
            'position'=>[self::RULE_REQUIRED],
            'Email'=>[self::RULE_REQUIRED],
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
        return 'Officer_ID';
    }

    public function attributes(): array
    {
        return [
            'Officer_ID',
            'First_Name',
            'Last_Name',
            'NIC',
            'Joined_Date',
            'Status',
            'position',
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
            'Officer_ID'=>'Officer ID',
            'First_Name'=>'First Name',
            'Last_Name'=>'Last Name',
            'NIC'=>'NIC',
            'Joined_Date'=>'Joined Date',
            'Status'=>'Status',
            'position'=>'Position',
            'Email'=>'Email',
            'Address1'=>'Address1',
            'Address2'=>'Address2',
            'City'=>'City',
            'ImageURL'=>'Image URL',
            'Contact_No'=>'Contact No',
        ];
    }
}