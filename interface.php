<?php

use Dog as GlobalDog;

interface BaseAnimal{
    
    public function color();
    public function weight();

}


class Cow implements BaseAnimal{
   
    public function color()
    {
        echo "red\n";
    }
    public function weight()
    {
        
    }
  
}

class Dog implements BaseAnimal{
    
    public function color()
    {
      echo "Black";
    }
    public function weight()
    {
        
    }
    
}



$ani = new Cow;
$ani->color();

$dog=new Dog;
$dog->color();