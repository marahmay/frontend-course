<?php

/* 
      MySqlI (MySql Improved) // extention for connection
*/

// arguments :

//$server = 'localhost';

// تعريف ثوابت لكامل المشروع لاننا دائما سنتصل مع الداتا بيز

define('SERVER','localhost');
define('USER_NAME','root');
define('PASSWORD','');
define('DATABASE_NAME','mydatabase');


// actions :

// دالة للاتصال بالسيرفر
$connecting = mysqli_connect(SERVER,USER_NAME,PASSWORD);
$db_select = mysqli_select_db($connecting,DATABASE_NAME);


// testing :

if($connecting){
    echo'connecting to DATABASE ';
} else {
    echo'failed to connect with DATABASE';
}

// end of script

/* 
     at the end of the script the connection will be closed if the connection is not closed explicity
*/


#############################################

/* 
   PDO(PHP Data Objects)
*/

// attributes :

$dsn = 'mysql:host=localhost;dbname=mydatabase';
$user = 'root';
$pass = '';


// connecting :

try {
    $db = new PDO($dsn,$user , $pass);
    echo'connecting to database';
} catch (PDOException $e) {
    echo 'failed to connect with database' . $e->getMessage();
}


//  اتصل بقاعدة البيانات و استعلم من الجداول
// CRUD 
// create table-value-record
// read record 
// update record
// delete record
?>