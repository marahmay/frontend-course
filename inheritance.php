<?php

use User as GlobalUser;

class User{

    public $name;
    public $email;
    public $address;
    private $age;
}


//kpi for intern
// time for employee

// الوراثة
class Intern extends User{
    public $kpi;
}

class Employee extends User{
    public $time;
}

$user1 = new User;
$intern = new Intern;
$intern->name='meme';
var_dump($intern);

$emp = new Employee;
$emp->email='meme@gmail';
//$emp->age = 35;
// لا يمكن لانه برايفت

echo('<br>');
var_dump($emp);
?>