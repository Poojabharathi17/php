<?php
  //variables
   $str = "Hello world!";
    $num = 5;
    $float = 2.5;

    //array
    echo "<h1>" . $str . "<h1>";    
   echo "<h1>" . $num . "<h1>";
   echo "<h1>" . $float . "<h1>";

   $laptop_brand = array("HP", "Dell", "ASUS");
   echo var_dump($laptop_brand[2]);

   //constants
   define("laptops", ["HP", "Dell", "ASUS"]);
   echo laptops[1];
  
   //conditional statements
   $var = 6;
   if($var %2==0 )
   {
    echo "$var is div by2";
   }
   else{
    echo "no";
   }

   $level=20;
   switch($level){
    case 1:
        echo "You are playing at Easy level";
        break;
    case 2:
        echo "You are playing at hard level";
        break;
    case 3:
        echo "You are playing at medium level";
        break;
    case 4:
        echo "You are playing at Extreme hard level";
        break;
    default:
        echo"Invalid";

   }

   //loops

   $var = 2;
   while($var <=10)
   {
     echo "Number: $var <br>";
     $var++;
   }

   $var = 11;
   do
   {
     echo "Number: $var <br>";
     $var++;
   }while($var <=10)

   for($var=1; $var<=6; $var++)
   {
    echo "Number: $var <br>";
   }

   //functions: user-defined, in-built.

   function name(){
        for($var=1; $var<=6; $var++)
        {
            echo "Number: $var <br>";
        }
   }

   name();
   echo "2nd time<br>";
   name();
?>