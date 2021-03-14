<?php
class employee
{
    public $name;
    public $age;
    public $salary;
    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
    function info()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Salary: " . $this->salary . "<br>";
    }
}
$e1 = new employee("Emet", 20, 10000);
$e1->info();
