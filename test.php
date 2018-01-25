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
$text = '10';
$number = 10;

$sum = $number + $number1;
$sum2 = $number2 + $number1;
$sum3 = $number3 + $number1;
$sum4 = $text + $number ;

echo "First sum is: ".$sum." and second sum is: ".$sum2." and third sum is ".$sum3."<br>";
echo "Text + number $sum4 <br>";

echo "Minu nimi $name";

echo '<br>'.$_SERVER['REMOTE_ADDR'];

function log_ip(){
    date_default_timezone_set('Europe/Tallinn');
    $file = fopen("log.txt", "a") or die("Can't open file");
    $time = time();
    $txt = $_SERVER['REMOTE_ADDR']." ".date("d-m-Y H:i:s")."\n";
    fwrite($file, $txt);
    fclose($file);

}

log_ip();

?>
