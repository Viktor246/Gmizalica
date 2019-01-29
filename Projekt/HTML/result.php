<?php
	session_start();
	$score = $_POST["score"];
	$seconds = $_POST["seconds"];
	$id = $_SESSION["ID"];
	echo 'SCORE: ' . $score;
	echo 'TIME: ' . $seconds;
	
	$servername = '127.0.0.1';
	$dbusername = 'root';
	$dbpass = 'root';
	$dbname = 'gmizalica';
	
	$db = new mysqli($servername, $dbusername, $dbpass, $dbname);

	$stmt = "SELECT * FROM leaderboard WHERE userID='$id'";
    $result = mysqli_query($db, $stmt);
	$row = mysqli_fetch_assoc($result);
	if ($score >= $row["hs"]) {
		$stmt_hs = "UPDATE leaderboard SET hs = '$score', hs_t = '$seconds' WHERE userID = '$id'";
		if (mysqli_query($db, $stmt_hs)) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $stmt_hs . "<br>" . mysqli_error($db);
		}	
	}
	if ($score >= $row["monthly_hs"]) {
		$stmt_m = "UPDATE leaderboard SET monthly_hs = '$score', monthly_hs_t = '$seconds' WHERE userID = '$id'";
    	if (mysqli_query($db, $stmt_m)) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $stmt_m . "<br>" . mysqli_error($db);
		}
	}
	if ($score >= $row["weekly_hs"]) {
		$stmt_w = "UPDATE leaderboard SET weekly_hs = '$score', weekly_hs_t = '$seconds' WHERE userID = '$id'";
    	if (mysqli_query($db, $stmt_w)) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $stmt_w . "<br>" . mysqli_error($db);
		}	
	}
	if ($score >= $row["daily_hs"]) {
		$stmt_d = "UPDATE leaderboard SET daily_hs = '$score', daily_hs_t = '$seconds' WHERE userID = '$id'";
    	if (mysqli_query($db, $stmt_d)) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $stmt_d . "<br>" . mysqli_error($db);
		}
	}

	mysqli_close($db);
?>