<?php

include 'funktion.php';

back_home();

echo "Hello World!<br>";
// text(string,symbol)
$name="Bob";
//integer
$number=15;
//float
$number1=10.125;

//NULL
$var=NULL;
//array
//$myarr=array('Esmaspaev','teisipaev','kolmapaev','neljapaev','reede');

$number2=$number;
$number3=&$number;
$number=10;



$sum=$number+$number1;
$sum2=$number2+$number1;
$sum3=$number3+$number1;
$sum4=$number+$number;

echo "First sum is ".$sum." and second sum is ".$sum2." and third sum is ".$sum3."<br>";
echo "Text + numer $sum4 ";
echo $sum."<br>";
    
echo "My name is $name";


?>