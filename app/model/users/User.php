<?php

namespace App\model\users;

class User extends \App\model\database\dbModel
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED = 2;

    protected string $email='';
    protected string $password='';
    protected string $name='';
    protected string $firstname='';
    protected string $lastname='';
    protected string $role='';
    protected string $address1='';
    protected string $address2='';
    protected string $city='';
    protected string $postalcode='';
    protected string $tel='';
    public int $status = self::STATUS_INACTIVE;

    public function register(): bool
    {
        $this->status = self::STATUS_INACTIVE;
//        $this->password = password_hash($this->password,PASSWORD_DEFAULT);
        return parent::save();
    }
    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL,[self::RULE_UNIQUE,'class' => self::class,'attribute' => 'name' ]],
            'password' => [self::RULE_REQUIRED],
        ];
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
    public function name(): string
    {
        return $this->name;
    }


    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public static function getTableShort(): string
    {
        return 'users';
    }

    public static function tableName(): string
    {
        return 'users';
    }

    public static function PrimaryKey(): string
    {
        return 'id';
    }

    public function attributes(): array
    {
        return [
            'name',
            'email',
            'postalcode',
            'address1',
            'address2',
            'city',
            'tel',
            'password',
            'status',
        ];
    }

    public function getFirstName(): string
    {
        return $this->firstname;
    }
//    public function attributes(): array
//    {
//        return [
//            'name',
//            'email',
//            'line1',
//            'line2',
//            'city',
//            'postalCode',
//        ];
//    }
}