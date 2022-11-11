<?php

namespace Core;

abstract class DbModel extends Model
{
    abstract public function tableName():String;
    abstract public function attributes():array;

    public function save(){
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn($attr) => ":$attr",$attributes);
        $statement = self::prepare("INSERT INTO $tableName(".implode(',',$attributes).") VALUES(".implode(',',$params).")");
        echo '<pre>';
        var_dump($statement,$params,$attributes);
        echo '</pre>';
    }

    public function findOne($where){
        $tableName = static::tableName();
        $attributes = array_keys($where);
        $sql = implode("AND",array_map(fn($attr)=>"$attr =:$attr",$attributes));
        $statement=self::prepare("SELECT * FROM $tableName WHERE $sql");
        foreach ($where as $key => $item){
            $statement->bindValue(":$key",$item);
            $statement->execute();
            return $statement->fetchObject(static::class);
        }
    }

    public function prepare($sql){
        return Application::$app->db->pdo->prepare();
    }
}