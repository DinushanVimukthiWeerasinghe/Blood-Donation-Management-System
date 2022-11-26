<?php
//print_r($_SESSION);
?>


<link rel="stylesheet" href="/public/styles/home.css">
<link rel="stylesheet" href="/public/styles/alert.css">
<!--<script src="/public/scripts/home.js"></script>-->
<script src="/public/scripts/customAlert.js"></script>
<script>
    function Hoo(){
        CustomAlert.fire({
            title: 'Success!',
            text: 'Do you want to continue',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    }
</script>

<?php

use App\view\components\MobileComponent\Button\MPrimaryButton;
use App\view\components\MobileComponent\Button\MSecondaryButton;
use App\view\components\WebComponent\Button\PrimaryButton;
use App\view\components\WebComponent\Card\CounterCard;
use App\view\components\WebComponent\Card\DetailCard;
use App\view\components\WebComponent\Card\ImageCard;
use App\view\components\WebComponent\Image\GeneralImage;

$donation_Image='/public/images/donation.png';
$organization_Image='/public/images/organization.png';
$hospital_Image='/public/images/hospital.png';
$camp_Image='/public/images/campaign.png';

$image_card=new ImageCard("Image Card", "$donation_Image");
$Image=new GeneralImage("/public/images/logo.png", "Home Image", "logo","250rem");
$Login_Button= new PrimaryButton("Login", "/login", "btn-red mx-1");
$Login_Button_sm= new MPrimaryButton("Login", "/login", "btn-red mx-1");
$Register_Button= new PrimaryButton("Register", "/login", "btn-red mx-1");
$Register_Button_sm= new MSecondaryButton("Register", "/login", "btn-red mx-1");
//$s= new \App\view\components\Card\CounterCard("Click Me", "100");
$s1= new CounterCard(['primary'=>"15,000+",'secondary'=>"Donors"], "100", $donation_Image);
$s2= new CounterCard(['primary'=>"1,000+",'secondary'=>"Organization"], "100", $organization_Image);
$s3= new CounterCard(['primary'=>"500+",'secondary'=>"Hospital"], "100", $hospital_Image);
$s4= new CounterCard(['primary'=>"100+",'secondary'=>"Campaign"], "100", $camp_Image);
$btn= new PrimaryButton("Click Me", "/login", "btn-primary mx-1");

$e=new DetailCard("Card", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab asperiores distinctio eaque est eveniet, fugit labore nostrum reprehenderit voluptatum!", $btn->render());
?>

<img class="home-bg" src="/public/images/homebg.png"  alt=""/>
<div class="side-bar">
    <?php echo $e->render(); ?>
    <?php echo $e->render(); ?>
</div>
<div class="super-header">
    <div class="nav-beg">
    <div class="nav-logo g-flex g-flex-col">
        <div class="g-flex g-flex-col">
            <div class="g-flex g-flex-align-center">
                <?php echo $Image->render();?>
                <h1 class="nav-title">Blood Donation <br> Management System</h1>
            </div>
            <div class="nav-desc">
                <p class="text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    At consequuntur distinctio .</p>
            </div>
        </div>

<!--        <div class="btn-panel">-->
<!--            --><?php //echo $Login_Button->render();?>
<!--            --><?php //echo $Register_Button->render();?>
<!--        </div>-->
        <div class="btn-panel-sm">
            <?php echo $Login_Button_sm->render();?>
            <?php echo $Register_Button_sm->render();?>
        </div>
    </div>
    </div>
    <header>
        <nav>
            <ul class="navList">
                <li class="navLi"><a href="">Home</a></li>
                <li class="navLi"><a href="">About</a></li>
            </ul>
            <!-- nav Button -->
            <div class="navBtn ">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>
</div>

<br>
<div class="s-card-grp">
    <div class="s-card">
            <div class="s-card-title">
                <span class="text text-primary">Blood For Life</span>
            </div>
        <div class="s-card-body">
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, nostrum?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, et.  </span>
        </div>
            <div class="s-card-footer">
                <button class="btn-primary" onclick="Hoo()">Read More</button>
            </div>
    </div>
    <div class="s-card">
            <div class="s-card-title">
                <span class="text text-primary">Blood For Life</span>
            </div>
        <div class="s-card-body">
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, nostrum?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, et.  </span>
        </div>
            <div class="s-card-footer">
                <button class="btn-primary" onclick="Hoo()">Read More</button>
            </div>
    </div>

</div>
<div class="home-body">
    <div class="card-grp g-flex g-flex-wrap">
        <?php
        echo $s1->render();
        echo $s2->render();
        echo $s4->render();

        ?>
    </div>
</div>
<div class="footer">
    &copy; 2022 Blood Donation Management System
</div>

<script src="/public/scripts/home.js"></script>


