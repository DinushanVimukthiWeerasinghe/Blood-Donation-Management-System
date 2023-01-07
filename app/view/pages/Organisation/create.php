<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="/public/styles/orgcreate.css" />
</head>
<body>
<div class="container">
    <h1 class="form-title">Create Campaign</h1>
    <form action="create" method="post">
        <div class="main-user-info">
            <div class="user-input-box">
                <label for="campaignName">Campaign Name</label>
                <input type="text"
                       id="campaignName"
                       name="campaign"
                       placeholder="Campaign Name"/ required>
            </div>
            <div class="user-input-box">
                <label for="ExpectedDonors">Expected Donors</label>
                <input type="text"
                       id="ExpectedDonors"
                       name="donor"
                       placeholder="Expected Number of Donors" required/>
            </div>
            <div class="user-input-box">
                <label for="Location">Location</label>
                <input type="text"
                       id="Location"
                       name="location"
                       placeholder="Campaign Location" required/>
            </div>
            <div class="user-input-box">
                <label for="PostalCode">Postal Code</label>
                <input type="text"
                       id="PostalCod"
                       name="postal"
                       placeholder="Postal Code" required/>
            </div>
            <div class="user-input-box">
                <label for="Date">Campaign Date</label>
                <input type="date"
                       id="Date"
                       name="date"
                       placeholder="Campaign Date"required/>
            </div>
            <div class="user-input-box">
                <label for="ExpectedAmount">Expected Amount</label>
                <input type="text"
                       id="ExpectedAmount"
                       name="amount"
                       placeholder="Expected Amount" required/>
            </div>
        </div>
        <div class="gender-details-box">
            <span class="gender-title">Have You Read the Guidelines?</span>
            <div class="gender-category">
                <input type="radio" name="guide"  id="yes" onclick="ok()">
                <label for="yes">Yes</label>
                <input type="radio" name="guide" id="no" onclick="avoid()">
                <label for="no">No</label>
            </div>
            <p style="color: red;margin-left: 10%;font-size: 15pt;display: none" id="hide1">You must read the Guidelines for create campaign....</p>
        </div>
        <div class="form-submit-btn">
            <input type="submit" value="Create Campaign" id="hide2">
        </div>
    </form><br>
    <div class="back" style="border-radius: 5px;">
        <a href="manage"><button style="width: 100%;height: 50px;cursor: pointer;background-color:  rgb(0,0,255,0.5);border: none;font-size: 20px;color: white; cursor: pointer;" class="back">Back</button></a>
    </div>
</div>
<script>
    function avoid(){
        document.getElementById("hide1").style.display = "block";
        document.getElementById("hide2").style.backgroundColor = "red";
        document.getElementById("hide2").disabled = true;
    }
    function ok(){
        document.getElementById("hide1").style.display = "none";
        document.getElementById("hide2").style.display = "block";
        document.getElementById("hide2").style.backgroundColor = "black";
        document.getElementById("hide2").disabled = false;
    }
</script>
</body>
</html>
