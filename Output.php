<?php
echo 'Hello PHP'; // string
echo "\n";

echo 123; // Integer 
echo "\n";

// To know variable 
$name = "Nurul Academy";
var_dump($name); // string(13) "Nurul Academy"
echo "\n";

$age = 30;
var_dump($age); // int(30) also variance output 32/64 bit computer 
echo "\n";

$name2 = "Iceland";
echo "We'ar living in {$name2}"; // curly bracket optional 
echo "\n";
// or 
echo 'We\'ar living on'.$name2;