<?php

$white_list = array("English", "German", "Spanish", "French");

if (!is_null($_GET['default'])){
	if (in_array($_GET['default'], $white_list)){
		//selected choice is in the array do nothing
	}
	else{
		//Make the language selection default to one in the list
		header ('Location: http://localhost/DVWA/vulnerabilities/xss_d/?default=Spanish');
		exit;
	}
}

?>
