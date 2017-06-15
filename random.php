<?php
	$rand = rand();
	$max = getrandmax();

	echo $max;
	echo'<br><br>';
	echo $rand;

	/*
		rand() is used to generate random numbers.
		
		If no arguments are passed, it automatically generates random numbers between the default value of minimum and maximum value.

		getrandmax() is used the get the set upper limit for the rand().

		We can also pass two arguments between the rand() first the lower limit and second the upper limit.
		Then our random number will be generated the two.
	*/
?>

<br>
<br>
<form method="POST" action="random.php">
	<input type="submit" name="roll" value="Roll a die.">
</form>


<?php
	if(isset($_POST['roll'])) {
		$rand1 = rand(1, 6);

		echo '<br>';
		echo 'You rolled a '.$rand1; 
	}

	echo '<br><br>';

	$rand2 = rand(800000, 899999);

	echo 'Your Google OTP is  G-'.$rand2;
?>