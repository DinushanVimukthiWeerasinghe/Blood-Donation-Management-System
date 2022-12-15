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
                <table>
                    <tr>
                        <td>Amount</td>
                        <td>: $this->Blood_Volume</td>
                    </tr>
                    <tr>
                        <td>In time</td>
                        <td>: $this->In_Time</td>
                    </tr>
                    <tr>
                        <td>Out Time</td>
                        <td>: $this->Out_Time</td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>: $this->Date</td>
                    </tr>
                    <tr>
                        <td>Campaign Code</td>
                        <td>: $this->Venue</td>
                    </tr>
                    <tr>
                        <td>Effects</td>
                        <td>: $this->Effects</td>
                    </tr>
                </table>
            </div>
        </div>
        HTML;
    }
}