<?php

interface BaseAnimal{

    public function wight();
    public function color();
}

class Animal implements BaseAnimal{
    
    public function wight()
    {
        
    }
    public function color()
    {
        
    }
   
}


interface BaseHuman extends BaseAnimal{
    public function isTalk();
}


class Human implements BaseHuman{
    
    public function wight()
    {
        
    }
    public function color()
    {
        
    }
    public function isTalk()
    {
        echo("salam");
    }
}

$animal=new Animal;

// echo $animal instanceof BaseAnimal;

$human=new Human;

echo $human instanceof BaseAnimal;