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
$profile = new emet("Emet Das");
$profile->show();
?>