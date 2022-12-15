<?php

namespace App\model\Report;

class Report extends \App\model\database\dbModel
{
    protected ?string $Report_Id=null;
    protected string $Donor_ID;
    protected string $Weight="Visit Nearby Donation Center";
    protected string $Blood_Group="Visit Nearby Donation Center";
    protected string $Created_On;
    protected string $Remark="Visit Nearby Donation Center";
    protected string $Updated_By;

    public function rules(): array
    {
        // TODO: Implement rules() method.
        return [
            'Report_Id' => [self::RULE_REQUIRED],
            'Donor_ID' => [self::RULE_REQUIRED],
            'Weight' => [self::RULE_REQUIRED],
            'Blood_Group' => [self::RULE_REQUIRED],
            'Created_On' => [self::RULE_REQUIRED],
            'Remark' => [self::RULE_REQUIRED],
            'Updated_By' => [self::RULE_REQUIRED]
        ];
    }

    public static function getTableShort(): string
    {
        // TODO: Implement getTableShort() method.
        return 'report';
    }

    public static function tableName(): string
    {
        // TODO: Implement tableName() method.
        return 'Report';
    }

    public static function PrimaryKey(): string
    {
        // TODO: Implement PrimaryKey() method.
        return 'Report_Id';
    }

    public function attributes(): array
    {
        // TODO: Implement attributes() method.
        return [
            'Report_Id',
            'Donor_ID',
            'Weight',
            'Blood_Group',
            'Created_On',
            'Remark',
            'Updated_By'
        ];
    }
    public function getAttributes(): array
    {
        return [
            'Report_Id' => $this->Report_Id,
            'Donor_ID' => $this->Donor_ID,
            'Weight' => $this->Weight,
            'Blood_Group' => $this->Blood_Group,
            'Created_On' => $this->Created_On,
            'Remark' => $this->Remark,
            'Updated_By' => $this->Updated_By,
        ];
    }

    public function getBriefReport(): array{
        return [
            'Weight' => $this->Weight,
            'Blood_Group' => $this->Blood_Group,
            'Remark' => $this->Remark
        ];
    }

    public function isNotAvailable(): bool
    {
        return $this->Report_Id === null;
    }
}