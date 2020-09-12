<html>
<head>
<title>PHP Security challenge</title>
</head>
<body>
<h1>PHP Security challenge</h1>
<p>The following files are part of a security challenge by <a href="https://twitter.com/wireghoul">@Wireghoul</a>.</p><p>
Rewards offered for payloads leading to RCE or reading arbitrary files such as the content of ../flag.txt or /etc/passwd (outside webroot)
Configuration is default, non hardened PHP, confirmable via <a href="info.php">phpinfo</a>. Source code retrieval of the scripts is intentional
and may assist with exploitation. Any bugs with impact outside of rce and file reads outside of the webroot, such as xss or csrf should be 
considered intended and will not receive rewards.
</p><p>
User data ends up in the following functions:
<ul>
<li>include()</li>
<li>shell_exec()</li>
</li>file_get_contents()</li>
</ul>
However, the code should not be exploitable.... or is it?

Send your payloads to wireghoul gmail com; $$$ rewards, swag and bragging rights will be provided per unique vector until it runs out.
Targets:</p>
<a href="lfi.php?fn=library.php">lfi.php</a><br>
<a href="lfi2.php?dir=./">lfi2.php</a><br>
<a href="ping.php?h=127.0.0.1">ping.php</a><br>
<a href="fget.php?fn=hello.txt">fget.php</a><br>
<a href="fget2.php?dir=./">fget2.php</a><br>

<h1>Automated scanners (like burp) will not get you shells/flag!</h1>
Good hunting and remember to have fun, automated tools were already used for testing.

