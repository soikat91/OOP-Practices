<?php

class Car{

   public function weight(){
    echo "5N\n";
   }

   public function color(){
       
      echo "Red\n";
   }
}

class Toyota extends Car{
       
   public function price(){
      
      echo "100k\n";
   }

}

$toyota=new Toyota;

$toyota->weight();
$toyota->color();
$toyota->price();