<?php
	echo '<input type="text" name="name">';	// html tags with '' are processed much faster as compared to "".
	echo '<br>';
	echo "<input type=\"text\" name=\"name\">";	//escape sequences like all other programs are present in PHP.
?>