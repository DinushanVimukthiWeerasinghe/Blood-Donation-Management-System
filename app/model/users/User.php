<?php

namespace App\model\users;

class User extends \App\model\database\dbModel
{
    protected string $email='';
    protected string $password='';
    protected string $firstname='';
    protected string $lastname='';
    protected string $role='0';
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
            'id',
            'email',
            'password',
            'firstname',
            'lastname',
            'role',
        ];
    }

    public function getFirstName(): string
    {
        return $this->firstname;
    }
    public function setPassword(string $rawPassword): void{
        $this->password = password_hash($rawPassword, PASSWORD_DEFAULT);
    }
}