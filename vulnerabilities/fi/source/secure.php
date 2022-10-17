<?php

// The page we wish to display
$file = $_GET[ 'page' ];

// Input validation
if( !fnmatch( "file*", $file ) && $file != "include.php" ) {
	
	echo "ERROR: Trying to acces Unauthorized Data";
	exit;
}
?>
