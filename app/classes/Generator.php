<?php 
namespace App\Classes;
class Generator{
    public $givenLenght ;
    public $key = [ ] ;
    public $password;
    public $max_index;
    public $index;
    public $i;
    public function __construct($data)
    {
        $this->givenLenght = $data['given_length'];
    }
    public function index(){
        $this->key = ['A','B','a','b','1','2','_','@','#','e','6','8','9','t','O' ];
       $this->max_index =  count($this->key) - 1;
       for($this->i=0;  $this->i <=$this->givenLenght; $this->i++){
            $this->index =  rand(0, $this->max_index);
           $this->password .=  $this->key[$this->index];
       }
       return $this->password;
    }
}