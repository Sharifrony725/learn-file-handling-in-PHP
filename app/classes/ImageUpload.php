<?php

namespace App\Classes;

class ImageUpload
{
    // public $value;
    // public $imageName;
    // public $directory;
    private $post;
    private $file;
    private $directory;
    private $imageName;
    private $check;
    private $fileType;
    public function __construct($data, $file)
    {
        $this->post  = $data;
        $this->file   = $file;
    }
    public function index()
    {
        $this->imageName = $this->file['image']['name'];
        $this->directory = '../assets/img/' . $this->imageName;
        $this->check = getimagesize($this->file['image']['tmp_name']);
        $this->fileType = pathinfo($this->imageName,  PATHINFO_EXTENSION);
        if ($this->check) {
            if (!file_exists($this->directory)) {
                if ($this->fileType == 'jpg' || $this->fileType == 'png') {
                    move_uploaded_file($this->file['image']['tmp_name'], $this->directory);
                    return [
                        'name'  => $this->post['name'],
                        'image' => $this->directory
                    ];
                } else {
                    echo 'please upload jpg or png img';
                }
            } else {
                die('Sorry.File already exists.please try another one');
            }
        } else {
            echo 'Please upload only image';
        }
    }
}
