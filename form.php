<form action = "form.php" method = "GET">
	Name : <input type="text" name="user_name">
	<br>
	<br>
	<input type="submit" value="Submit">
</form>

<?php

	/*
	here in the form tab, in the action the name of the php file to be called is passed as value and method to be used is also specified.
	*/

	if(isset($_GET['user_name']) && !empty($_GET['user_name'])) {
		$user_name = $_GET['user_name'];

		if(strtolower($user_name) == 'raj') {
			echo '<strong>'.$user_name.' </strong>you are the best.';
		} else {
			echo $user_name.' go to hell';
		}
	}
?>
