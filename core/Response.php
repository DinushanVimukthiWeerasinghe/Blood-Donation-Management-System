<?php
namespace Core;
class Response
{
    public function setStatusCode(int $code): void
    {
        http_response_code($code);
    }

    public function redirect(string $url): void
    {
        header('Location: ' . $url);
    }

    public function sendFile(string $string)
    {
        header('Content-Type: image/png');
        return readfile($string);
    }
}