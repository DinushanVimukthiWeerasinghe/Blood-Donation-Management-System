<?php

namespace App\view\components\Image;

class RoundedImage extends BaseImage
{
    protected int $round=50;

    public function __construct($src, $alt, $class)
    {
        parent::__construct($src, $alt, $class);
    }

}