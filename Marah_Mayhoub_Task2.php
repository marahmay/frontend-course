<?php

//  for loop

echo '<b> 1- FOR LOOP EXAMPLE : </b> <br><br>' ;
echo ' جدول الضرب للعدد واحد  <br>' ;
for($i = 0 ; $i < 10 ; $i++){
    echo $i .' * 1' . '= ' . $i*1 .'<br>';
}
echo('<hr>');


// foreach loop with if else

echo '<b> 2- FOREACH LOOP WITH IF ELSE EXAMPLE : </b> <br><br>' ;
$meals = array('breakfast' , 'lunch' , 'dinner');
echo 'Meals of the Day :<br> ' ;
foreach($meals as $eat){
    if($eat == 'breakfast'){
        echo $eat . ' : The first meal of the day . <br>' ;
    } else {
        if($eat == 'lunch'){
            echo  $eat .' : A meal in the middle of the day. <br>';
        } else
        echo $eat . ' . <br>';
    }
}
echo('<hr>');



// built-in functions

echo '<b> 3- BUILT_IN FUNCTIONS EXAMPLE : </b> <br><br>' ;
echo '<b><span style="color:blue;">array</span></b><br><br>';
echo 'انشاء مصفوفة <br>';
$arr = array('marah', 1 , 4 , 'ahmad', 1 , 6 ,'marah','may','ahmad');
print_r($arr);
echo('<hr>');

echo '<b><span style="color:blue;">array_count_values</span></b><br>';
echo ' <br> عدد جميع عناصر المصفوفة <br>';
print_r(array_count_values($arr));
echo('<br>');
echo('<hr>');

echo '<b><span style="color:blue;">array_sum</span></b><br><br>';
echo 'مجموع القيم الموجودة في المصفوفة <br>';
echo(array_sum($arr));
echo('<br>');
echo('<hr>');

echo '<b><span style="color:blue;">in_array</span></b><br><br>';
echo 'البحث عن عنصر في المصفوفة <br>';
if(in_array('may',$arr)){
    echo'may is found <br>';
}
echo('<hr>');

echo '<b><span style="color:blue;">array_diff</span></b><br><br>';
echo'المقارنة بين قيم مصفوفتين و ارجاع الفرق بينهما <br>';
$arr1=array("0"=>"one","1"=>"two","2"=>"three","3"=>"four");
$arr2=array("0"=>"one","1"=>"two","2"=>"three");
print_r($arr1);
echo('<br>');
print_r($arr2);
echo('<br>');
$dif =array_diff($arr1,$arr2);
print_r($dif);
echo('<br>');
echo('<hr>');

echo '<b><span style="color:blue;">cal_days_in_month</span></b><br><br>';
echo'الحصول على عدد الايام في شهر و سنة محددين <br>';
echo(cal_days_in_month(CAL_GREGORIAN,2,2023) . '<br>');
echo('<hr>');

echo '<b><span style="color:blue;">date</span></b><br><br>';
echo'اعادة اليوم الحالي من الشهر <br>';
echo(date("d") . '<br>');
echo'اعادة اليوم الحالي من الشهر على شكل نص <br>';
echo(date("l") . '<br>');
echo('<hr>');

echo '<b><span style="color:blue;">is_numeric</span></b><br><br>';
echo 'التحقق مما إذا كان المتغير رقم أو لا <br>';
$x = '12.7';
if(is_numeric($x)){
    echo $x . ' is a number . <br>';
} else {
    echo $x . ' is not a number . <br> ';
}
echo('<hr>');

echo '<b><span style="color:blue;">round</span></b><br><br>';
echo'التقريب الى اقرب عدد صحيح <br>';
echo ' The closest integer to ' . $x .  ' is ';
echo round($x );
echo '<br>';
echo('<hr>');

echo '<b><span style="color:blue;">sqrt</span></b><br><br>';
echo' الجذر التربيعي للعدد <br>';
$x = 4 ;
echo ' the square root of ' . $x . ' is  ';
echo sqrt($x);
echo('<br>');
echo('<hr>');

echo '<b><span style="color:blue;">rand</span></b><br><br>';
echo'توليد رقم عشوائي ضمن مجال محدد <br>';
echo(rand(5,10) . '<br>');
echo('<hr>');

