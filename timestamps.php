<?php
	$time = time();
	$actual_time = date('D d M m Y H:i:s', $time);
	$modified_time = date('D d M m Y H:i:s', strtotime('+ 1 year 2 months 1 week 3 days 30 seconds', $time));

	echo 'The current time is <br><br>'.$actual_time.'<br><br>';
	echo 'The modified time is <br><br>'.$modified_time;


	/*
		time() returns the current time in seconds.
		date() takes two arguments, where the first argument is the format in which we want to display the time,
		the second argument is the time which has to be displayed in the given format.

		H:i:s is the format for hours:minutes:seconds
		H 	hours
		i 	minutes
		s 	seconds
		D 	day
		M 	month
		Y 	year
		d 	date
		m 	month in numerics

		time can be modified by subtracting/adding the desired seconds from the inputed time to get out results.

		strtotime() is a function in which the amount of time to be added or subtracted is passed as string as
		'+ 1 week' and it will generate the seconds for the given parameter and the second argument is the time to be
		changed.
	*/
?>
