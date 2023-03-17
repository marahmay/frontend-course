<?php
// oop
// للتخفيف من تكرار الاكواد و تنسيق الكود ليكون سهل للمراجعة و الصيانة

use User as GlobalUser;

class User{

    /*
    //public يمكن الوصول له من اية مكان
    //private يمكن الوصول له من داخل الكلاس فقط 
    //protected يمكن الوصول له من داخل الكلاس او عن طريق الكلاسات الابناء(وراثة)


    //attributes
    public $first_name;
    public $lastName;
    
    //methods
    public function get_info(){

        //this تشير الى الغرض الحالي نفسه
        return $this->first_name;
    }

    */


    // توابع ال set ل اعطاء القيمة
    // توابع ال get للحصول على القيمة او ردها

    public function set_first_name($name){
        $this->first_name = $name;

    }

    
}



$user1 = new User;
$user2 = new User;
$user3 = new User;
$user4 = new User;
$user5 = new User;
$user6 = new User;
$user7 = new User;

$user4->set_first_name('asala');
echo($user4->first_name);
/*
//اخذنا غرض من الكلاس
$user1 = new User;
$user2 = new User;
//اعطاء قيم ل attributes
$user1->first_name = 'marah';
$user1->lastName = 'may';

$user2->first_name = 'ahmad';
$user2->lastName = 'soul';

echo('الاسم الاول للمستخدم الاول: <br>');
echo($user1->get_info());
echo('<br>');

echo('الاسم الاول للمستخدم الثاني: <br>');
echo($user2->get_info());
echo('<br>');

var_dump($user1);

*/

?>