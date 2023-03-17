<?php

use User as GlobalUser;

class User{


    public $name = 'admin';
    public $email = 'email';
    public $age = 25;
    public $address = 'jj';
    public $is_admin = false;
    public const num = 10;
    // في الثابت لا نضع اشارة الدولار لانه ثابت

    /*
    // يقوم بعمليات الاسناد عن طريق استدعاء واحد
    
    public function __construct($name , $email , $age , $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->email = $email;
    }
    */

    public function isAdmin(){
        if($this->is_admin){
            echo($this->get_address());
        }else{
            echo('gggggg');

        }
    }

    private function get_address(){
        return $this->address;
    }
}

/*
$user1 = new User('marah' , 'marah@gmail' , 25 , 'jablah');

echo('<pre>');
var_dump($user1);
echo('</pre>');

// الباني يعطي القيم اثناء انشاء الغؤض اما تابع السيت  بعد تعريف الغرض

*/

$user1 = new User;
var_dump($user1);
echo('<hr>');

$user1->isAdmin();
//$user1->get_address(); // error cus is private

echo(User::num);
//ل استدعاء الثابت نكتب اسم الكلاس و نقطتان ثم اسم الثابت




?>