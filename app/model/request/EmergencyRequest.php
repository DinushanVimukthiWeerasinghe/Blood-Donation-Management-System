<?php

namespace App\model\request;

use Core\Response;
use Core\Request;

class EmergencyRequest extends \App\model\database\dbModel
{
    protected $Request_Id;
    protected $Officer_ID;
    protected $bloodType;
    protected $Remark;

    function __construct() {
         $this->Request_Id = rand(1,999);
         $this->setId($this->Request_Id);
    }
    public function rules(): array
    {
        // TODO: Implement rules() method.
        return [
            'Request_Id' => [self::RULE_REQUIRED],
            'Officer_ID' => [self::RULE_REQUIRED],
            'bloodType' => [self::RULE_REQUIRED],
            'Remark' => [self::RULE_REQUIRED],
        ];

    }

    public static function getTableShort(): string
    {
        // TODO: Implement getTableShort() method.
        return 'emergency_request';
    }

    public static function tableName(): string
    {
        // TODO: Implement tableName() method.
        return 'emergency_request';
    }

    public static function PrimaryKey(): string
    {
        // TODO: Implement PrimaryKey() method.
        return 'Request_Id';
    }

    public function attributes(): array
    {
        // TODO: Implement attributes() method.
        return ['Request_Id','Officer_ID','bloodType','Remark'];
    }

    public function getAttributeVal()
    {
        return ['Request_Id'=>$this->Request_Id,'Officer_ID' => $this->Officer_ID,'bloodType' => $this->bloodType,'Remark' => $this->Remark];
    }
    public function setOfficerID ($ID)
    {
        $this->Officer_ID  = $ID;
    }

    public function RetrieveAllDetails($where): bool|array
    {
        //print_r($where);
        $tableName=$this->tableName();
        $attributes=array_keys($where);

        $sql=implode(" AND ",array_map(fn($attr)=>"$attr=:$attr",$attributes));

        $statement=self::prepare("SELECT * FROM $tableName WHERE $sql");
        foreach ($where as $key=>$item)
        {
            $statement->bindValue(":$key",$item);
        }
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_CLASS,static::class);
        //echo $statement;
    }

}