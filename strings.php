<?php

//differences between single quotes and double quotes
$name = 'Svetleen';
$string_one = 'Hello $name!';
$string_two = "Hello $name! \n";

//printing on terminal single quites vs double quotes.
echo $string_one."\n";
echo $string_two;

//escape character example
$string_three = "Hello \$name! \n";
echo $string_three;

//Quotes within quotes using escape sequences
$string_four = "Learning to display \"Hello Svetleen\" to the screen. \n";
echo $string_four;


//concatenation example - dot
//$string_four = 'Learning to display "Hello '.$name .'!" to the screen.'."\n";
echo $string_four;

$string_five = 'Learning to display ';
$string_five .= '"Hello"';
$string_five .= $name;
$string_five .= '!" to the screen using concatenation';
$string_five = $string_five ."\n";
echo $string_five;

//prepending to a string.
$string_five = 'I am '. $string_five;
echo $string_five;


//Booleans - not case sensitive
$isReady = true;
var_dump($isReady);
$isReady = false;
var_dump($isReady);


//Equal vs identical type juggling

var_dump(1 + "2");
$a = 10;
$b = '10';

var_dump($a == $b);
var_dump($a === $b);
var_dump($string_four == "Learning to display \"Hello $name\" to the screen. \n");
$string_four = "";
if($string_four == "Learning to display \"Hello $name\" to the screen. \n"){
    echo "The values match :)\n";
}else if($string_four == "")
    echo "Empty String \n";
else{
    echo "The values don't match :(" ;
}
?>