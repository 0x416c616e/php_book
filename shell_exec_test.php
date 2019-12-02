<!DOCTYPE html>
<head>
	<title>shell_exec() test</title>
</head>
<body>
	<p>Here are some things you can do in this project:</p>
	<ul>
		<li><a href="/">Back</a></li>
	</ul>
	
	
	<?php
	$output = shell_exec(whoami);
	echo $output;
	?>
</body>
</html>
