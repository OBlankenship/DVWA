<div class="body_padded">
	<h1>Help - File Inclusion</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>About</h3>
		<p>Some web applications allow the user to specify input that is used directly into file streams or allows the user to upload files to the server.
			At a later time the web application accesses the user supplied input in the web applications context. By doing this, the web application is allowing
			the potential for malicious file execution.</p>

		<p>If the file chosen to be included is local on the target machine, it is called "Local File Inclusion (LFI). But files may also be included on other
			machines, which then the attack is a "Remote File Inclusion (RFI).</p>

		<p>When RFI is not an option. using another vulnerability with LFI (such as file upload and directory traversal) can often achieve the same effect.</p>

		<p>Note, the term "file inclusion" is not the same as "arbitrary file access" or "file disclosure".</p>

		<br /><hr /><br />

		<h3>Objective</h3>
		<p>Read all <u>five</u> famous quotes from '<a href="../hackable/flags/fi.php">../hackable/flags/fi.php</a>' using only the file inclusion.</p>

		<br /><hr /><br />

		<h3>Vulnerable Level</h3>
		<p>This allows for direct input into <u>one of many PHP functions</u> that will include the content when executing.</p>

		<p>Depending on the web service configuration will depend if RFI is a possibility.</p>

		<br />
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>Reference: <?php echo dvwaExternalLinkUrlGet( 'https://en.wikipedia.org/wiki/Remote_File_Inclusion', 'Wikipedia - File inclusion vulnerability' ); ?></p>
	<p>Reference: <?php echo dvwaExternalLinkUrlGet( 'https://owasp.org/www-project-web-security-testing-guide/v42/4-Web_Application_Security_Testing/07-Input_Validation_Testing/11.1-Testing_for_Local_File_Inclusion', 'WSTG - Local File Inclusion' ); ?></p>
	<p>Reference: <?php echo dvwaExternalLinkUrlGet( 'https://owasp.org/www-project-web-security-testing-guide/v42/4-Web_Application_Security_Testing/07-Input_Validation_Testing/11.2-Testing_for_Remote_File_Inclusion', 'WSTG - Remote File Inclusion' ); ?></p>
	<p>Reference: <?php echo dvwaExternalLinkUrlGet( 'https://owasp.org/www-community/vulnerabilities/PHP_File_Inclusion', 'PHP File Inclusion' ); ?></p>

</div>
