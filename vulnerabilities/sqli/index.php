<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '../../' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated', 'phpids' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'Vulnerability: SQL Injection' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'sqli';
$page[ 'help_button' ]   = 'sqli';
$page[ 'source_button' ] = 'sqli';

dvwaDatabaseConnect();

$method            = 'GET';
$vulnerabilityFile = '';
switch( $_COOKIE[ 'security' ] ) {
	case 'vulnerable':
		$vulnerabilityFile = 'vulnerable.php';
		break;
	default:
		$vulnerabilityFile = 'secure.php';
		break;
}

require_once DVWA_WEB_PAGE_TO_ROOT . "vulnerabilities/sqli/source/{$vulnerabilityFile}";

$page[ 'body' ] .= "
<div class=\"body_padded\">
<h1>Vulnerability: SQL Injection</h1>

<div class=\"vulnerable_code_area\">";


$page[ 'body' ] .= "
	<form action=\"#\" method=\"{$method}\">
		<p>
			User ID:";


$page[ 'body' ] .= "\n				<input type=\"text\" size=\"15\" name=\"id\">";

$page[ 'body' ] .= "\n				<input type=\"submit\" name=\"Submit\" value=\"Submit\">
		</p>\n";

$page[ 'body' ] .= "
	</form>";

$page[ 'body' ] .= "
		{$html}
	</div>

	<h2>More Information</h2>
	<ul>
		<li>" . dvwaExternalLinkUrlGet( 'https://en.wikipedia.org/wiki/SQL_injection' ) . "</li>
		<li>" . dvwaExternalLinkUrlGet( 'https://www.netsparker.com/blog/web-security/sql-injection-cheat-sheet/' ) . "</li>
		<li>" . dvwaExternalLinkUrlGet( 'https://owasp.org/www-community/attacks/SQL_Injection' ) . "</li>
		<li>" . dvwaExternalLinkUrlGet( 'https://bobby-tables.com/' ) . "</li>
	</ul>
</div>\n";

dvwaHtmlEcho( $page );

?>
