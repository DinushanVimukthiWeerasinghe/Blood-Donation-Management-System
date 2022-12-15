<?php

namespace App\view\components\card;

class invalidEmailCard
{

    public function render() :string
    {
        return <<<HTML
        <div class="container" id="Add">
              
        </div>
        <script>
            card = document.getElementById("Add");
                window.alert("Invalid Email");
        </script>
        HTML;

    }
}