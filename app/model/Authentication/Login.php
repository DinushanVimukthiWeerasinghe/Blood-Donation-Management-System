<?php

namespace App\model\Authentication;

use App\model\users\Person;
use App\model\users\User;
use Core\Application;
use Core\Model;

class Login extends Model
{


    public string $email='';
    public string $password='';
    public string $role='';

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
        //    Hashing Algorithm PASSWORD_BCRYPT

        $user= User::findOne(['email' => $this->email]);
//        $hashPassword=$user->getPassword();

        if(!$user)
        {
            $this->addError('email','Invalid E-mail !');
            return false;
        }
//        print_r($user->getPassword());
        $hashPassword=$user->getPassword();
        if(!password_verify($this->password,$user->getPassword()))
        {
            $this->addError('password','Incorrect Password!');
            return false;
        }
//        if ($this->password != $user->getPassword())
//        {
//            $this->addError('password','Incorrect Password!');
//            return false;
//        }

        Application::$app->login($user);
        return true;
    }
}