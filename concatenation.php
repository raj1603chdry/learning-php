<?php
	$day = 'Thursday';
	$date = 31;
	$year = 2017;

	echo 'The date is <strong>'.$day.' '.$date.' '.$year.'</strong>';	// . here is the concatenation operator.
	echo '<br>';
	echo "The date is <strong>$day $date $year</strong>";	// if we use "" we don't need to concatenate the variables.

	// using '' instead of "" is advisable.
?>