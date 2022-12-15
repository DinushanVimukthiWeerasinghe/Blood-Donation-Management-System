<?php

namespace App\view\components\Card;

class ClickableCard
{
    public string $title;
    public string $image;
    public string $img_alt;

    public function __construct(string $title, string $image, string $img_alt)
    {
        $this->title = $title;
        $this->image = $image;
        $this->img_alt = $img_alt;
    }

    public function render(): string
    {
        return <<<HTML
        <div class="card">
            <h1 class="card-title">{$this->title}</h1>
            <div class="card-header">
                <img src="{$this->image}" alt="{$this->img_alt}">
            </div>
        </div>
        HTML;
    }

}