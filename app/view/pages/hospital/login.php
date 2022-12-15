<?php
/* @var Login $model*/

use App\model\Authentication\Login;
?>
<link rel="stylesheet" href="/public/styles/fa/fa.css">
<div id="alert" class="pop-up text-error">
    <?php if(!empty($model->errors)): ?>
        <div class="alert alert-danger">
            <div class="alert-msg">
            <?php foreach ($model->errors as $key=>$value){
                echo $value[0];
                break;
            } ?>
            </div>
        </div>
    <?php endif;?>

</div>
<link rel="stylesheet" href="/public/styles/hospital/login.css">
<img src="/public/images/hospital/Cover-RGB-01.png" alt="Logo" class="logo">
<form action="/hospital/login" method="post">
    <h3>Login</h3>

    <label for="username">Username</label>
    <input type="email" placeholder="Email" id="email" name="email" required>

    <label for="password">Password</label>
    <input type="password" placeholder="Password" id="password" name="password" required>

    <input type="submit" value="Log In" class="button">
</form>

<script>
    const Alert= document.getElementById('alert');
    setTimeout(function () {
        Alert.style.display='none';
    },3000);
</script>