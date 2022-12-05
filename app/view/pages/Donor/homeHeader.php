<?php
$home = new \App\view\components\Image\GeneralImage("/public/images/home.png", "Home Image", "home", "50rem");
echo $home->render();