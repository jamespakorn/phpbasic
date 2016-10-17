<?php

 class car{ 
     
     public $color; //property
     
     public function setColor($c){  //function 
         return 'Car is : '.$this->color=$c;
     }
 
     public function sayHello(){ //function  
         return 'say Hello';
     }
     
 }
 
 $newcar=new car;
 
 $test=$newcar->setColor('red');
 echo $test;
 echo '<hr>';
 echo $newcar->sayHello();
 echo '<hr>';
 echo $newcar->color='orange';
 
 
 
 
 
