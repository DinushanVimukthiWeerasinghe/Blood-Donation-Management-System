<?php

namespace App\view\components\card;

class successCard
{
    public function render() :string
    {
        return <<<HTML
        <div class="container" id="Add">
               <div class="meta-container">
                    <h2 class="title">Request Created Successfully</h2>
               </div>
        </div>
        <script>
            card = document.getElementById("Add");
                window.alert("Request Created Successfully");
        </script>
HTML;

    }
}
