<?php
?>
<link rel="stylesheet" href="/public/styles/home.css">
<!--<script src="/public/scripts/home.js"></script>-->

<?php

$donation_Image='/public/images/donation.png';
$donation_History='/public/images/Icons/icons8-order-history-80.png';
$donation_Guideline = '/public/images/Icons/icons8-more-details-50.png';
$nearby_Donations = '/public/images/Icons/icons8-nearby-32.png';


//$image_card=new \App\view\components\Card\ImageCard("Image Card", "$donation_Image");
$Image=new \App\view\components\Image\GeneralImage("/public/images/logo.png", "Home Image", "logo","250rem");
//$Login_Button= new App\view\components\Button\PrimaryButton("Login", "/login", "btn-primary mx-1");
//$Register_Button= new App\view\components\Button\PrimaryButton("Register", "/login", "btn-red mx-1");
//$s= new \App\view\components\Card\CounterCard("Click Me", "100");
$c1 = new \App\view\components\Card\ClickableCard("Donation Guidline", $donation_Guideline,"Donation Guidline");
$c2 = new \App\view\components\Card\ClickableCard("Donation History", $donation_History,"Donation History");
$c3 = new App\view\components\Card\ClickableCard("Nearby Donations", $nearby_Donations,"Nearby Donations");
?>
<img class="home-bg" src="/public/images/homebg.png"  alt=""/>
<div class="super-header">
    <div class="nav-beg">
        <div class="nav-logo g-flex g-flex-col">
            <div class="g-flex g-flex-col">
                <div class="g-flex g-flex-align-center">
                    <?php echo $Image->render();?>
                    <h1 class="nav-title">Welcome <br> {{name}}</h1>
                </div>
                <div class="nav-desc">
                    <p class="text text-white">Thank you for visiting the Be Positive blood donation campaign management system. As a registered user, you have the opportunity to make a positive impact on the lives of others by donating blood. Your generosity and commitment to helping those in need is greatly appreciated. Thank you for being a part of the Be Positive community and for doing your part to save lives.</p>

                </div>
            </div>
<!--           //--><?php //echo $Login_Button->render();?>
<!--                <div class="btn-panel">-->
<!--                //--><?php //echo $Register_Button->render();?>
<!--            </div>-->
        </div>

    </div>
    <header>
        <nav>
            <ul class="navList">
                <li class="navLi"><a href="">Home</a></li>
                <li class="navLi"><a href="">About</a></li>
                <li class="navLi"><a href="/logout">Logout</a></li>
                <li class="navLi"><a href="/donor/profile">Profile</a></li>
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
<div class="home-body">
    <div class="card-grp g-flex g-flex-wrap">
        <a href="/donor/guideline"> <?php
            echo $c1->render();
            ?>
        </a>
        <a href="/donor/history"> <?php
            echo $c2->render();
            ?>
        </a>

        <a href="#">
        <?php
        echo $c3->render();
//        echo $s2->render();
//        echo $s4->render();
//        echo $s3->render();

        ?></a>
    </div>
</div>

<script src="/public/scripts/home.js"></script>

