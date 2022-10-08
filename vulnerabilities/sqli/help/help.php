<div class="body_padded">
	<h1>Help - SQL Injection</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>About</h3>
		<p>A SQL injection attack consists of insertion or "injection" of a SQL query via the input data from the client to the application.
			A successful SQL injection exploit can read sensitive data from the database, modify database data (insert/update/delete), execute administration operations on the database
			(such as shutdown the DBMS), recover the content of a given file present on the DBMS file system (load_file) and in some cases issue commands to the operating system.</p>

		<p>SQL injection attacks are a type of injection attack, in which SQL commands are injected into data-plane input in order to effect the execution of predefined SQL commands.</p>

		<p>This attack may also be called "SQLi".</p>

		<br /><hr /><br />

		<h3>Objective</h3>
		<p>There are 5 users in the database, with id's from 1 to 5. Your mission... to steal their passwords via SQLi.</p>

		<br /><hr /><br />

		<h3>Vulnerable Level</h3>
		<p>The SQL query uses RAW input that is directly controlled by the attacker. All they need to-do is escape the query and then they are able
			to execute any SQL query they wish.</p>
		<pre>Spoiler: <span class="spoiler">?id=a' UNION SELECT "text1","text2";-- -&Submit=Submit</span>.</pre>

		<br />
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>Reference: <?php echo dvwaExternalLinkUrlGet( 'https://www.owasp.org/index.php/SQL_Injection' ); ?></p>
</div>
