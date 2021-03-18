<?php
class emet{

    public $name,$skill;
    function info(){
        $this->info = $this->name . $this->skill;
        return $this->info;
    }
}
$ifo = new emet();
$ifo->name = "Emet Das<br>";
$ifo->skill = "Java,Php";
echo $ifo->info();

?>