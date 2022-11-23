<?php

if( isset( $_GET[ 'Login' ] ) ) {
	// Check number of user attempts
	// Set to 0 if its the first attempt
	if ( !isset($_SESSION['tries'])){
		$_SESSION['tries'] = 0;
	}
	
	// Get username
	$user = $_GET[ 'username' ];

	// Get password
	$pass = $_GET[ 'password' ];
	$pass = md5( $pass );

	// Check the database
	$query  = "SELECT * FROM `users` WHERE user = '$user' AND password = '$pass';";
	$result = mysqli_query($GLOBALS["___mysqli_ston"],  $query ) or die( '<pre>' . ((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)) . '</pre>' );

	if( $result && mysqli_num_rows( $result ) == 1 ) {
		// Get users details
		$row    = mysqli_fetch_assoc( $result );
		$avatar = $row["avatar"];

		// Login successful
		$html .= "<p>Welcome to the password protected area {$user}</p>";
		$html .= "<img src=\"{$avatar}\" />";
		
		//Reset session attempts
		$_SESSION['tries'] = 0;
	}
	else {
		// Login failed
		sleep(3);
		
		// Longer freeze on attemps
		if ($_SESSION['tries'] === 3){
			$html .= "<pre><br />Maximum number of login tries reached.</pre>";
			
			// Freeze out attemps for 60 minutes
			sleep(3600);
			$_SESSION['tries'] = 0;
		}
		else {			
			$_SESSION['tries'] += 1;
			$html .= "<pre><br />Username and/or password incorrect.</pre>";
		}
	}

	((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
}

?>
