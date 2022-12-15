<script src="/public/scripts/customAlert.js"></script>
<link rel="stylesheet" href="/public/styles/alert.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="/public/styles/flash.css">
<!--<link rel="stylesheet" href="/public/styles/btn.css">-->
<?php
/* @var string $firstName*/
/* @var string $lastName*/
use App\model\users\medicalOfficer;
use App\view\components\ResponsiveComponent\Alert\FlashMessage;
use App\view\components\ResponsiveComponent\ButtonComponent\DashBoardButton;
use App\view\components\ResponsiveComponent\Card\Card;
use App\view\components\ResponsiveComponent\ImageComponent\BackGroundImage;
use App\view\components\ResponsiveComponent\NavbarComponent\AuthNavbar;
use App\view\components\ResponsiveComponent\Title\primaryTitle;
use Core\Application;

$background=new BackGroundImage();
$navbar= new AuthNavbar('Manage Medical Officers','/manager/profile','/public/images/icons/user.png');


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
FlashMessage::RenderFlashMessages();
?>



<?php
    echo DashBoardButton::getDashBoardButtonCSS();
    echo DashBoardButton::BackToDashBoard('/manager/dashboard');
?>

<div class="add-card" onclick="Redirect('/manager/mngMedicalOfficer/add')">
    <div class="card-image" >
        <img src="/public/images/icons/manager/manageMedicalOfficer/doctor.png" alt="">
    </div>
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
                <input class="search-box" name="search" id="search">
            </label>

            <div class="search-icon" id="search-btn">
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
            foreach ($data as $key=>$value){
                echo Card::DetailCard($value);
            }
            }
            ?>

    </div>
</div>
<script>
    const Search=document.getElementById('search');
    const SearchBtn=document.getElementById('search-btn');
    Search.addEventListener('keyup',function (e) {
        showUser(e.target.value);
    })
    SearchBtn.addEventListener('click',function (e) {
    })

    function showUser(name){

        if (name.trim()!==""){
            const XML=new XMLHttpRequest();
            XML.onreadystatechange=function () {
                if (this.readyState===4 && this.status===200) {
                    console.log("hello")
                    console.log(this.responseText);
                }
            XML.open('GET','/manager/mngMedicalOfficer/search?q='+name,true);
            XML.send();
            }
        }
    }
</script>
<script src="/public/scripts/manager/demo.js"></script>




