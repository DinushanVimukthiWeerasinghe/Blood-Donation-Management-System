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
            $this->addError('email','Invalid Account EMAIL!');
            return false;
        }
//        if(password_verify($this->password,$user->getPassword()))
//        {
//            $this->addError('password','Incorrect Password!');
//            return false;
//        }
        if ($this->password != $user->getPassword())
        {
            $this->addError('password','Incorrect Password!');
            return false;
        }
        echo '<pre>';
        print_r($user);
        echo '</pre>';
        Application::$app->login($user);
        return true;
    }
}