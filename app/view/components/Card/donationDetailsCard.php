<?php

namespace App\view\components\Card;

use App\controller\adminController;

class donationDetailsCard
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

    public function __construct(array $params){
        foreach($params as $key => $value){
            $this->{$key} = $value;
        }
    }

    public function render(): string
    {
        return <<<HTML
        <div class="card">
            <div class="card-header">
                Packet ID :<h1 class="card-title">$this->Packet_ID</h1>
            </div>
            <div class="card-body">
                <ul>
                    <li>Amount : $this->Blood_Volume</li>
                    <li>In time : $this->In_Time</li>
                    <li>Out Time :$this->Out_Time</li>
                    <li>Date : $this->Date</li>
                    <li>Campaign Code: $this->Venue</li>
                    <li>Effects : $this->Effects</li>
                </ul>
            </div>
        </div>
        HTML;
    }
}