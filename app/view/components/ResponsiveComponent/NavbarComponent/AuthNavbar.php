<?php

namespace App\view\components\ResponsiveComponent\NavbarComponent;

use App\model\users\Manager;
use App\model\users\User;
use Core\Application;
use Core\SessionObject;

class AuthNavbar
{
    public const Authenticated=true;
    public const NotAuthenticated=false;
    private string $title;
    private string $profileLinks;
    private string $profileImage;
    private string $profileName;

    /**
     * @param array $links
     * @param string $profileLinks
     * @param string $profileImage
     * @param string $profileName
     */
    public function __construct(string $title, string $profileLinks, string $profileImage,string $profileName='')
    {
        $this->title = $title;
        $this->profileLinks = $profileLinks;
        $this->profileImage = $profileImage;
        $this->profileName = $profileName;
    }


    private function getProfile()
    {
        $user_role=Application::$app->getUser()->getTypeId();
        $id=Application::$app->getUser()->getUid();
        $profileName='';
        if ($user_role==='manager')
        {
            /* @var Manager $manager */
            $manager= Manager::findOne(['Officer_ID'=>$id]);
            $profileName=$manager->getFirstName().' '.$manager->getLastName();
        }
            return <<<HTML
                <div class="profile">
                        <div class="logout" onclick="Logout()"><img src="/public/images/icons/sign-out.png" alt=""> </div>
                        <div class="navProfile"><img class="profile-icon" src="/public/images/icons/user.png" alt=""></div>
                        <div class="navProfileName"><span>$profileName</span></div>
                </div>
            HTML;
    }

    public static function getNavbarCSS(): string
    {
        return <<<HTML
            <link rel="stylesheet" href="/public/css/components/navbar/navbar.css">
        HTML;
    }

    public static function getNavbarJS(): string{
        return <<<HTML
            <script src="/public/js/components/navbar/navbar.js"></script>
        HTML;
    }

//echo "<li class='navLi'><a href='$value'>$key</a></li>";
    public function __toString(): string
    {
        return <<<HTML
            <header>
                <nav>
                    <div class="logo"><img src="/public/images/logo.png" width="80rem" alt=""><span>Be Positive</span></div>
                    <!-- nav List -->
                    <div class="title">{$this->title}</div>
                    <ul class="navList">
                        <div class="profile-sm">
                            <div class="navProfile"><img class="profile-icon" src="/public/images/icons/user.png" alt=""></div>
                            <div class="navProfileName"><span>$this->profileName</span></div>
                            <div class="logout" onclick="Logout()">Sign Out</div>
                        </div>
                        
                    </ul>
                  
                    
                    {$this->getProfile()}
                    <!-- nav Button -->
                    <div class="navBtn ">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                </nav>
            </header>
        HTML;

    }


}