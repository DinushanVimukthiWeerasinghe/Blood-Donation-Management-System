<?php
$lorem="<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium et ex, impedit iure laudantium nulla quia quisquam quo tempora velit.</div>";
$image=new \App\view\components\Image\GeneralImage("https://source.unsplash.com/user/c_v_r/200x200","alt","circle","100px");
$button=new \App\view\components\Button\PrimaryButton("Button","/manager","btn-primary");
$button2=new \App\view\components\Button\SecondaryButton("Button2","/manager");
$BtnGrp=new \App\view\components\ButtonGroup\GeneralButtonGroup([$button,$button2]);
$Card=new App\view\components\Card\BaseCard("",$image->render(). $lorem,$BtnGrp->render());
echo '<pre>';
print_r(\Core\Application::$app->getUser());
echo '</pre>';
if(\Core\Application::$app->isGuest()){
    echo "<h1>Guest</h1>";
}else{
    echo "<h1>Logged In</h1>";
}
?>
<link rel="stylesheet" href="/public/styles/dashboard.css">
Manager DashBoard
Demo
<div class="g-flex">
    <?php echo $Card->render()?>
    <?php echo $Card->render()?>
    <?php echo $Card->render()?>
    <?php echo $Card->render()?>
    <?php echo $Card->render()?>
    <?php echo $Card->render()?>

</div>

