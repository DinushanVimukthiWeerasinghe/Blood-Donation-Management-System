<?php

namespace App\model;

use Core\Model;

 class RegisterModel extends Model
{
    public string $name;
    public string $line1;
    public string $line2;
    public string $city;
    public string $postalcode;
    public string $tel;
    public string $email;
    public string $password;

    public function register(){
        echo "Creating New User";
    }
    public function rules(): array
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'line1' => [self::RULE_REQUIRED],
            'line2' => [self::RULE_REQUIRED],
            'city' => [self::RULE_REQUIRED],
            'postalcode' => [self::RULE_REQUIRED],
            'tel' => [self::RULE_REQUIRED,[self::RULE_MIN,'min' => 10],[self::RULE_MAX,'max'=> 10]],
            'email' => [self::RULE_REQUIRED,self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED,[self::RULE_MIN, 'min' => 8]],
        ];
    }

 }