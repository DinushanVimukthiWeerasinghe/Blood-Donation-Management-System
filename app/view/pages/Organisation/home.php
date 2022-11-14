<?php

use Core\Application;
use App\model\users\User;

?>
<!--<img class="home-bg" src="/public/images/homebg.png"  alt=""/>-->
<!--<!--<div class="side-bar">-->-->
<!--<!--    Side Bar-->-->
<!--<!--</div>-->-->
<!--<div class="super-header">-->
<!--    <div class="nav-beg">-->
<!--    <div class="nav-logo g-flex g-flex-col">-->
<!--        <div class="g-flex g-flex-col">-->
<!--            <div class="g-flex g-flex-align-center">-->
<!--                --><?php //echo $Image->render();?>
<!--                <h1 class="nav-title">Blood Donation <br> Management System</h1>-->
<!--=======-->
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
            <img src="../../../../public/images/profile.png" class="leftImage">
            <h1 class="lefttopic">Welcome <?php echo $userName ?> Club</h1>
            <img src="../../../../public/images/campaign.png" class="left1ConImage">
            <p class="left1Con">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
            <img src="../../../../public/images/campaign.png" class="left2ConImage">
            <p class="left2Con">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
        </section>
    <!-- leftcorner end-->
    <!-- navigationbar Start-->
        <section class="navbar">
            <img src="../../../../public/images/bell.png" class="bell">
            <img src="../../../../public/images/profile.png" class="profile">
            <a href="/logout" class="logout">LOGOUT</a>
        </section>
    <!-- navigationbar end -->
    <!-- rightcorner start -->
        <section class="rightCorner">
            <div class="rc1">
                <img src="../../../../public/images/profile.png" class="rc1img">
                <p class="rc1Con"><?php echo $userName ?> Club Organisation</p>
            </div>
            <div class="rc2">
                <img src="../../../../public/images/profile.png" class="rc1img">
                <p class="rc2Con"><?php echo $userName ?> Club Organisation</p>
            </div>
        </section>
    <!-- rightcorner end -->
    <!--bottom start-->
        <a href="organisation/guidelines">
            <div class="bottom1">
                <img src="../../../../public/images/campaign.png" class="img1">
                <p class="img1Con">Campaign Guidelines</p>
            </div>
        </a>

        <a href="organisation/manage">
            <div class="bottom2">
                <img src="../../../../public/images/campaign.png" class="img2">
                <p class="img2Con">Manage Campaign</p>
            </div>
        </a>

        <a href="organisation/history">
            <div class="bottom3">
                <img src="../../../../public/images/campaign.png" class="img3">
                <p class="img3Con">History</p>
            </div>
        </a>


<!--            </div>-->
<!--            <div class="nav-desc">-->
<!--                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.-->
<!--                    At consequuntur distinctio doloremque eligendi excepturi explicabo, pariatur perferendis rerum.-->
<!--                    Alias beatae cupiditate distinctio doloribus eos, eum ex labore magni molestiae, nemo nihil nostrum quaerat quam-->
<!--                    quibusdam sequi sint soluta velit vitae.</p>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="btn-panel">-->
<!--            --><?php //echo $Login_Button->render();?>
<!--            --><?php //echo $Register_Button->render();?>
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    </div>-->
<!--    <header>-->
<!--        <nav>-->
<!--            <ul class="navList">-->
<!--                <li class="navLi"><a href="">Home</a></li>-->
<!--                <li class="navLi"><a href="">About</a></li>-->
<!--            </ul>-->
<!--            <!-- nav Button -->-->
<!--            <div class="navBtn ">-->
<!--                <div class="line1"></div>-->
<!--                <div class="line2"></div>-->
<!--                <div class="line3"></div>-->
<!--            </div>-->
<!--<<<<<<< Updated upstream-->
<!--        </nav>-->
<!--    </header>-->
<!--</div>-->
<!---->
<!--<br>-->
<!--<div class="card-grp g-flex g-flex-wrap">-->
<!--    --><?php
//    echo $s1->render();
//    echo $s2->render();
//    echo $s4->render();
//    //    echo $s->render();
//
//    ?>
<!--</div>-->
<!---->
<!---->
<!--=======-->
<!--        </a>-->
<!--    <!--bottom end-->-->
<!--</body>-->
<!--</html>-->
<!-->>>>>>> Stashed changes-->
