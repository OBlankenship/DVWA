<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '../../' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated', 'phpids' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'Vulnerability: Content Security Policy (CSP) Bypass' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'csp';
$page[ 'help_button' ]   = 'csp';
$page[ 'source_button' ] = 'csp';

dvwaDatabaseConnect();

$vulnerabilityFile = '';
switch( $_COOKIE[ 'security' ] ) {
	case 'vulnerable':
		$vulnerabilityFile = 'vulnerable.php';
		break;
	default:
		$vulnerabilityFile = 'secure.php';
		break;
}

$page[ 'body' ] = <<<EOF
<div class="body_padded">
	<h1>Vulnerability: Content Security Policy (CSP) Bypass</h1>

	<div class="vulnerable_code_area">
EOF;
 
require_once DVWA_WEB_PAGE_TO_ROOT . "vulnerabilities/csp/source/{$vulnerabilityFile}";

$page[ 'body' ] .= <<<EOF
	</div>
EOF;

$page[ 'body' ] .= "
	<h2>More Information</h2>
	<ul>
		<li>" . dvwaExternalLinkUrlGet( 'https://content-security-policy.com/', "Content Security Policy Reference" ) . "</li>
		<li>" . dvwaExternalLinkUrlGet( 'https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP', "Mozilla Developer Network - CSP: script-src") . "</li>
		<li>" . dvwaExternalLinkUrlGet( 'https://blog.mozilla.org/security/2014/10/04/csp-for-the-web-we-have/', "Mozilla Security Blog - CSP for the web we have" ) . "</li>
	</ul>
	<p><i>Module developed by <a href='https://twitter.com/digininja'>Digininja</a>.</i></p>
</div>\n";

dvwaHtmlEcho( $page );

?>
