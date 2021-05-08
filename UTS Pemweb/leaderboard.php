<?php

	include 'dbconnect.php';

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "leaderboard";
	$dbtable = "lead";
	tampilLead($dbhost, $dbuser, $dbpass, $dbname, $dbtable);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Leaderboard</title>
</head>
<body>
	<center>
		<br><a href="logout.php"><button>Keluar</button></a>
	</center>
</body>
</html>