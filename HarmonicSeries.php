<?php

$sum = 0;

for ($number = 1; $number <= 10; $number += 1) {
  $sum += 1 / $number;
}

print("h(10): ${sum}");

?>