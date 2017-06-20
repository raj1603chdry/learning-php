<?php
	ob_start();

	/*
		starts the output buffer to store the headers information on loading the page.
	*/
?>

<h1>MY PAGE</h1>
<p>This is my page</p>

<?php
	$redirect_page = 'array.php';
	//$redirect_page = 'http://google.com';
	$redirect = false;

	if($redirect == true) {
		header('Location: '.$redirect_page);
	}

	/*
		The header function will work only if there are no header tags before it.
		To make the header work even if there is some information on the page, we use the output buffer.
	*/

	ob_end_flush();	//	this function cleans the output buffer but retrieves the page contents.

	//	ob_end_clean() is the function used to clean the output buffer. But it will also delete the page contents.
?>
