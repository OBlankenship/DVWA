<?php

header ("X-XSS-Protection: 0");

// Is there any input?
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
	
	// Get input
	$name = str_replace( '<img>', '', $_GET[ 'name' ] );
	$name = str_replace( '<script>', '', $_GET[ 'name' ] );
	
	
	// Feedback for end user
	$html .= '<pre>Hello ' . $_GET[ 'name' ] . '</pre>';
}

?>
