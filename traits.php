<?php


// لا يستطيع الكلاس أن يرث من أكثر من اب

// لكي استطيع ان ارث من اكتر من كلاس نستخدم ال trait

/* traits */

trait trait1{
    // some code
    // يمكن لاكثر من صف ان يرثه لكن بطريقة مختلفة عن الوراثة 
}

?>



<?php

class Myclass{
    use trait1;
}

?>


<?php

trait trait2{
    public function msg1(){
        echo "trait is magic <br>";
    }
}

trait trait3{
    public function msg2(){
        echo "trait is second trait <br>";
    }
}

class Myclass2{
    use trait2, trait3;
    // لقد تمكننا من وراثة اكثر من تريت بكلاس واحد باستخدام ال trait

    // some code
}

$obj =  new Myclass2;
$obj->msg1();
$obj->msg2();
?>


<?php

class Con{
    const LEAVING = 'this is const variable';    
}

echo Con::LEAVING;
?>

<?php
// للوصول للمتحولات داخل الكلاس داخل ال تابع كنا نستخدم this
// اما في حال كان المتحول هو ثابت ف نصل له عن طريق self
class bye{
    const BB = 'bye class';
    public function byebye(){
        echo self::BB;
    }
}

$bye1=new bye;
$bye1->byebye();
?>