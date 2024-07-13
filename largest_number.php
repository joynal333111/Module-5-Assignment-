<?php

// Question:2 (Write a PHP script to find the largest number among three given numbers: $num1 = 4, $num2 = 5, and $num3 = 6. Use if-else statements.)

$num1= 4;
$num2= 5;
$num3= 6;
$largestNumber= "";

if( $num1>= $num2 && $num1>= $num3 ){
    $largestNumber=$num1;
}else if( $num2>= $num1 && $num2>= $num3 ){
    $largestNumber=$num2;
}else{
    $largestNumber=$num3;
}
printf("Largest number among %d, %d, and %d is: (%d)",$num1,$num2,$num3,$largestNumber);
    

?>