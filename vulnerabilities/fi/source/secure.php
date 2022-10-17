<?php

// getting input
$file = $_GET[ 'page' ];

// line below takes the input and checks if it has file in it and include.php
if( !fnmatch( "file*", $file ) && $file != "include.php" ) {
	
	echo "ERROR: Trying to acces Unauthorized Data";
	exit;
}
?>
