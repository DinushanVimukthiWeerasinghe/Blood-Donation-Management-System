<?php

namespace App\model\users;

use App\model\database\dbModel;
use Core\File;

abstract class Person extends dbModel
{
    protected string $ID='';
    protected string $Username='';
    protected string $First_Name='';
    protected string $Last_Name='';
    protected string $Email='';
    protected string $NIC='';
    protected string $Password='';
    protected string $Address1='';
    protected string $Address2='';
    protected string $City='';
    protected string $UserType='';
    protected ?File $File;
    protected string $ImageURL='';
//    Logging History Array
    protected LoggingHistory $LoggingHistory;
    protected string $PostalCode='';
    protected string $Position='';
    protected string $Recent_Date='';
    protected string $Status='';
    protected string $Joined_Date='';

    protected string $Contact_No='';

    /**
     * @return File|null
     */




    /**
     * @return string
     */
    public function getID(): string
    {
        return $this->ID;
    }

    /**
     * @param string $ID
     */
    public function setID(string $ID): void
    {
        $this->ID = $ID;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->Username;
    }

    /**
     * @param string $Username
     */
    public function setUsername(string $Username): void
    {
        $this->Username = $Username;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->First_Name;
    }

    /**
     * @param string $First_Name
     */
    public function setFirstName(string $First_Name): void
    {
        $this->First_Name = $First_Name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->Last_Name;
    }

    /**
     * @param string $Last_Name
     */
    public function setLastName(string $Last_Name): void
    {
        $this->Last_Name = $Last_Name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     */
    public function setEmail(string $Email): void
    {
        $this->Email = $Email;
    }

    /**
     * @return string
     */
    public function getNIC(): string
    {
        return $this->NIC;
    }

    /**
     * @param string $NIC
     */
    public function setNIC(string $NIC): void
    {
        $this->NIC = $NIC;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     */
    public function setPassword(string $Password): void
    {
        $this->Password = $Password;
    }

    /**
     * @return string
     */
    public function getAddress1(): string
    {
        return $this->Address1;
    }

    /**
     * @param string $Address1
     */
    public function setAddress1(string $Address1): void
    {
        $this->Address1 = $Address1;
    }

    /**
     * @return string
     */
    public function getAddress2(): string
    {
        return $this->Address2;
    }

    /**
     * @param string $Address2
     */
    public function setAddress2(string $Address2): void
    {
        $this->Address2 = $Address2;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->City;
    }

    /**
     * @param string $City
     */
    public function setCity(string $City): void
    {
        $this->City = $City;
    }

    /**
     * @return string
     */
    public function getUserType(): string
    {
        return $this->UserType;
    }

    /**
     * @param string $UserType
     */
    public function setUserType(string $UserType): void
    {
        $this->UserType = $UserType;
    }

    /**
     * @param File|null $File
     */
    public function setFile(?File $File): void
    {
        $this->File = $File;
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
     * @return LoggingHistory
     */
    public function getLoggingHistory(): LoggingHistory
    {
        return $this->LoggingHistory;
    }

    /**
     * @param LoggingHistory $LoggingHistory
     */
    public function setLoggingHistory(LoggingHistory $LoggingHistory): void
    {
        $this->LoggingHistory = $LoggingHistory;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     */
    public function setPostalCode(string $PostalCode): void
    {
        $this->PostalCode = $PostalCode;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->Position;
    }

    /**
     * @param string $Position
     */
    public function setPosition(string $Position): void
    {
        $this->Position = $Position;
    }

    /**
     * @return string
     */
    public function getRecentDate(): string
    {
        return $this->Recent_Date;
    }

    /**
     * @param string $Recent_Date
     */
    public function setRecentDate(string $Recent_Date): void
    {
        $this->Recent_Date = $Recent_Date;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     */
    public function setStatus(string $Status): void
    {
        $this->Status = $Status;
    }

    /**
     * @return string
     */
    public function getJoinedDate(): string
    {
        return $this->Joined_Date;
    }

    /**
     * @param string $Joined_Date
     */
    public function setJoinedDate(string $Joined_Date): void
    {
        $this->Joined_Date = $Joined_Date;
    }

    /**
     * @return string
     */
    public function getContactNo(): string
    {
        return $this->Contact_No;
    }

    /**
     * @param string $Contact_No
     */
    public function setContactNo(string $Contact_No): void
    {
        $this->Contact_No = $Contact_No;
    }







    public static function getTableShort(): string
    {
        return 'Usr';
    }

    public static function tableName(): string
    {
        return 'users';
    }

    public static function PrimaryKey(): string
    {
        return 'user_id';
    }



}