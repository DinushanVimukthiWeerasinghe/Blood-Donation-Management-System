<?php

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BDMS</title>
    <link rel="stylesheet" href="/public/styles/Orgregister.css">
</head>
<body>
<!--form -->
<section class="container forms">
    <div class="form login">
        <div class="form-content">
            <header>Register</header>
            <form action="/organisation/register" method="post">
                <div class="field input-field">
                    <input type="text" placeholder="Organisation Name" name="name" required >
                </div>
                <div class="field input-field">
                   <input type="text" placeholder="Address line1" name="address1" required>
                </div>
                <div class="field input-field">
                    <input type="text" placeholder="Address line2" name="address2" required>
                </div>
                <div class="field input-field">
                    <input type="text" placeholder="City" name="city" required>
                </div>
                <div class="field input-field">
                    <input type="text" placeholder="Postal Code" name="postalcode" required>
                </div>
                <div class="field input-field">
                    <input type="text" placeholder="Telephone Number" name="tel" required>
                </div>
                <div class="field input-field">
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <div class="field input-field">
                    <input type="password" placeholder="Password" name="password" id="password" required>
                    <i class="uil uil-eye-slash toggle"></i>
                </div>
                <div class="field button-field">
                    <button type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</section>
</body>

</html>