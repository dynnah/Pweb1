<?php

// IBM
// Dynnah Hanna - 20181370032

$weight = 60.0;
$height = 1.65;
$result;
$bmi;

$bmi = $weight/$height**2;


if ($bmi < 18.5):
  $result = 'Underweight';
elseif ($bmi >=18.5 && $bmi <= 24.9):
  $result = 'Normal Weight';
elseif ($bmi >= 25 && $bmi <= 29.9):
  $result = 'Overweight';
else:
  $result = 'Obesity';
endif;

print "Body Mass Index: $bmi \n";
print " Resultado: $result";


?>