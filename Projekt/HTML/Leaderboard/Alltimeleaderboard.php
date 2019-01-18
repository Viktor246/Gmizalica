<html>
<head>

	<title>All-time leaderboard</title>

	<link rel="stylesheet" type="text/css" href="../../CSS/leaderboard.css">


</head>
<body>

	<div class="navbar">
  		<a href="dailyleaderboard.html" >Daily</a>
  		<a href="weeklyleaderboard.html" >Weekly</a>
  		<a href="monthlyleaderboard.html">Monthly</a>
  		<a href="Alltimeleaderboard.php" class="active">All-time</a>
  		<a href="../pocetna_login.php" class="right">Return</a>
	</div>


	<div class="header">
		<div class="left">
			<h1>All-time leaderboard</h1>
			<p>Track your all-time highscore against other players.</p>
		</div>
		<div class="right">
			<h1>Your All-time Highscore</h1>
			<p>25000</p>
		</div>
	</div>
	<div class="tablediv">
		<div>
			<?php
				$servername = '127.0.0.1';
				$dbusername = 'root';
				$dbpass = 'root';
				$dbname = 'gmizalica';
				$db = new mysqli($servername, $dbusername, $dbpass, $dbname);
				if ($db->connect_error) {
					die("Ne radim");
				}

				$result = mysqli_query($db,"SELECT userID, hs, hs_t FROM leaderboard ORDER BY hs DESC");

				echo "<table class='leaderboard'>
				<tr>
					<th>Position</th>
  					<th>Player</th>
  					<th>Score</th>
  					<th>Time</th>
				</tr>
				";
				$position = 1;
				while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>" . $position . "</td>";
					echo "<td>" . $row['userID'] . "</td>";
					echo "<td>" . $row['hs'] . "</td>";
					echo "<td>" . $row['hs_t'] . "</td>";
					echo "</tr>";
					$position++;
				}
				echo "</table>";

				mysqli_close($con);
			?>
		</div>
	</div>





</body>
</html>