<?php
namespace Core;
class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect(string $url)
    {
        header('Location: ' . $url);
    }

    public function sendFile(string $string): bool|int
    {
        return readfile($string);
    }

    public function setContentType(string $string): void
    {
        header('Content-Type: ' . $string);
    }

    public function setContentLength(bool|int $filesize): void
    {
        header('Content-Length: ' . $filesize);
    }
}