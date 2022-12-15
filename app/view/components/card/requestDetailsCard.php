<?php

namespace App\view\components\card;

class requestDetailsCard
{
    protected $requestId;
    protected $Officer_ID;
    protected $bloodType;
    protected $Remark;

    public function __construct(array $params){
        //print_r($params);
        foreach($params as $key => $value){
            $this->{$key} = $value;
        }
    }
    public function render(): string
    {
        return <<<HTML
        <div class="container" id="Add" onclick="Redirect('/hospital/viewEmergency')">
               <div class="image-container">
                    <img src="/public/images/hospital.png" alt="Add">
               </div>
               <div class="meta-container">
                    <h2 class="title">Officer ID</h2>
                    <h3>$this->Officer_ID</h3>
                    <h2 class="title">Blood Type</h2>
                    <h3>$this->bloodType</h3>
                    <h2 class="title">Remark</h2>
                    <h3>$this->Remark</h3>
                    <h3>$this->requestId</h3>
               </div>
        </div>

    HTML;
    }
}