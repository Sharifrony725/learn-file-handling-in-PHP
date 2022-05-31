<?php

namespace App\Classes;
class Example{
  public  $generatedPassword = ' ';
    public function __construct($data)
    {
        
    }
    public function index(){
        header('location:pages/home.php');
    }
}