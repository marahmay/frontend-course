<?php

//تعليمة طباعة
echo('hello <br>');


//تعليمة طباعة 
// لكن print 
// هي دالة اي ترد true/false

print('hello <br>');


echo(print('ali'));


//print(echo('ali'));  // error

//يمكن ان نطبع عبر echo اكثر من عبارة
//  .  dot  تدمج بين سلسلتين نصيتين
echo('<br>' . 'hello  ' . 'focal X');

print('<br>' . 'hello  ' . 'focal X' . '<br>');


//نعريف متحول variable
// $name = value;
$name = 'ali';
// في php لا نذكر نوع قيمة المتحول
// لوحده يعرف النوع

// فحص نوع المتحول
// var_dump : build in function in php
// نمرر له المتحول و يرد لنا نوعه data type


var_dump($name);


echo('<br>');
$age = 25;
var_dump($age);


echo('<br>');
$age = '25';
var_dump($age);


echo('<br>');
$status = true;
var_dump($status);


echo('<br>');
$n1 = null;
$n2 = '';
var_dump($n1);
echo('<br>');
var_dump($n2);

?>