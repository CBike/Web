<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location:'.$uri.'/ch02/hello.php/');
	exit;
?>
Something is wrong with the XAMPP installation :-(
