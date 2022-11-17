<?php

namespace App\view\components\ResponsiveComponent\NavbarComponent;

class Navbar
{
    private array $links;
    private string $profileLinks;
    private string $profileImage;
    private string $profileName;

    /**
     * @param array $links
     * @param string $profileLinks
     * @param string $profileImage
     * @param string $profileName
     */
    public function __construct(array $links, string $profileLinks, string $profileImage, string $profileName)
    {
        $this->links = $links;
        $this->profileLinks = $profileLinks;
        $this->profileImage = $profileImage;
        $this->profileName = $profileName;
    }

    private function getLinks(): string
    {
        $links = '';
        foreach ($this->links as $key => $value) {
            $links .= <<<HTML
                <li class="navLi"><a href="$value">$key</a></li>
            HTML;
        }
        return $links;
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
                    <ul class="navList">
                        <div class="profile-sm">
                            
                            <div class="navProfile"><img class="profile-icon" src="/public/images/icons/user.png" alt=""></div>
                            <div class="navProfileName"><span>$this->profileName</span></div>
                            <div class="logout">Sign Out</div>
                        </div>
                        {$this->getLinks()}
                    </ul>
                    <div class="profile">
                        <div class="logout" onclick="Logout()"><img src="/public/images/icons/sign-out.png" alt=""> </div>
                        <div class="navProfile"><img class="profile-icon" src="/public/images/icons/user.png" alt=""></div>
                        <div class="navProfileName"><span>$this->profileName</span></div>
                    </div>
                    
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