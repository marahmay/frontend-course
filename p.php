<?php
// انشاء المصفوفة
$myarray = array();

//the number of elements  or length
$myarray_count = 10;


while (count($myarray) < $myarray_count) {
    $rand = rand(0,50);
     $myarray[] = $rand;
}
   
print_r($myarray);

echo "<br>";
echo "<br>";

echo"الارقام الاكبر من 10 هي ";
echo "<br>";
echo "<br>";


for($i = 0; $i < $myarray_count; $i++) {
    if($myarray[$i] > 10){
        echo " ( ";
        print($myarray[$i]);
        echo " ) ";
      unset($myarray[$i]);
    }
    
}
echo "<br>";
echo "<br>";

echo "المصفوفة بعد حذف الارقام الاكبر من 10 منها";
echo "<br>";
print_r($myarray);

echo "<br>";
echo "<br>";

echo "المصفوفة بعد الترتيب";
echo "<br>";

sort($myarray);
print_r($myarray);




?>