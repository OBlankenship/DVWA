<div class="body_padded">
	<h1>Help - SQL Injection (Blind)</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>About</h3>
		<p>When an attacker executes SQL injection attacks, sometimes the server responds with error messages from the database server complaining that the SQL query's syntax is incorrect.
			Blind SQL injection is identical to normal SQL Injection except that when an attacker attempts to exploit an application, rather then getting a useful error message,
			they get a generic page specified by the developer instead. This makes exploiting a potential SQL Injection attack more difficult but not impossible.
			An attacker can still steal data by asking a series of True and False questions through SQL statements, and monitoring how the web application response
			(valid entry retunred or 404 header set).</p>

		<p>"time based" injection method is often used when there is no visible feedback in how the page different in its response (hence its a blind attack).
		 	This means the attacker will wait to see how long the page takes to response back. If it takes longer than normal, their query was successful.</p>

		<br /><hr /><br />

		<h3>Objective</h3>
		<p>Find the version of the SQL database software through a blind SQL attack.</p>

		<br /><hr /><br />

		<h3>Vulnerable Level</h3>
		<p>The SQL query uses RAW input that is directly controlled by the attacker. All they need to-do is escape the query and then they are able
			to execute any SQL query they wish.</p>
		<pre>Spoiler: <span class="spoiler">?id=1' AND sleep 5&Submit=Submit</span>.</pre>

		<br />

	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>Reference: <?php echo dvwaExternalLinkUrlGet( 'https://owasp.org/www-community/attacks/Blind_SQL_Injection' ); ?></p>
</div>
