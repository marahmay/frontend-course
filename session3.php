<?php


//$x = 10;
//$y = 20;
$a = 5;
$b = 4;

function test($x , $y){
    echo(' hello function' . '<br>');
    return $x+$y;
}

echo(test(10,20));

echo('<hr>');

function test1($x , $y){
    echo(' hello test1' . '<br>');
    $full_name = $x . $y;
    return $full_name;
}

echo(test1('hello ','Marah'));

echo('<hr>');

function test2(){
    global $a , $b;
    return $a*$b;
}

echo(test2());

echo('<hr>');

// ملاحظة
// لا يمكن ان يكون اسم التابع كلمة محجوزة Error


// Multi Array example with key value
$users = array(
    'first'=>array('name'=>'marah' ,'location'=> 'Jablah' ,'age'=> '25'),
    'second'=>array('name'=>'ahmad' ,'location'=> 'hasakah' ,'age'=> '28')
);

echo($users['second']['location']);




?>