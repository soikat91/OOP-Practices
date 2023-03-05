<?php
    
    interface BaseHuman{
        public function isBuy();
    }

    abstract class AbstractCar implements BaseHuman{
           
        abstract public function carName();
        public function carColor(){

        }
    }

    class Human extends AbstractCar{


        public function isBuy()
            {
                echo "Car";
            }
        public function carName()
        {
            echo "BMW";
        }
    }

    $human=new Human;
    $human->carName();

 