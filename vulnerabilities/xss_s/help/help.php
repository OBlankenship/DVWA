<div class="body_padded">
	<h1>Help - Cross Site Scripting (Stored)</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<p>"Cross-Site Scripting (XSS)" attacks are a type of injection problem, in which malicious scripts are injected into the otherwise benign and trusted web sites.
			XSS attacks occur when an attacker uses a web application to send malicious code, generally in the form of a browser side script,
			to a different end user. Flaws that allow these attacks to succeed are quite widespread and occur anywhere a web application using input from a user in the output,
			without validating or encoding it.</p>

		<p>An attacker can use XSS to send a malicious script to an unsuspecting user. The end user's browser has no way to know that the script should not be trusted,
			and will execute the JavaScript. Because it thinks the script came from a trusted source, the malicious script can access any cookies, session tokens, or other
			sensitive information retained by your browser and used with that site. These scripts can even rewrite the content of the HTML page.</p>

		<p>The XSS is stored in the database. The XSS is permanent, until the database is reset or the payload is manually deleted.</p>

		<br /><hr /><br />

		<h3>Objective</h3>
		<p>Redirect everyone to a web page of your choosing.</p>

		<br /><hr /><br />

		<h3>Vulnerable Level</h3>
		<p>Vulnerable level will not check the requested input, before including it to be used in the output text.</p>
		<pre>Spoiler: <span class="spoiler">Either name or message field: &lt;script&gt;alert("XSS");&lt;/script&gt;</span>.</pre>

		<br />

	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>Reference: <?php echo dvwaExternalLinkUrlGet( 'https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)' ); ?></p>
</div>
