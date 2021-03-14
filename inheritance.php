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
        echo "<h3>Employee Info</h3>";
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Salary: " . $this->salary . "<br>";
    }
}
class maneger extends employee{
    public $ta =1000;
    public $phone =300;
    public $totalSalary;
    function info()
    {
     $this->totalSalary = $this->salary + $this->ta + $this->phone;  
     echo "<h3>Maneger Info</h3>";
     echo "Name: " . $this->name . "<br>";
     echo "Age: " . $this->age . "<br>";
     echo "Salary: " . $this->totalSalary . "<br>"; 
    }
}
$e1 = new employee("Emet Das",20,10000);
$e1->info();
$m1 = new maneger("Ram Kumar",30,30000);
$m1->info();
