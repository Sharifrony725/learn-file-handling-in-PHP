<?php

namespace app\Classes;

class Registration
{
    private $name;
    private $email;
    private $mobile;
    private $file;
    private $data;
    private $fileName;
    private $array;
    private $array1;
    private $array2;
    private $array3;
    private $photo;
   private $directory;
   private $imageName;
    public function __construct($data = null, $file = null)
    {
        if ($data && $file) {
            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->mobile = $data['mobile'];
            $this->photo = $file;
        }
    }
    public function index()
    {
        $this->imageName = $this->photo['image']['name'];
        $this->directory = '../assets/img' . $this->imageName;
        move_uploaded_file($this->photo['image']['tmp_name'], $this->directory);
        $this->fileName = './db.txt';
        $this->file = fopen($this->fileName, 'a');
        $this->data = "$this->name ,  $this->email , $this->mobile , $this->directory$";
        fwrite($this->file, $this->data);
        fclose($this->file);
        return 'Data save successfully.';
    }
    public function getAllStudentInfo()
    {
        $this->file = './db.txt';
        $this->data = file_get_contents($this->file);
        $this->array =  explode("$", $this->data);
        foreach ($this->array as $key => $value) {
            $this->array1 =  explode(",", $value);
            if ($this->array1[0]) {
                $this->array2[$key]['name'] = $this->array1[0];
                $this->array2[$key]['email'] = $this->array1[1];
                $this->array2[$key]['mobile'] = $this->array1[2];
                $this->array2[$key]['image'] = $this->array1[3];
            }
        }
        return $this->array2;
    }
}
