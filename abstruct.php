<?php

abstract class Myabstract{ // parent class مجرد يحوي 3 طرائق
    abstract public function ab1();
    abstract public function ab2($name , $color);
    abstract public function ab3() : string; // يعني ان التابع سيرد النوع الموجود المحدد



    // التجريد من المعاملات الغير اساسية

}

?>

<?php  

//parent class
abstract class course{
    public $name;
    public function __construct($name) // الباني و هو اصلا موجود حتى لو ما استدعيتو
    // و هنا نعتبر عملنا override
    // و كتبت الباني لكي اغير فيه قيمة المتحول
    // الباني اللي بالاصل موجود هو باني افتراضي لا ياخذ بارامترات

    {
        $this->name = $name;    
    }

    abstract public function op() : string;

}

// child class

class Msg extends course{
    public function op() : string{

        return " hi abs $this->name"; 
    }
}
?>