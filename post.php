<?php
	
	if(isset($_POST['password'])) {
		$password = $_POST['password'];

		if(!empty($password)) {
			if($password == 'raj1603') {
				echo 'Welcome Raj.<br>';
			} else {
				echo 'Enter the correct password.<br>';
			}
		} else {
			echo 'Enter the password.<br>';
		}
	}
?>

<form action="post.php" method="POST">
	Password:<br><input type="password" name="password"><br><br>
	<input type="submit" name="submit" value="Submit">
</form>