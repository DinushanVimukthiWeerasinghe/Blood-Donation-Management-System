<?php

namespace App\model\Authentication;

use App\model\database\dbModel;
use App\model\users\Person;
use App\model\users\User;
use Core\Application;
use Core\Model;

class Login extends dbModel
{
    public string $email='';
    public string $password='';
    public function rules(): array
    {
        return [
            'email' => [
                self::RULE_REQUIRED,self::RULE_EMAIL
            ],
            'password' => [
                self::RULE_REQUIRED
            ],
        ];
    }

    public function labels():array
    {
        return[
            'email' => 'Your Email',
            'password' => 'Password'
        ];
    }

    public function login(): bool
    {
        $user= User::findOne(['email' => $this->email]);
        if(!$user)
        {
            $this->addError('email','User does not exist with this email');
            return false;
        }
        if(!password_verify($this->password,$user->getPassword()))
        {
            $this->addError('password','Password is incorrect');
            return false;
        }
        Application::$app->login($user);
        return true;
    }

    public static function getTableShort(): string
    {
        // TODO: Implement getTableShort() method.
        return 'login';
    }

    public static function tableName(): string
    {
        // TODO: Implement tableName() method.
        return 'login';
    }

    public static function PrimaryKey(): string
    {
        // TODO: Implement PrimaryKey() method.
        return 'uid';
    }

    public function attributes(): array
    {
        // TODO: Implement attributes() method.
        return [
            'uid',
            'email',
            'password',
            'role',
            'type_id'
        ];
    }
}