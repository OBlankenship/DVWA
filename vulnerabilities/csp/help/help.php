<div class="body_padded">
	<h1>Help - Content Security Policy (CSP) Bypass</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>About</h3>
		<p>Content Security Policy (CSP) is used to define where scripts and other resources can be loaded or executed from. This module will walk you through ways to bypass the policy based on common mistakes made by developers.</p>
		<p>None of the vulnerabilities are actual vulnerabilities in CSP, they are vulnerabilities in the way it has been implemented.</p>

		<br /><hr /><br />

		<h3>Objective</h3>
		<p>Bypass Content Security Policy (CSP) and execute JavaScript in the page.</p>

		<br /><hr /><br />

		<h3>Vulnerable Level</h3>
		<p>Examine the policy to find all the sources that can be used to host external script files.</p>
		<pre>Spoiler: <span class="spoiler">Scripts can be included from Pastebin or Toptal (use to be Hastebin), try storing some JavaScript on there and then loading it in.</span></pre>

		<br />
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>Reference: <?php echo dvwaExternalLinkUrlGet( 'https://content-security-policy.com/', "Content Security Policy Reference" ); ?></p>
	<p>Reference: <?php echo dvwaExternalLinkUrlGet( 'https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP', "Mozilla Developer Network - CSP: script-src"); ?></p>
	<p>Reference: <?php echo dvwaExternalLinkUrlGet( 'https://blog.mozilla.org/security/2014/10/04/csp-for-the-web-we-have/', "Mozilla Security Blog - CSP for the web we have" ); ?></p>
</div>
