<?php
class base{
    public $name = "Perent class <br>";
    function calc($a,$b){
        return $a * $b;
    }
}
class dirved extends base{
    public $name = "Child Class <br>";
    function calc($a,$b){
        return $a + $b;
    }
}
$test = new base();
echo $test->name;
$test1 = new dirved();
echo $test1->calc(10 , 10);
echo "<br>";
echo $test1->name;
