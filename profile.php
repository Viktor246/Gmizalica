<?php
	session_start()
	$servername = '127.0.0.1';
	$dbusername = 'root';
	$dbpass = 'root';
	$dbname = 'gmizalica';

	$db = new mysqli($servername, $dbusername, $dbpass, $dbname);
	?>

<html>
<head>

	<title>Profile</title>

	<link rel="stylesheet" type="text/css" href="../CSS/profile.css">


</head>
<body>

	<div class="navbar">
		<a href="pocetna_login.html" class="right">Return</a>
  		<a href="login.html" class="right">Log out</a>
  		
	</div>


<div class="header">
	<div class="left">
		<img src="fb_login_pic.png" style="width: 80x;"> </br>
		<table class="profiletb">
			<tr>
				<td>Username:



				</td>
  				<td>
  					<?php
  						$id = $_SESSION["ID"];
						$sql = "SELECT username FROM player WHERE userID = '$id'";
						$username = mysqli_query($db, $sql);
						$row = mysqli_fetch_assoc($username);
						echo " ". $row["username"] ." ";
					?> 
				</td>
			</tr>
			<tr>
				<td>E-mail:</td>
  				<td> 

  					<?php
  						$id = $_SESSION["ID"];
						$sql = "SELECT email FROM player WHERE userID = '$id'";
						$email = mysqli_query($db, $sql);
						$row = mysqli_fetch_assoc($email);
						echo " ". $row["email"] ." ";
					?> 

  				</td>
			</tr>
			<tr>
				<td><a href="Leaderboard/Alltimeleaderboard.php" class="linkovi">Highscore:</a></td>
  				<td> 

  					<?php
  						$id = $_SESSION["ID"];
						$sql = "SELECT hs FROM leaderboard WHERE userID = '$id'";
						$hs = mysqli_query($db, $sql);
						$row = mysqli_fetch_assoc($hs);
						echo " ". $row["hs"] ." ";
					?> 

  				</td>
			</tr>
			<tr>
				<td><a href="Leaderboard/monthlyleaderboard.php" class="linkovi">Monthly best score:</a></td>
  				<td> 

  					<?php
  						$id = $_SESSION["ID"];
						$sql = "SELECT monthly_hs FROM leaderboard WHERE userID = '$id'";
						$m_hs = mysqli_query($db, $sql);
						$row = mysqli_fetch_assoc($m_hs);
						echo " ". $row["monthly_hs"] ." ";
					?> 

  				</td>
			</tr>
			<tr>
				<td><a href="Leaderboard/weeklyleaderboard.php" class="linkovi">Weekly best score:</a></td>
  				<td> 

  					<?php
  						$id = $_SESSION["ID"];
						$sql = "SELECT weekly_hs FROM leaderboard WHERE userID = '$id'";
						$w_hs = mysqli_query($db, $sql);
						$row = mysqli_fetch_assoc($w_hs);
						echo " ". $row["weekly_hs"] ." ";
					?> 

  				</td>
			</tr>
			<tr>
				<td><a href="Leaderboard/dailyleaderboard.php" class="linkovi">Daily best score:</a></td>
  				<td> 

  					<?php
  						$id = $_SESSION["ID"];
						$sql = "SELECT daily_hs FROM leaderboard WHERE userID = '$id'";
						$d_hs = mysqli_query($db, $sql);
						$row = mysqli_fetch_assoc($d_hs);
						echo " ". $row["daily_hs"] ." ";
					?> 

  				</td>
			</tr>
			<tr>
				<td>Time played:</td>
  				<td> 

  					<?php
  						$id = $_SESSION["ID"];
						$sql = "SELECT time_played FROM player WHERE userID = '$id'";
						$tp = mysqli_query($db, $sql);
						$row = mysqli_fetch_assoc($tp);
						echo " ". $row["time_played"] ." s";
					?> 

  				</td>
			</tr>
			<tr>
				<td>Games played:</td>
  				<td> 

  					<?php
  						$id = $_SESSION["ID"];
						$sql = "SELECT games_played FROM player WHERE userID = '$id'";
						$gp = mysqli_query($db, $sql);
						$row = mysqli_fetch_assoc($gp);
						echo " ". $row["games_played"] ." ";
					?> 

  				</td>
			</tr>
			<tr>
				<td>Collective score:</td>
  				<td> 

  					<?php
  						$id = $_SESSION["ID"];
						$sql = "SELECT totalscore FROM leaderboard WHERE userID = '$id'";
						$t_hs = mysqli_query($db, $sql);
						$row = mysqli_fetch_assoc($t_hs);
						echo " ". $row["totalscore"] ." ";
					?> 

  				</td>
			</tr>
			<tr>
				<td>Average score:</td>
  				<td> 

  					<?php
  			???????		$id = $_SESSION["ID"];
			???????		$sql = "SELECT totalscore FROM leaderboard WHERE userID = '$id'";
			???????		$t_hs = mysqli_query($db, $sql);
						$row = mysqli_fetch_assoc($t_hs);
						echo " ". $row["totalscore"] ." ";
					?> 

  				</td>
			</tr>
			<tr>
				<td>Average time:</td>
  				<td> s</td>
			</tr>
		</table>
	</div>
	<div class="rest">
		YOUR FRIENDS: </br>
		<div>
			<table class="friends">
				<tr>
					<th>Username</th>
  					<th>Wins</th>
  					<th>Loses</th>
				</tr>
				<tr>
					<td>Marko123</td>
  					<td>3</td>
  					<td>2</td>
				</tr>
			</table>
		</div>

	</div>
	
</div>




</body>
</html>