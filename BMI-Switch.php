<?php

$weight = 60.0;
$height = 1.65;
$result;

$bmi = $weight/$height**2;

switch (true) {
  case $bmi < 18.5:
    $result = 'Underweight';
    break;
  case $bmi >= 18.5 && $bmi <=24.9:
    $result = 'Normal Weight';
    break;
  case $bmi >= 25 && $bmi <=29.9:
    $result = 'Overweight';
    break;
  case $bmi > 29.9:
    $result = 'Obesity';
    break;
  /*default:
    $tax = 0.275 * salary - 869.36;*/
}

print "Body Mass Index: $bmi \n";
print " Resultado: $result";

?>