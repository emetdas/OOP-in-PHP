<?php
class emet{
    public $name;
    function __construct($name ="No Name")
    {
        $this->name = $name;
    }
    function show(){
        echo $this->name;
    }
}
$profile1 = new emet("Emet Das <br>");
$profile1->show();
$profile2 = new emet("Plaban Das");
$profile2->show();
?>