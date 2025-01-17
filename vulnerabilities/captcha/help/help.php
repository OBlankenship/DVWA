<div class="body_padded">
	<h1>Help - Insecure CAPTCHA</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>About</h3>
		<p>A <?php echo dvwaExternalLinkUrlGet( 'https://en.wikipedia.org/wiki/CAPTCHA', 'CAPTCHA' ); ?> is a program that can tell whether its user is a human or a computer. You've probably seen
			them - colourful images with distorted text at the bottom of Web registration forms. CAPTCHAs are used by many websites to prevent abuse from
			"bots", or automated programs usually written to generate spam. No computer program can read distorted text as well as humans can, so bots
			cannot navigate sites protected by CAPTCHAs.</p>

		<p>CAPTCHAs are often used to protect sensitive functionality from automated bots. Such functionality typically includes user registration and changes,
			password changes, and posting content. In this example, the CAPTCHA is guarding the change password functionality for the user account. This provides
			limited protection from CSRF attacks as well as automated bot guessing.</p>

		<br /><hr /><br />

		<h3>Objective</h3>
		<p>Your aim, change the current user's password in a automated manner because of the poor CAPTCHA system.</p>

		<br /><hr /><br />

		<h3>Vulnerable Level</h3>
		<p>The issue with this CAPTCHA is that it is easily bypassed. The developer has made the assumption that all users will progress through screen 1, complete the CAPTCHA, and then
			move on to the next screen where the password is actually updated. By submitting the new password directly to the change page, the user may bypass the CAPTCHA system.</p>

		<br />
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>Reference: <?php echo dvwaExternalLinkUrlGet( 'https://en.wikipedia.org/wiki/CAPTCHA' ); ?></p>
</div>
