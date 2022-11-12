<?php

namespace App\model\users;

use App\model\database\dbModel;
use Core\UserModel;

class User extends dbModel
{

    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED = 2;



    protected string $name='';
    protected string $email='';
    protected string $password='';
    protected string $address1='';
    protected string $address2='';
    protected string $city='';
    protected int $status= self::STATUS_INACTIVE;
    protected string $postalcode='';
    protected string $tel='';
    protected string $role='Organisation';
    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
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
    public function save()
    {
        $this->status = self::STATUS_ACTIVE;
        return parent::save();
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
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
            'password',
            'address1',
            'address2',
            'city',
            'postalcode',
            'tel',
            'status',
            'role',
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function register(): bool
    {
        return $this->save();
    }
    public function getDisplayName(): string
    {
        return $this->name;
    }
}