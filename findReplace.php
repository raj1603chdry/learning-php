<?php
	$message = '';

	if (isset($_POST['text']) && isset($_POST['searchfor']) && isset($_POST['replacewith'])) {
		$text = $_POST['text'];
		$searchfor = $_POST['searchfor'];
		$replacewith = $_POST['replacewith'];

		if (!empty($text) && !empty($searchfor) && !empty($replacewith)) {
			$text = str_replace($searchfor, $replacewith, $text);

			/*
				Here we can also use str_ireplace() to make the replacement case insensitive.
			*/

		} else {
			$message = 'Enter all fields.';
		}
	}
?>

<form method="POST" action="findReplace.php">
	<textarea name="text" rows="6" cols="30"><?php echo $text; ?></textarea>
	<br>
	<br>
	Search for: <br>
	<input type="text" name="searchfor">
	<br>
	<br>
	Replace with: <br>
	<input type="text" name="replacewith">
	<br>
	<br>
	<input type="submit" value="Find and Replace">
	<br>
	<br>
	<p><?php echo $message; ?></p>

</form>