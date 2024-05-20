<?php

// String

$name = 'Moe Grimes';
$name2 ="jane doe";

// tell information about the variable
var_dump( $name );
echo '<br/>';

// Integer 
$age = 27;
var_dump($age);
echo '<br/>';


// Float
$rating = 4.5;
var_dump($rating);
echo '<br/>';

// boolean
$isLoaded = true;
var_dump( $isLoaded );
echo '<br/>';


//Array
$friends = ['Friends',43,','];
var_dump($friends);
echo '<br/>';

// object
$person = new stdClass();
var_dump($person);
echo '<br/>';


//null
$car = null;
var_dump($car);


// Resource
$file= fopen('index.php','r');
var_dump( $file );
