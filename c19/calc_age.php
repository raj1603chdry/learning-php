<?php

  // set date for calculation
  $day = 18;
  $month = 9;
  $year = 1972;

  // remember you need bday as day month and year
  $bdayunix = mktime(0, 0, 0, $month, $day, $year);
  $nowunix = time();
  $ageunix = $nowunix - $bdayunix;
  $age = floor($ageunix / (365 * 24 * 60 * 60)); // to convert seconds into years.

  echo 'Current age is: '.$age.'.';

?>
