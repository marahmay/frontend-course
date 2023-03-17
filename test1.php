<?php

//if(condition){
//my code
//}

$a = 10;
$b = 20;

if($a > $b){
    echo('a is bigger than y');
} else{
    echo('b is bigger than x');
}

echo('<br>');

for($i = 2015 ; $i <  2023 ; $i++){
echo($i . '<br>');
}


// Functions
function test (){
    echo('hello test' . '<br>');
}
// لتنفيذ التابع يجب استدعاؤه بكتابة اسمه
test();

// مجال المتحولات variable scope
// local / global / static

$x = 10;
$y = 20;
// في php عند تعريف متحول يعتبره global
// يكون local عندما نعرفه بشكل خاص بمكان محدد
// كأن نعرفه داخل تابع معين و لا اقدر استخدمه خارج التابع

function test1 (){
    $z = 10;    
    echo('hello test1' . '<br>');
}

// لن يطبع لانه لا يمكن الوصول له من خارج التابع
//echo($z);

test1();

$p = 46;
function test2(){
    // لا يمكن الوصول ل p لانه خارج التابع
    //echo($p);
    echo('hello test2');
}

test2();

// عندما نعرف متحول global ف انه يوضع في مصفوفة جاهزة تدعى Global
// و بكون قادر اتعامل معن وين ما بدي
// $Global = array('x' => 10 , 'y' => 20)


// ل اصل لمتحولات غلوبال من داخل تابع ما استخدم القيمة المحجوزة global

function test3(){
    // اخدت المتحول x من المصفوفة global
    global $x;
    echo('<br>' . 'global x  ');
    echo($x);
}

test3();



$name = 'ahmad';

if($name){ // if(true)
    echo( '<br>' .'hello  ' . $name);
}

// اذا المتحول اخد قيمة اطبع
// اذا مو اخد قيمة لن ينفذ التابع echo

$name1 = null;

if($name1){ // if(true)
    echo( '<br>' .'hello  ' . $name1);
}else{
    echo( '<br>'. 'hahahah');
}

?>