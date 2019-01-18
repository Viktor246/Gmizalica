<?php
	session_start();
	$score = $_POST["score"];
	$seconds = $_POST["seconds"];
	$id = $SESSION["ID"];
	
	echo 'SCORE: ' . $score;
	
	$servername = '127.0.0.1';
	$dbusername = 'root';
	$dbpass = 'root';
	$dbname = 'gmizalica';
	
	$db = new mysqli($servername, $dbusername, $dbpass, $dbname);

	mysqli_close($db);
	

?>