<?php

namespace App\model\users;

use App\model\database\dbModel;
use Core\File;

abstract class Person extends dbModel
{
    protected string $username='';
    protected string $firstname='';
    protected string $lastname='';
    protected string $email='';
    protected string $NIC='';
    protected string $password='';
    protected string $address1='';
    protected string $address2='';
    protected string $city='';
    protected string $userImage='';
    protected string $userType='';
    protected string $status='';
    protected ?File $file;
    protected string $imageURL='';
//    Logging History Array
    protected LoggingHistory $loggingHistory;
    protected string $postalCode='';

    /**
     * @return File|null
     */
    public function getFile(): ?File
    {
        return $this->file;
    }



    /**
     * @return string
     */
    public function getImageURL(): string
    {
        return $this->imageURL;
    }

    /**
     * @param string $imageURL
     */
    public function setImageURL(string $imageURL): void
    {
        $this->imageURL = $imageURL;
    }



    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getLastName():string
    {
        return $this->lastname;
    }
    public function getEmail():string
    {
        return $this->email;
    }
    public function getNIC():string
    {
        return $this->NIC;
    }
    public function getPassword():string
    {
        return $this->password;
    }
    public function getCity():string
    {
        return $this->city;
    }
    public function getPostalCode():string
    {
        return $this->postalCode;
    }
    public function getUsrImage():string
    {
        return $this->userImage;
    }
    public function getUserType():string
    {
        return $this->userType;
    }
    public function getStatus():string
    {
        return $this->status;
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