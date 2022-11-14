<?php
?>
<link rel="stylesheet" href="/public/styles/home.css">
<script src="/public/scripts/home.js"></script>

<?php

$donation_Image='/public/images/donation.png';
$organization_Image='/public/images/organization.png';
$hospital_Image='/public/images/hospital.png';
$camp_Image='/public/images/campaign.png';

$image_card=new \App\view\components\Card\ImageCard("Image Card", "$donation_Image");
$Image=new \App\view\components\Image\GeneralImage("/public/images/logo.png", "Home Image", "logo","250rem");
$Login_Button= new App\view\components\Button\PrimaryButton("Login", "/login", "btn-primary mx-1");
$Register_Button= new App\view\components\Button\PrimaryButton("Register", "/login", "btn-red mx-1");
//$s= new \App\view\components\Card\CounterCard("Click Me", "100");
$s1= new \App\view\components\Card\CounterCard(['primary'=>"15,000+",'secondary'=>"Donors"], "100", $donation_Image);
$s2= new \App\view\components\Card\CounterCard(['primary'=>"1,000+",'secondary'=>"Organization"], "100", $organization_Image);
$s3= new \App\view\components\Card\CounterCard(['primary'=>"500+",'secondary'=>"Hospital"], "100", $hospital_Image);
$s4= new \App\view\components\Card\CounterCard(['primary'=>"100+",'secondary'=>"Campaign"], "100", $camp_Image);
?>
<img class="home-bg" src="/public/images/homebg.png"  alt=""/>
<!--<div class="side-bar">-->
<!--    Side Bar-->
<!--</div>-->
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
                    At consequuntur distinctio doloremque eligendi excepturi explicabo, pariatur perferendis rerum. .</p>

            </div>
        </div>
        <div class="btn-panel">
            <?php echo $Login_Button->render();?>
            <?php echo $Register_Button->render();?>
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
<div class="card-grp g-flex g-flex-wrap">
    <?php
    echo $s1->render();
    echo $s2->render();
    echo $s4->render();
    //    echo $s->render();

    ?>
</div>
<script src="/public/scripts/index.js"></script>

