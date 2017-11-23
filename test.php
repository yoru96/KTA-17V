<?php

# phpinfo();
// Kommentaar
/* 
Kommentaar
mitmel
real
*/

echo "Hello World!<br>";

// text (string, symbol)
$name = "Tarmo";

// integer
$number = 15;

// float
$number1 = 10.125;

// NULL
$var = NULL;

// array (workdays)
$myarr = array ('Esmaspäev','Teisipäev','Kolmapäev','Neljapäev','Reede');

$number2 = $number;
$number3 = &$number;

$number = 10;

$sum = $number + $number1;
$sum2 = $number2 + $number1;
$sum3 = $number3 + $number1;
$sum4 = $name + $number ;

echo "First sum is: ".$sum." and second sum is: ".$sum2." and third sum is ".$sum3."<br>";
echo "Text + number $sum4 <br>";
    
echo "Minu nimi $name";
    
?>