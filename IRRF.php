<?php

//IRRF

$salary = 3500;
$tax;

if ($salary < 1903.99):
    $tax = 0;
  elseif ($salary < 2826.66):
    $tax = 0.075 * $salary - 142.8;
  elseif ($salary < 3751.06):
    $tax = 0.15 * $salary - 354.8;
  elseif ($salary < 4664.68):
    $tax = 0.225 * $salary - 636.13;
  else:
    $tax = 0.275 * $salary - 869.36;
  endif;


print("IRRF: $tax");

?>