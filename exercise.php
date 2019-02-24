<?php
// store each exercise in a string variable
$exercise1 = 'Display "Hello World!"';
$exercise2 = 'Convert Pounds to Kilograms';
$exercise3 = 'Convert Kilograms to Pounds';
$exercise4 = 'Convert Miles to Kilometers';
$exercise5 = 'Convert Kilometers to Miles';
$exercise6 = 'Month long string of the day';
$exercise7 = 'String of the day with levels';
// create a variable containing the day of the week
$day = date("N"); //returns the day of the week - must indicate formatting - N = numerical representation.
// use an if statement to test for the day of the week
if($day == 1)
   echo $exercise1;
if($day == 2)
    echo $exercise2;
if($day == 3)
    echo $exercise3;
if($day == 4)
    echo $exercise4;
if($day == 5)
    echo $exercise5;
if($day == 6)
    echo $exercise6;
if($day == 7)
    echo $exercise7;
// display corresponding exercise string.
?>