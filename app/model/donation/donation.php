<?php

namespace App\model\donation;

class donation extends \App\model\database\dbModel
{
    protected string $Packet_ID;
    protected string $Donor_Id;
    protected string $Officer_ID;
    protected string $Blood_Volume;
    protected string $In_Time;
    protected string $Out_Time;
    protected string $Date;
    protected string $Venue;
    protected string $Effects;

    public function rules(): array
    {
        // TODO: Implement rules() method.
        return [];
    }

    public static function getTableShort(): string
    {
        // TODO: Implement getTableShort() method.
        return 'donation';
    }

    public static function tableName(): string
    {
        // TODO: Implement tableName() method.
        return 'Donations';
    }

    public static function PrimaryKey(): string
    {
        // TODO: Implement PrimaryKey() method.
        return 'Packet_ID';
    }

    public function attributes(): array
    {
        // TODO: Implement attributes() method.
        return [
            'Packet_ID',
            'Donor_Id',
            'Officer_ID',
            'Blood_Volume',
            'In_Time',
            'Out_Time',
            'Date',
            'Venue',
            'Effects'
        ];
    }
    public static function findDonations(string $Donor_Id): array|bool{
        $tableName = self::tableName();
        $statement = self::prepare("SELECT * FROM $tableName WHERE Donor_Id = $Donor_Id");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_CLASS,static::class);
    }

    public function getDetails(): array{
        return ['Packet_ID' => $this->Packet_ID,
            'Donor_Id' => $this->Donor_Id,
            'Officer_ID'=> $this->Officer_ID,
            'Blood_Volume' => $this->Blood_Volume,
            'In_Time' => $this->In_Time,
            'Out_Time' => $this->Out_Time,
            'Date' => $this->Date,
            'Venue' => $this->Venue,
            'Effects' => $this->Effects];
    }
}