<div class="body_padded">
	<h1>Help - Weak Session IDs</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>About</h3>
		<p>Knowledge of a session ID is often the only thing required to access a site as a specific user after they have logged in, if that session ID is able to be calculated or easily guessed, then an attacker will have an easy way to gain access to user accounts without having to brute force passwords or find other vulnerabilities such as Cross-Site Scripting.</p>

		<p><hr /></p>

		<h3>Objective</h3>
		<p>This module uses four different ways to set the dvwaSession cookie value, the objective of each level is to work out how the ID is generated and then infer the IDs of other system users.</p>

		<p><hr /></p>

		<h3>Vulnerable Level</h3>
		<p>The cookie value should be very obviously predictable.</p>

	</div></td>
	</tr>
	</table>

	</div>

	<p>Reference: <?php echo dvwaExternalLinkUrlGet( 'https://owasp.org/www-project-web-security-testing-guide/latest/4-Web_Application_Security_Testing/06-Session_Management_Testing/01-Testing_for_Session_Management_Schema', 'WSTG - Session Management Schema' ); ?></p>
	<p>Reference: <?php echo dvwaExternalLinkUrlGet( 'https://cheatsheetseries.owasp.org/cheatsheets/Session_Management_Cheat_Sheet.html', 'OWASP Cheat Sheet - Session Management' ); ?></p>
</div>
