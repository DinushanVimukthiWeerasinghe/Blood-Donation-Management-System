<?php

namespace App\view\components\card;

class invalidPasswordCard
{
    public function render() :string
    {
        return <<<HTML
        <div class="container" id="Add">
               <div class="meta-container">
               </div>
        </div>
        <script>
            card = document.getElementById("Add");
                window.alert("Invalid Password");
        </script>
        HTML;

    }
}