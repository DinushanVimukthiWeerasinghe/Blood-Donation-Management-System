<?php

namespace App\view\components\ResponsiveComponent\Card;

use App\model\users\Person;
use App\view\components\ResponsiveComponent\Title\primaryTitle;

class Card
{
    public static function DetailCard($value): string
    {
        /* @var Person $value*/
        $id = $value->getID();
        $imageURL = $value->getImageURL();
        $firstName = $value->getFirstName();

        $lastName = $value->getLastName();
        $fullName=$firstName.' '.$lastName;
        $position = $value->getPosition();

        return <<<HTML
            <div class="detail-card" id="{$id}" onclick="RedirectID('{$id}')">
                    <div class="card-image" >
                        <img src='{$imageURL}' alt="" width="80px" height="80px">
                    </div>
                    <div class="card-body">
                        <div class="card-title">{$fullName}</div>
                        <ul class="detail-list">
                            <li class="detail">{$position}</li>
                        </ul>
                    </div>
                </div>
        HTML;


    }
}