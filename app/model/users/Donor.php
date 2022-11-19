<?php
namespace App\model\users;

use App\model\database\dbModel;
use Core\Application;

class Donor extends Person
{
    protected ?string $Donor_ID = null;
    protected int $contactNumber = 0;
    public function rules(): array
    {
        return [
            'Donor_ID' =>[self::RULE_REQUIRED],
            'username' => [self::RULE_REQUIRED, [self::RULE_UNIQUE, 'class' => self::class]],
            'firstname' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [self::RULE_UNIQUE, 'class' => self::class]],
            'NIC' => [self::RULE_REQUIRED, [self::RULE_UNIQUE, 'class' => self::class]],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'address1' => [self::RULE_REQUIRED],
            'address2' => [self::RULE_REQUIRED],
            'city' => [self::RULE_REQUIRED],
            'postalCode' => [self::RULE_REQUIRED],
            'userImage' => [self::RULE_REQUIRED],
            'userType' => [self::RULE_REQUIRED],
            'status' => [self::RULE_REQUIRED],
        ];
    }

    public function attributes(): array
    {
        return [
            'username',
            'firstname',
            'lastname',
            'email',
            'NIC',
            'password',
            'address1',
            'address2',
            'city',
            'postalCode',
            'userImage',
            'userType',
            'status',
            'contactNumber',
        ];
    }
    public function getAttributes(): array
    {
        return [
            'Donor_ID'=> $this->Donor_ID,
            'username'=> $this->getUsername(),
            'firstname' => $this->getFirstName(),
            'lastname' => $this->getLastName(),
            'email' => $this->getEmail(),
            'NIC'   => $this->getNIC(),
            'city' => $this->getCity(),
            'postalCode' => $this->getPostalCode(),
            'status' => $this->getStatus(),
            'contactNumber' => $this->contactNumber,
            ];
    }

    public static function tableName(): string{
        return 'Donor';
    }
    public static function PrimaryKey(): string{
        return 'Donor_ID';
    }

}