<?php

class Person{

    static public function sayHi(){
        echo "Assalamolaikum\n";
    }
}

class Mehfuz extends Person{

   static public function sayHi()
    {   
        parent::sayHi();
        echo "Olaikumassalam";
    }
}

Mehfuz::sayHi();