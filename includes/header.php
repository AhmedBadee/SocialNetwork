<html>
	<head>
		<title>CSE-ZU Social Network</title>
		<link href="../stylesheets/public.css" media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="header">
			<h1>CSE-ZU Social Network</h1>
			<?php
				//show log out link if user logged in
				require_once("../includes/session.php");
				if(logged_in_as()) {
					echo "<a href=\"logout.php\">Log out</a>";
				}
			?>
		</div>
		<div id="main">