echo '<b><span style="color:blue;">pow</span></b><br><br>';
echo'ايجاد القوة (الأس) <br>';
echo( pow(4,2) . '<br>');
echo('<hr>');

echo '<b><span style="color:blue;">max</span></b><br><br>';
echo'ايجاد العدد الاكبر <br>';
echo(max(8,10) . "<br>");
echo('<hr>');

echo '<b><span style="color:blue;">substr</span></b><br><br>';
echo'اقتطاع و ارجاع جزء محدد من سلسلة';
echo('<br>');
echo(substr('this is my task2', 4));
echo('<br>');
echo('<hr>');

echo '<b><span style="color:blue;">empty</span></b><br><br>';
echo'التحقق فيما إذا كان المتغير فارغ أو اذا كان المتغير مصرح عنه او لا <br>  ';
$y = 0;
if(empty($y)){
    echo "Variable 'y' is empty.<br>";
} else {
    echo "Variable 'y' is not empty.<br>";
}
echo('<hr>');


echo '<b> 4- OOP : CLASSES & OBJECTS EXAMPLE (PUBLIC/PRIVATE/PROTECTED) & INHERITANCE : </b> <br><br>' ;


//classes & objects

class Meals{

    public $mealName;
    public $mealPrice;
    
    private $dinner;
    protected $lunch;

    public function newMeal($dinner , $lunch){
        $this->dinner = $dinner;
        $this->lunch = $lunch;
    }

    public function set_meal_name($meal_name){
        $this->mealName = $meal_name;
    }

}

class snack extends Meals{
    public $type;
}

class drinks extends Meals{
    public $drink_name;
}


$meals1 = new Meals;
$meals1->mealName = 'breakfast';
$meals1->mealPrice = 35000;
//$meals1->dinner = 'dinner'; // error beacause it is private 
$meals1->newMeal('private dinner' , 'private lunch');
echo('<pre>');
var_dump($meals1);
echo('</pre>');
$meals1->set_meal_name('oats is the first meal');
echo($meals1->mealName);
echo('<br>');

$meals2 = new Meals;
$meals2->mealName = 'spaghetti';
$meals2->mealPrice = 22000;
$meals2->set_meal_name('spaghetti is the second meal');
echo($meals2->mealName);
echo('<br>');

$snack1 = new snack;
$snack1->mealName = 'popcorn';
$snack1->type = 'snack';
$snack1->newMeal('fruit before dinner' , 'crackers before lunch');
echo('<pre>');
var_dump($snack1);
echo('</pre>');

$drink1 = new drinks;
$drink1->drink_name = 'cola';
$drink1->mealName = 'cola with shawarma';
echo('<pre>');
var_dump($drink1);
echo('</pre>');
echo('<hr>');

echo '<b> 5- CONSTRUCTOR / DESTRUCTOR EXAMPLE : </b><br>' ;

class Furniture{

    public $fName;

    public function __construct($fName)
    {
        $this->fName = $fName;
    }

    public function __destruct()
    {
        echo '<br> Destructor : the Furniture name is ' . $this->fName;
    }

    public function get_fname() {
        return $this->fName;
    }
}

echo('<br>');
$chair = new Furniture('chair  <br><br>');
echo $chair->get_fname();
echo '<hr>';




// traits

echo '<b> 6- TRAITS EXAMPLE  : </b><br><br>' ;

trait Clothes{
    public function wear(){
        echo('i am wearing my clothes');
    }
}

trait Shoes{
    public function buy(){
        echo(' i bought shoes');
    }
}

class Shop{
    use Clothes , Shoes;
}


$shop1 =  new Shop;
$shop1->wear();
echo('<br>');
$shop1->buy();
echo '<hr>';

// form handling

echo '<b> 7- FORM HANDLING (GET / POST) EXAMPLE  : </b><br><br>' ;
?>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get" >  
    <input type="text" name="myName">   الاسم 
    <br><br>
    <input type="text" name="myEmail"> البريد الالكتروني  
    <br><br>
    <input type="submit" name="Send" value="send">  
</form>


<?php
echo('hi  ' . $_GET['myName'] . '<br> your email is here ! look at URL ! <br>' . $_GET['myEmail']);
//echo('hi  ' . $_POST['myName'] . '<br> your email is not in URL ! <br>' . $_POST['myEmail'] );
echo('<hr>');
?>