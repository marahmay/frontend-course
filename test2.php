<?php

/*fbfb
fvfv*/


// Arrays

// Indexed Array 
// key and value


$name = array('ali' , 'marah' , 'ahmad');
var_dump($name);

echo('<br>');
// طباعة عنصر
echo($name[0]);

// يعطي خطأ لان المصفوفة يجب تحديد العنصر الذي نريد طباعته او نمرق بحلقة لكي نطبع كل العناصر
//echo($name);

foreach($name as $student){
echo('<br>' . $student );
}

// مررنا لها المصفوفة و قلنا لها تعاملي مع كل عنصر من عناصرها ك متحول جديد
echo('<hr>');
for($i = 0 ; $i <3 ; $i++){
    echo($name[$i] . '<br>');
}


// Associated Array
// هنا انا احدد ما هو ال key

$name = array('student'=>'ali' , 'age'=>'27');
echo($name['age']);
echo($name['student']); // يطبع لي القيمة التي يدل عليها ال key الممرر
//echo($name[0]); // يعطي خطا لانه لا يوجد key قيمته صفر هنا لاننا غيرنا ال key

echo('<hr>');
// Multi Array
// مصفوفة عناصرها ايضا مصفوفات
$users = array(
    array('marah' , 'jablah' , 25) ,
    array('ahmad' , 'hasakah' , 28)

);

echo($users[1][1]);




?>