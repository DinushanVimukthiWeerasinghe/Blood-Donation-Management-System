<?php

namespace App\model\users;

class User extends \App\model\database\dbModel
{
    public string $email='';
    public string $password='';
    public string $type_id='';
    public string $uid='';

    /**
     * @return string
     */
    public function getUid(): string
    {
        return $this->uid;
    }
    public string $role='';
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
        return 'staff_credential';
    }

    public static function PrimaryKey(): string
    {
        return 'uid';
    }

    public function attributes(): array
    {
        return [
            'uid',
            'email',
            'password',
            'type_id',
            'role',
        ];
    }

    public function getFirstName(): string
    {
        return $this->firstname;
    }
}