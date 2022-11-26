<script src="/public/scripts/customAlert.js"></script>
<link rel="stylesheet" href="/public/styles/alert.css">
<?php
/* @var string $firstName*/
/* @var string $lastName*/
use App\model\users\medicalOfficer;
use App\view\components\ResponsiveComponent\ImageComponent\BackGroundImage;
use App\view\components\ResponsiveComponent\NavbarComponent\AuthNavbar;
use App\view\components\ResponsiveComponent\Title\primaryTitle;

$background=new BackGroundImage();
$navbar= new AuthNavbar('Manage Medical Officers','/manager/profile','/public/images/icons/user.png');

if (isset($_GET['update']) and $_GET['update']=true)
{
    echo "<script>
CustomAlert.fire({
  icon: 'success',
  title: 'Medical Officer Updated Successfully',
  showConfirmButton: false,
  timer: 1500
}).then(function (value) {
    if (value.dismiss === 'timer') {
        window.location.href = '/manager/mngMedicalOfficer';
    }
   
});
</script>";
}

echo AuthNavbar::getNavbarCSS();

echo $navbar;
echo $background;
echo AuthNavbar::getNavbarJS();
//echo new primaryTitle('Manage Medical Officers');
/* @var array $data*/
/* @var medicalOfficer $value*/


function GetImage($imageURL){
    if($imageURL==null){
        return '/public/images/icons/user1.png';
    }
    else{
        return $imageURL;
    }
}
?>
<div class="add-card" onclick="Redirect('/manager/mngMedicalOfficer/add')">
    <div class="card-image" >
        <img src="/public/images/icons/manager/manageMedicalOfficer/doctor.png" alt="">
    </div>
    <hr class="line">
    <div class="card-title">Add Medical Officer</div>
</div>
<div class="add-card-mb">
    <div class="card-image" >
        <img src="/public/images/icons/add-mo.png" alt="">
    </div>
</div>
<link rel="stylesheet" href="/public/styles/manager/mngMO.css">
<div class="detail-pane">
    <div class="filter-pane">
        <div class="search-input">
            <label class="search">Search
                <input class="search-box" name="search">
            </label>

            <div class="search-icon">
                <img src="/public/images/icons/search.png" alt="">
            </div>
        </div>
        <div class="filter-card">
            <div class="card-navigation">
                <img class="nav-btn" src="/public/images/icons/previous.png" alt="">
                <img class="nav-btn" src="/public/images/icons/next.png" alt="">
            </div>
        </div>

    </div>
    <div class="card-pane">
        <?php
        if (empty($data))
        {?>
            <div class="empty-card">
                <div class="card-body">
                    <div class="card-title"><img src="/public/images/icons/not-found.png" alt=""></div>
                    <div class="card-title">No Officers Yet!</div>
                </div>
            </div>

        <?php
        }else
        {
            foreach ($data as $key=>$value){?>
                <div class="detail-card" id="<?php echo $value->getOfficerID()?>" onclick="RedirectID('<?php echo $value->getOfficerID()?>')">
                    <div class="card-image" >
                        <img src='<?php echo GetImage($value->getImageURL()) ?>' alt="" width="80px" height="80px">
                    </div>
                    <div class="card-body">
                        <div class="card-title"><?php echo $value->getName()?></div>
                        <ul class="detail-list">
                            <li class="detail"><?php echo $value->getPosition()?></li>
<!--                            <li class=" detail ">--><?php //echo $value->getStatus()==1?'available':'unavailable'?><!--</li>-->
                        </ul>
<!--                        <div class="card-footer">-->
<!--                            <a href="">View</a>-->
<!--                        </div>-->
                    </div>
                </div>`
            <?php
            }
            }

            ?>

    </div>
</div>
<script src="/public/scripts/manager/demo.js"></script>



