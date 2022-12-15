<?php

namespace App\model\users;

use App\model\database\dbModel;
class User extends dbModel
{

    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED = 2;



    protected string $name='';
    protected string $email='';
    protected string $password='';
    protected string $type_id='';
    protected string $id='';
    protected string $role='organisation';
    protected string $address1='';
    protected string $address2='';
    protected string $city='';
    protected string $postalcode='';
    protected string $tel='';
    protected string $status='';


    /**
     * @return string
     */

    public function getName():string{
        return $this->name;
    }
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
        return $this->id;
    }


    public function rules(): array
    {

        return ['name'=> [self::RULE_REQUIRED],
            'email'=> [self::RULE_REQUIRED,self::RULE_UNIQUE],
            'password'=> [self::RULE_REQUIRED,[self::RULE_MIN,'min'=>6]],
            'address1'=> [self::RULE_REQUIRED],
            'address2'=> [self::RULE_REQUIRED],
            'city'=> [self::RULE_REQUIRED],
            'postalcode'=> [self::RULE_REQUIRED],
            'tel'=> [self::RULE_REQUIRED]];
    }

    public static function getTableShort(): string
    {
        return 'sc';
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

    public function register(): bool
    {
        return $this->save();
    }
    public function getDisplayName(): string
    {
        return $this->name;
    }

    public function setPassword(string $password_hash)
    {
        return $this->password= $password_hash;
    }
}