<?php

namespace Core;

class File
{
    public $name;
    public $type;
    public $tmp_name;
    public $error;
    public $size;
    public $extension;
    public $path;
    public $file;

    /**
     * @param mixed $string
     */
    public function __construct(mixed $string){
        $this->name=$string['name'];
        $this->type=$string['type'];
        $this->tmp_name=$string['tmp_name'];
        $this->error=$string['error'];
        $this->size=$string['size'];
        $this->extension=pathinfo($this->name,PATHINFO_EXTENSION);
        $this->path=Application::$ROOT_DIR.'/public/upload/'.$this->name;
        $this->file=$string;
    }

    public function saveFile(): string
    {
        if($this->error===0){
            move_uploaded_file($this->tmp_name,$this->path);
            return $this->path;
        }
    }

    public function deleteFile(): void
    {
        if(file_exists($this->path)){
            unlink($this->path);
        }
    }

    public function getFileName(): string
    {
        return '/public/upload/'.$this->name;
    }

    public function getFileType()
    {
        return $this->type;
    }

    public function getFileTmpName()
    {
        return $this->tmp_name;
    }

    public function getFileError()
    {
        return $this->error;
    }

    public function getFileSize()
    {
        return $this->size;
    }

    public function cropFile(int $int, int $int1): void
    {
        $im=move_uploaded_file($this->tmp_name,$this->path);
        $image = imagecreatefromjpeg($this->path);
        $size = min(imagesx($image), imagesy($image));
        $im2 = imagecrop($image, ['x' => 0, 'y' => 0, 'width' => 250, 'height' => 150]);

    }
}