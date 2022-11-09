<?php

namespace App\view\components\Button;

class PrimaryButton extends BaseButton
{
    public function __construct($text, $href)
    {
        parent::__construct($text, 'btn-primary', $href);
    }

}