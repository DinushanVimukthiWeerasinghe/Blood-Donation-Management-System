<?php

namespace App\view\components\Image;

abstract class BaseImage
{
    protected string $src;
    protected string $alt;
    protected string $class;

    public function __construct($src, $alt, $class)
    {
        $this->src = $src;
        $this->alt = $alt;
        $this->class = $class;
    }

    public function render(): string
    {
        return "
        <img src='$this->src' alt='$this->alt' class='$this->class'/>
        ";
    }


}