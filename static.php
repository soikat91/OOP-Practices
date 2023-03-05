<?php
   
   class MathCalculator{
        
    private $number;
    static $name;
    

        static public function add($n){         
           
            echo self::$name="";          
            echo "Add is {$n}\n";
        }

        public function sub($n){
           
            self::$name;
            echo "Sub is {$n}\n";
        }
   }

//non static method so we can create object
   $res=new MathCalculator;
   $res->sub(5);
//    $res->add(3);

   MathCalculator ::add(8);
   MathCalculator::$name;
//    MathCalculator ::sub(6); non static method so can not use in this system

