<?php
/* @var string $firstName*/
/* @var string $lastName*/

use App\view\components\ResponsiveComponent\CardGroup\CardGroup;
use App\view\components\ResponsiveComponent\NavbarComponent\AuthNavbar;

$navbar= new AuthNavbar('Manager Board','/manager','/public/images/icons/user.png',$firstName.' '.$lastName);
echo AuthNavbar::getNavbarCSS();
echo $navbar;

?>
<?php

use App\view\components\ResponsiveComponent\Title\primaryTitle;
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
 <?php
    echo CardGroup::CardPanel();
     echo $ManageRequestCard;
     echo $ManageDonorsCard;
     echo $ManageSponsorshipCard;
     echo $ManageMedicalOfficerCard;
     echo $ManageCampaignCard;
     echo $ManageReportCard;
     echo CardGroup::CloseCardPanel();
 ?>



