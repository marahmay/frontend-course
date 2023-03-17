<?php


class User {

    //Note: In a class, variables are called properties and functions are called methods!

//We can create multiple objects from a class
//Each object has all the properties and methods defined in the class, but they will have different property values.
//properties
    public $first_name; //attribute
    public $last_name;

    //methods
     function set_details($first_name , $last_name){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
     }

     function get_details(){
        return $this->first_name;
     }

    
}

$user1 = new User(); // اخذ كائن من الصف
$user2 = new User();

$user1->set_details('marah' , 'may');
$user2->set_details('ahmad' , 'Soul');

echo($user1->get_details());
echo('<br>');
echo($user2->get_details());

//The $this keyword refers to the current object, and is only available inside methods.
//اعطاء قيم لل attributes بطريقتين

//$user1 -> $first_name = 'marah';
//var_dump($user1);


?>