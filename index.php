<?php
class emet{ // class
public $a,$b,$c; // propitis
function sum(){ // method
   $this->c = $this->a + $this->b;
   return $this->c;
}
// constroctor function 
// destroctor function 

function sub(){
   $this->c = $this->a - $this->b;
   return $this->c;
}
}
$sum = new emet(); // object

$sum->a = 80;
$sum->b = 40;
echo $sum->sum()."<br>"; 
echo $sum->sub();
