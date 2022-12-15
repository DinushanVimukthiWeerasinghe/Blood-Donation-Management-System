<?php
?>
<link rel="stylesheet" href="/public/styles/hospital/register.css">
<div class="g-flex">
    <div class="container">
        <div class="title">Registration</div>
        <div class="content">
        <form action="/hospital/register" method="post" enctype="multipart/form-data">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Hospital ID</span>
                    <input type="text" placeholder="Enter Hospital ID" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Enter your email"  required>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Enter your number" required>
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <label>
                        <input type="text" placeholder="address line 1" required>
                    </label>
                    <label>
                        <input type="text" placeholder="address line 2" >
                    </label>
                    <label>
                        <input type="text" placeholder="City">
                    </label>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <label for="password"></label><input id="password" name="password" placeholder="password" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <label for="confirmPassword"></label><input id="confirmPassword" name="confirmPassword" placeholder="confirmPassword" type="password" required>
                </div>
                       <div class="button">
                <input type="submit" value="Register">
            </div>
                <div class="button">
                    <input type="reset" value="Reset">
        </div>
    </div>
</div>