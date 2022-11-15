<?php

use Core\Application;

$lorem="<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium et ex, impedit iure laudantium nulla quia quisquam quo tempora velit.</div>";
$image=new \App\view\components\WebComponent\Image\GeneralImage("https://source.unsplash.com/user/c_v_r/200x200","alt","circle","100px");
$button=new \App\view\components\WebComponent\Button\PrimaryButton("Button","/manager","btn-primary");
$button2=new \App\view\components\WebComponent\Button\SecondaryButton("Button2","/manager");
$BtnGrp=new \App\view\components\WebComponent\ButtonGroup\GeneralButtonGroup([$button,$button2]);
$Card=new \App\view\components\WebComponent\Card\BaseCard("",$image->render(). $lorem,$BtnGrp->render());
if(Application::$app->isGuest()){
    echo "<h1>Guest</h1>";
}else{
    echo "<h1>Logged In</h1>";
}
?>
<!--<link rel="stylesheet" href="/public/styles/dashboard.css">-->
<div class="g-flex">
    <?php echo $Card->render()?>
    <?php echo $Card->render()?>
    <?php echo $Card->render()?>
    <?php echo $Card->render()?>
    <?php echo $Card->render()?>
    <?php echo $Card->render()?>

</div>

