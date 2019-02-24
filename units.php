<?php

//number in pounds we want to convert to Kilograms
//floating point value for pound to kilogram conversion
// use the variables above to calculate pounds multiplied by kilogram conversion
//display the pounds to kilograms
$pounds = 140;
$lb_to_kg = 0.453592;
$kilograms = $pounds * $lb_to_kg;

echo "Weight: ";
echo $pounds;
echo " lb = ";
echo $kilograms;
echo "kg";


// number in miles we want to convert to kilometers
//floating point values for the mile to kilometer conversion
//use the vaiable above to calculate miles multiplied  by the kilometer conversion
//display the miles to kilometers
$miles = 2.5;
$mile_to_km = 1.60934;

$kilometers = $miles * $mile_to_km;

echo " Distance: ";
echo $miles;
echo " miles = ";
echo $kilometers;
echo "km";
?>