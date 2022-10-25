<?php

if( isset( $_POST[ 'Submit' ]  ) ) {
	// Get input 
	// trim function removes whitespace
	$input = trim($_REQUEST[ 'ip' ]);

	// Set blacklist
	//all of these characters are ways to "escape" and add new commands
	$blacklist = array(
		'&'  => '',
		';'  => '',
		'| ' => '',
		'-'  => '',
		'$'  => '',
		'('  => '',
		')'  => '',
		'`'  => '',
		'||' => '',
	);

	// Remove any of the characters in the array (blacklist).


	$input = str_replace( array_keys( $blacklist ), $blacklist, $input );
	
	
	//code is the same from down here
	// Determine OS and execute the ping command.
	if( stristr( php_uname( 's' ), 'Windows NT' ) ) {
		// Windows
		$cmd = shell_exec( 'ping  ' . $input );
	}
	else {
		// *nix
		$cmd = shell_exec( 'ping  -c 4 ' . $input );
	}

	// Feedback for the end user
	$html .= "<pre>{$cmd}</pre>";
}

?>
