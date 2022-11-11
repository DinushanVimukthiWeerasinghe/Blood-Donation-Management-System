<?php
namespace Core;
class Session
{
    protected const FLASH_KEY='flash_messages';
    public function __construct()
    {
        session_start();
        $flashMessages=$_SESSION[self::FLASH_KEY] ?? [];
        foreach ($flashMessages as $key=>&$flashMessage) {
            //Mark TO be Removed
            $flashMessage['remove']=true;
        }
        $_SESSION[self::FLASH_KEY]=$flashMessages;
    }

    public function __destruct()
    {
        //Iterate Over marked to be removed
        $flashMessages=$_SESSION[self::FLASH_KEY] ?? [];
        foreach ($flashMessages as $key=>&$flashMessage) {
            if ($flashMessage['remove']) {
                unset($flashMessages[$key]);
            }
        }
        $_SESSION[self::FLASH_KEY]=$flashMessages;

    }

    public function setFlash($key,$message): void
    {
        $_SESSION[self::FLASH_KEY][$key] = [
            'remove'=>false,
            'value'=>$message
        ];
    }

    public function getFlash($key)
    {
        return $_SESSION[self::FLASH_KEY][$key]['value'] ?? false;
    }

    public function get($key)
    {
        return $_SESSION[$key] ?? false;
    }
    public function set($key,$value): void
    {
        $_SESSION[$key]=$value;
    }

    public function remove($key): void
    {
        unset($_SESSION[$key]);
    }

}