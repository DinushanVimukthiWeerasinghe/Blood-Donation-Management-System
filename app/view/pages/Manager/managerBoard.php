<?php
use App\view\components\WebComponent\Card\Card;
echo Card::ImportJS();
echo Card::ImportCSS();
/* @var Manager $user*/

use App\model\users\Manager;

use App\view\components\WebComponent\Card\NavigationCard;
use Core\Application;
 $ManageRequestCard=new NavigationCard('/manager/mngRequests','/public/images/icons/manager/dashboard/requests.png','Manage Request');
 $ManageDonorsCard=new NavigationCard('/manager/mngDonors','/public/images/icons/manager/dashboard/donor.png','Manage Donors');
 $ManageSponsorshipCard = new NavigationCard('/manager/mngSponsorship','/public/images/icons/manager/dashboard/sponsors.png','Manage Donors');
 $ManageMedicalOfficerCard = new NavigationCard('/manager/mngMedicalOfficer','/public/images/icons/manager/dashboard/MedicalOfficer.png','Manage Medical Officer');
 $ManageCampaignCard = new NavigationCard('/manager/mngSponsorship','/public/images/icons/manager/dashboard/camp.png','Manage Campaigns');
 $ManageReportCard = new NavigationCard('/manager/mngSponsorship','/public/images/icons/manager/dashboard/report.png','Manage Report');
?>
<link rel="stylesheet" href="/public/styles/manager/board.css">
    <img class="home-bg" src="/public/images/homebg.png"  alt=""/>
<div class="title">Manager Dashboard</div>
    <div class="panel">
        <div class="card-grp">
            <?php echo $ManageRequestCard?>
            <?php echo $ManageDonorsCard?>
            <?php echo $ManageSponsorshipCard?>
            <?php echo $ManageMedicalOfficerCard?>
            <?php echo $ManageCampaignCard?>
            <?php echo $ManageReportCard?>
        </div>
        <!--    <div class="card-grp-sm">-->
        <!--        <div class="column">-->
        <!--            <div class="row">-->
        <!--                <div class="card">-->
        <!--                    <div class="card-header">-->
        <!--                        <div class="card-header-img">-->
        <!--                            <img src="/public/images/icons/manager/dashboard/requests.png" alt="Donor" width="100px">-->
        <!--                        </div>-->
        <!--                        <div class="card-title">-->
        <!--                            <h3>Manage Request</h3>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="card">-->
        <!--                    <div class="card-header">-->
        <!--                        <div class="card-header-img">-->
        <!--                            <img src="/public/images/icons/manager/dashboard/donor.png" alt="Donor" width="100px">-->
        <!--                        </div>-->
        <!--                        <div class="card-title">-->
        <!--                            <h3>Manage Donors</h3>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="row">-->
        <!--                <div class="card">-->
        <!--                    <div class="card-header">-->
        <!--                        <div class="card-header-img">-->
        <!--                            <img src="/public/images/icons/manager/dashboard/sponsors.png" alt="Donor" width="100px">-->
        <!--                        </div>-->
        <!--                        <div class="card-title">-->
        <!--                            <h3>Manage Sponsorship</h3>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="card">-->
        <!--                    <div class="card-header">-->
        <!--                        <div class="card-header-img">-->
        <!--                            <img src="/public/images/icons/manager/dashboard/MedicalOfficer.png" alt="Donor" width="100px">-->
        <!--                        </div>-->
        <!--                        <div class="card-title">-->
        <!--                            <h3>Manage Medical Officer</h3>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="row">-->
        <!--                <div class="card">-->
        <!--                    <div class="card-header">-->
        <!--                        <div class="card-header-img">-->
        <!--                            <img src="/public/images/icons/manager/dashboard/camp.png" alt="Donor" width="100px">-->
        <!--                        </div>-->
        <!--                        <div class="card-title">-->
        <!--                            <h3>Manage Campaigns</h3>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="card">-->
        <!--                    <div class="card-header">-->
        <!--                        <div class="card-header-img">-->
        <!--                            <img src="/public/images/icons/manager/dashboard/report.png" alt="Donor" width="100px">-->
        <!--                        </div>-->
        <!--                        <div class="card-title">-->
        <!--                            <h3>Manage Report</h3>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!---->
        <!---->
        <!--    </div>-->
    </div>


<?php



