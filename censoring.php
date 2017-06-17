<?php
	$find = array('raj', 'rakesh', 'nandita', 'noopur');
	$replace = array('r*j', 'r****h', 'n*****a', 'n****r');

	if (isset($_POST['user_input']) && !empty($_POST['user_input'])) {
		$user_input = $_POST['user_input'];
	}
?>

<form action="censoring.php" method="POST">
	<textarea name="user_input" rows="6" cols="30"><?php echo $user_input; ?></textarea>
	<br><br>
	<input type="submit" name="Submit">
</form>

<hr>

<?php
	$user_input = $_POST['user_input'];
	$user_input_updated = str_replace($find, $replace, $user_input);
	$user_input_updated1 = str_ireplace($find, $replace, $user_input);
	/*
		str_replace() function is case sensitive, it will replace the string iff the case of the words in the find and replace arguments match perfectly.
		str_ireplace() function is case insensitive, it will replace the string if their characters match in the find and replace arguments irrespective of their case.
	*/

	echo '<br>';
	echo $user_input_updated;
	echo '<br>';
	echo '<br>';
	echo $user_input_updated1;

?>
