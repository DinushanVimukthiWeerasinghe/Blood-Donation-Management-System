
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
    <a href="/organisation"><button type="button">Home</button></a>
    <main>
<!--       --><?php
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        exit();
        foreach ($data as $key=>$row){
        ?>
            <div class="card">
                <div class="image">
                    <img src="../../../../public/images/history.png">
                </div>
                <div class="caption">
                    <p class="campaign_name"><b>Campaign Name :-</b><?php echo $row['campaign'] ?></p>
                    <p class="postal_code"><b>Postal Code:- </b><?php echo $row['postal']?></p>
                    <p class="location"><b>Expected Donors:- </b><?php echo $row['donor']?></p>
                    <p class="date"><b>Campaign Date:- </b><?php echo $row['date']?></p>
                    <p class="amount"><b>Expected Amount:- </b><?php echo $row['amount']?></p>
                </div>
            </div>
        <?php } ?>
    </main>

</body>
</html>


