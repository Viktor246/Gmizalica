<html>
<head>

	<title>Log In Page</title>

	<link rel="stylesheet" type="text/css" href="../../CSS/login.css">


</head>
<body>
	<?php
		$emailErr = $usernameErr = $passwordErr = $confirmErr = "";
		$email = $username = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["email"])) {
    			$emailErr = "Email is required";
  			} else {
    			$email = test_input($_POST["email"]);
    			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     				 $emailErr = "Invalid email format";
    			}
  			}
  			
  			if (empty($_POST["username"])) {
    			$usernameErr = "Username is required";
  			} else {
    			$username = test_input($_POST["username"]);
    			if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
     				$usernameErr = "Only letters and white space allowed";
    			}
  			}
  			if (empty($_POST["password"])) {
    			$passwordErr = "Password is required";
  			} else {
  				if (strlen($_POST["password"]) < 8) {
  					$passwordErr = "Password needs to contain at least 8 character";
  				}
  				if (strlen($_POST["password"]) > 16) {
  					$passwordErr = "Password must have less than 16 characters";
  				}
  			}
  			if ($_POST["password"] == $_POST["confirm"]) {
  				$confirmErr = "Sve super al treba napraviti";
  			} else {
  				$confirmErr = "Passwords do not match";
  			}

  	}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	?>

	<div class="navbar">
  		<a href="login.html" class="active">Login</a>
  		<a href="register.html" >Register</a>
  		<a href="../pocetna.html" class="right">Return</a>
	</div>


<div class="header">
	<div class="left">
		<form action="/action_page.php" >
		  Username:<br>
		  <input type="text" name="username" class="dabar" placeholder="3 to 15 characters">
		  <br>
		  Password:<br>
		  <input type="password" name="lastname" class="dabar" placeholder="8 to 16 characters">
		  <br><br>
		  <input type="submit" value="Log In" class="gumb">
		</form> 
	</div>
	<div class="rest">
		

	</div>
	<div class="rest">
		<img src="fb_login_pic.png" style="width: 200px;">
		<br>
		<p> Log in with Facebook </p>
	</div>
</div>




</body>
</html>