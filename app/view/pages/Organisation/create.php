<?php

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/public/styles/orgcreate.css">
</head>
<body>
<!-- profile banner-->
<section class="profileBanner">
    <h1>Create New Campaign</h1>
</section>
<!--profile banner end-->
<!--content area-->
<section class="contentArea">
    <form action="create" method="post">
        <input type="text" placeholder="Campaign Name" name="campaign" style="margin-left: 250px; height: 50px; width: 250px;text-align: center;margin-top: 80px;border-radius: 5px;">
        <input type="text" placeholder="Expected Donors" name="donor" style="margin-left: 250px; height: 50px; width: 250px;text-align: center;margin-top: 0px;border-radius: 5px;"><br><br><br><br>
        <input type="text" placeholder="Location" name="location" style="margin-left: 250px; height: 50px; width: 250px;text-align: center;border-radius: 5px;">
        <input type="text" placeholder="Postal Code" name="postal" style="margin-left: 250px; height: 50px; width: 250px;text-align: center;border-radius: 5px;"><br><br><br><br>
        <input type="date" placeholder="Date" name="date" style="margin-left: 250px; height: 50px; width: 250px;text-align: center;border-radius: 5px;">
        <input type="text" placeholder="Expected Amount" name="amount" style="margin-left: 250px; height: 50px; width: 250px;text-align: center;border-radius: 5px;"><br><br><br><br>
        <label style="margin-left: 250px; height: 50px;text-align: center;border-radius: 5px;font-size: 20pt;">Have You Read the Guidelines?</label>
            <label style="margin-left: 50px;font-size: 20pt;">Yes</label><input type="radio" placeholder="" name="guide" style="margin-left: 5px; height: 25px;text-align: center;border-radius: 5px; cursor: pointer;">
            <label style="margin-left: 50px;font-size: 20pt;">NO</label><input type="radio" placeholder="" name="guide" style="margin-left: 5px; height: 25px;text-align: center;border-radius: 5px;cursor: pointer;"><br><br>
        <button type="submit" style="margin-left: 800px; height: 40px;border-radius: 5px;cursor: pointer;background-color: black;color: whitesmoke;padding: 20px;font-size: 15pt;position: absolute">Create Campaign</button>
        <button style="margin-left: 600px; height: 40px;border-radius: 5px;cursor: pointer;background-color: black;color: whitesmoke;padding: 20px;font-size: 15pt;">Back</button>
    </form>

</section>

</body>
</html>

