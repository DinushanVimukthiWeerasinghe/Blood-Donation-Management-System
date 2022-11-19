<?php
$logo = new \App\view\components\Image\GeneralImage("/public/images/logo.png", "Home Image", "logo","50rem");
?>
<head>
    <link rel="stylesheet" href='/public/styles/DonorLogin.css'>
</head>
<header>
    <nav>
        <ul class="navList">
            <li class="navLi"><a href="">Home</a></li>
            <li class="navLi"><a href="">About</a></li>
            <li class="navLi"><a href="">Contact us</a> </li>
        </ul>
    </nav>
</header>

<?php echo $logo->render();?>
<div class="container">
    <div class="top">
        <div class="box">
        </div>
    </div>
    <div class="center">
        <div class="mid">
            <h2>Please Sign In</h2>
            <form action="/donor/login" method="post">
                <label for="email"></label><input id="email" name="email" placeholder="email" type="email"/>
                <label>
                    <input id="password" name="password" placeholder="password" type="password"/>
                </label>
                <div class="buttons">
                    <input class="login" type="submit" value="LogIn"/>
                    <a href="">Forgot your Password?</a>
                </div>
                <div class="buttons">
                    <p>Don’t have an account yet?</p>
                    <input class="btn-hover color-9" type="button" value="Register"/>
                </div>
            </form>
        </div>
    </div>
    <div class="bottom"></div>
</div>
