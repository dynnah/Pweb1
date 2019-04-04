<?php

// Numbers Series

for ($number = 0 ; $number < 100 ; $number++) {
  if($number < 10):
    print "0$number ";
  else:
    print "$number ";

  if (($number % 10) == 0){
    print "\n";
  }
endif;
}

//Number Series Reverse

for ($number = 99 ; $number >= 0 ; $number--) {
    if($number < 10):
        print "0$number ";
      else:
        print "$number ";

    if (($number % 10) == 0){
      print "\n";
    }
endif;
  }
  
// Numbers Series Odd

for ($number = 99 ; $number >= 0 ; $number-=2) {
    if($number < 10):
        print "0$number ";
      else:
        print "$number ";
    if (($number % 10) == 1){
      print "\n";
    }
endif;
  }

?>

