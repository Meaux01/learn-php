<?php

$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true; // value of 1
$bool2 = false; // value of 0
$null = null; // value of 0

// Implicit Conversion
$result = $number1 + $number2; // int
$result = $number1 + $number3; // int (string to int)
$result = $number3 + $number3; // int (string to int)
$result = $number1 . $number2; // string (int to string)
// $result = $fruit + $number2; // Error
$result = $number1 + $bool1;  // int (bool to int)
$result = $number1 + $bool2; // int (bool to int)
$result = $number1 + $null; // int (null to int)

// explicit conversion
$result = (string) $number1;
$result = (int) $number3;
$result =  (bool) $number1;

var_dump($result);