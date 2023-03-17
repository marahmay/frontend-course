<?php

use User as GlobalUser;

class User{

   /* public $name;
    public $email;
    public $age;
    public $address;
    */

   /* public function set_name($name){
        $this->name = $name;
    } 
    public function set_age($age){
        $this->age = $age;
    }
     public function set_address($address){
        $this->address = $address;
    }
     public function set_email($email){
        $this->email = $email;
    }
    */


    //get functions

   /* public function get_name(){
        return $this->name;
    }
    */
    

    public $properties;

    public function __set($propertyName, $propertyValue)
    {
        $this->properties[$propertyName] = $propertyValue;
    }
}

$user1 = new User;
//$user1->set_name('marah');
$user1->name = 'marah';
$user1->age = 25;
$user1->address = 'sljbs';

echo('<pre>');
var_dump($user1);
echo('</pre>');

//echo($user1->get_name());

?>