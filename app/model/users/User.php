<?php

namespace App\model\users;

use App\model\database\dbModel;
class User extends dbModel
{
    protected string $email='';
    protected string $password='';
    protected string $type_id='';
    protected string $uid='';
    protected string $role='';

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

    /**
     * @return string
     */
    public function getTypeId(): string
    {
        return $this->type_id;
    }

    /**
     * @return string
     */
    public function getUid(): string
    {
        return $this->uid;
    }


    public function rules(): array
    {
        // TODO: Implement rules() method.
    }

    public static function getTableShort(): string
    {
        return 'sc';
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
            'role',
            'type_id'
        ];
    }
}