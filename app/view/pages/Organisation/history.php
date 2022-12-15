
<?php

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <link rel="stylesheet" href="/public/styles/Orghistory.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
</head>
<body>
<div>
    <a href="/organisation"><button type="button" style="height: 60px;font-size: 20px;margin-top: 2px;">Home</button></a>
    <div style="background-color: rgb(0,0,0,0.3);margin-top: 20px;margin-left: 20px;margin-right: 20px;border-radius: 20px;box-shadow: 10px 10px">
        <main>
            <?php
            foreach ($data as $key=>$row){
            ?>
                <div class="card" style="margin-top: 30px;margin-bottom: 30px;">
                    <div class="image">
                        <img src="../../../../public/images/history.png">
                    </div>
                    <div class="caption">
                        <p class="campaign_name" style="font-size: 20pt;color: red"><b><?php echo $row['campaign'] ?></b></p>
                        <p class="date" style="font-size: 15pt;color: red;margin-left: 50px;"><b><?php echo $row['date']?></b></p>
                        <p class="postal_code"><b>Postal Code:-&nbsp</b><?php echo $row['postal']?></p>
                        <p class="location"><b>Expected Donors:-&nbsp</b><?php echo $row['donor']?></p>
                        <p class="amount"><b>Expected Amount:-&nbsp</b><?php echo $row['amount']?></p>
                    </div>
                </div>
            <?php } ?>
        </main>
    </div>
</body>
</html>


