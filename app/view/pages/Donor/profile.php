<?php
$logo = new \App\view\components\Image\GeneralImage("/public/images/logo.png", "Home Image", "logo","50rem");
$home = new \App\view\components\Image\GeneralImage("/public/images/home.png", "Donor Home", "logo", "50rem")
?>

<head>
    <link rel="stylesheet" href='/public/styles/DonorProfile.css'>
</head>


<section class="profileBanner">
    <?php echo $logo->render();?>
    <h1>My Profile</h1>
        <div class="homeIcon">
            <a href="/donor"><?php echo $home->render();?></a>
        </div>
    </section>

<div class="superContainer">
    <div class="container">
        <div class="left">
            <img src="https://th.bing.com/th/id/R.d109030661f299bf427a10adebf80646?rik=QvhrbBgRD1Sqzw&pid=ImgRaw&r=0" alt="profile image for user" class="profilePicture" />
        </div>
        <div class="right">
            <table class="table">
                <tr><td>Donor ID</td><td>:</td><td>{{Donor_ID}}</td></tr>
                <tr><td>Name</td><td>:</td><td>{{firstname}} {{lastname}}</td></tr>
                <tr><td>Email</td><td>:</td><td>{{email}}</td></tr>
                <tr><td>NIC</td><td>:</td><td>{{NIC}}</td></tr>
                <tr><td>Mobile Number</td><td>:</td><td>{{contactNumber}}</td></tr>
                <tr><td>Address</td><td>:</td><td>{{city}}</td></tr>
        </table>
        </div>
    </div>

    <div class="changePassword">
        <button type="button">Change Password</button>
    </div>
    <div class=medicalDetails>
        <p> Blood Type: {{Blood_Group}}</p>
        <p>Weight(Kg): {{Weight}} </p>
        <p>Chronic Diseases: {{Remark}}</p>
    </div>
</div>
<div class="footerBar"></div>