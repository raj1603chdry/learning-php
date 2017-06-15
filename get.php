<?php

	if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])) {
		$day = htmlentities($_GET['day']);
		$date = htmlentities($_GET['date']);
		$year = htmlentities($_GET['year']);

		//	htmlentities is used above to protect the data from user manipulation as the user can enter any html tag or other bogus code instead of the actual data and this function protects the data by not letting the code to be executed.

		if(!empty($day) && !empty($date) && !empty($year)) {
			echo 'It is '.$date.' '.$day.' '.$year.'<br><br>';
		} else {
			echo 'Enter all fields.<br><br>';
		}
	}

?>

<form method="GET" action="get.php">
	Day:<br><input type="text" name="day"><br>
	Date:<br><input type="text" name="date"><br>
	Year:<br><input type="text" name="year"><br><br>
	<input type="submit" name="submit" value="Submit">
</form>
