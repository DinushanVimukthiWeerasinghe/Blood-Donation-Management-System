<link rel="stylesheet" href="/public/styles/hospital/viewEmergency.css">
<div class="card-header">
    <h1>Created Requests</h1>
</div>
<?php

use App\view\components\card\requestDetailsCard;

echo '<div class="container-box">';
foreach($body as $value)
{
    //print_r($value);
//            $value->getAttributeVal();
    //print_r($value->getAttributeVal());
    $requestDetailsCard = new requestDetailsCard($value->getAttributeVal());
    echo $requestDetailsCard->render();
}
echo '</div>';
?>

