<?php

$html = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$cookie_value = session_create_id();
	setcookie("dvwaSession", $cookie_value);
}
?>
