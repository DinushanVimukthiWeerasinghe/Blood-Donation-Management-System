<?php
//print_r($_SESSION);
//exit();
?>
<link rel="stylesheet" href="/public/styles/hospital/hospitalBoard.css">

<div class="container-box">
    <div class="card-header">
        <h1>Hospital Dashboard</h1>
    </div>
    <div class="logout">
        <a class="Button" href="/logout">Logout</a>
    </div>
    <div class="container" id="Add" onclick="Redirect('/hospital/createEmergency')">
        <div class="image-container">
        <img src="/public/images/Hospital/add.png" alt="Add">
        </div>
        <div class="meta-container">
        <h2 class="title">Add Emergency Blood donation request</h2>
        <span class="description">Add new Emergency Blood request </span>
        </div>
    </div>
    <div class="container" id="Show" onclick="Redirect('/hospital/viewEmergency')">
        <div class="image-container">
            <img src="/public/images/Hospital/history.png" alt="Show">
        </div>
        <div class="meta-container">
            <h2 class="title">View Emergency Blood donation requests </h2>
            <span class="description">Show existing Emergency Blood request </span>
        </div>
    </div>
</div>
<script src="/public/scripts/hospital/hospitalBoard.js"></script>