<?php

/*Question:3 (Write a PHP script to convert a temperature of 32 degrees Celsius to Fahrenheit. Store just the temperature value in a variable, no need to store the unit(Celsius). 

Print the result using the printf function to show up to 2 decimal points)*/

$celsius = 32;
$fahrenheit = 32+ ($celsius * (9/5));
printf("By converting temperature of %d degree celsius we get %.2f degree fahrenheit", $celsius, $fahrenheit)


?>