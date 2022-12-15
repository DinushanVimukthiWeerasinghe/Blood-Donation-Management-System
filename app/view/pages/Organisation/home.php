<<<<<<< Updated upstream
<?php

$donation_Image='/public/images/donation.png';
$organization_Image='/public/images/organization.png';
$hospital_Image='/public/images/hospital.png';
$camp_Image='/public/images/campaign.png';

$image_card=new \App\view\components\WebComponent\Card\ImageCard("Image Card", "$donation_Image");
$Image=new \App\view\components\WebComponent\Image\GeneralImage("/public/images/logo.png", "Home Image", "","250rem");
$Login_Button= new \App\view\components\WebComponent\Button\PrimaryButton("Login", "/login", "btn-primary mx-1");
$Register_Button= new \App\view\components\WebComponent\Button\PrimaryButton("Register", "/login", "btn-red mx-1");
//$s= new \App\view\components\Card\CounterCard("Click Me", "100");
$s1= new \App\view\components\WebComponent\Card\CounterCard(['primary'=>"15,000+",'secondary'=>"Donors"], "100", $donation_Image);
$s2= new \App\view\components\WebComponent\Card\CounterCard(['primary'=>"1,000+",'secondary'=>"Organization"], "100", $organization_Image);
$s3= new \App\view\components\WebComponent\Card\CounterCard(['primary'=>"500+",'secondary'=>"Hospital"], "100", $hospital_Image);
$s4= new \App\view\components\WebComponent\Card\CounterCard(['primary'=>"100+",'secondary'=>"Campaign"], "100", $camp_Image);
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
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <!-- leftcorner -->
        <section class="leftContainer">
            <img src="../../images/profile.png" class="leftImage">
            <h1 class="lefttopic">Welcome Singha Club</h1>
            <img src="../../images/campaign.png" class="left1ConImage">
            <p class="left1Con">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
            <img src="../../images/campaign.png" class="left2ConImage">
            <p class="left2Con">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
        </section>
    <!-- leftcorner end-->
    <!-- navigationbar Start-->
        <section class="navbar">
            <img src="../../images/bell.png" class="bell">
            <img src="../../images/profile.png" class="profile">
            <a href="" class="logout">LOGOUT</a>
        </section>
    <!-- navigationbar end -->
    <!-- rightcorner start -->
        <section class="rightCorner">
            <div class="rc1">
                <img src="../../images/profile.png" class="rc1img">
                <p class="rc1Con">Sinha Club Organisation</p>
            </div>
            <div class="rc2">
                <img src="../../images/profile.png" class="rc1img">
                <p class="rc2Con">Singha Club Organisation</p>
            </div>
        </section>
    <!-- rightcorner end -->
    <!--bottom start-->
        <a href="#" <div class="bottom1">
            <img src="#" class="img1">
            <p class="img1Con">Campaign Guidelines</p>
