<?php 
	$username = "timmch_root";
	$password = "recentivize";
	$hostname = "108.167.179.192"; 
	$dbhandle = mysql_connect($hostname, $username, $password) 
	  or die("Unable to connect to MySQL");

	$selected = mysql_select_db("timmch_recentivize",$dbhandle);
session_start();

if ($_GET['register']) {
     // Only load the code below if the GET
     // variable 'login' is set. You will
     // set this when you submit the form
     $email = $_POST['email'];
     $quer = "SELECT email FROM users WHERE email = '" . $email."'";
     $users = mysql_query($quer);
     $foundEmail = mysql_fetch_row($users);
     $foundEmail = $foundEmail[0];
     $password = $_POST['password'];
     $password2 = $_POST['password2'];
     if (   ($password == $password2) && ($foundEmail == NULL)  ) {
         // Load code below if both username
         // and password submitted are correct
         $password = sha1($password);
         $quer = "INSERT INTO users (email, password) VALUES  ('" . $email . "', '" . $password . "')";
         
		 $register = mysql_query($quer); 		
         $_SESSION['loggedin'] = 1;
          // Set session variable
 
         header("Location: index.php");
         exit;
         // Redirect to a protected page
 
     } else echo "Wrong details";
     // Otherwise, echo the error message
 
}

require_once('header.php');?>

<div id="topSplash" class="darkGradient">
	<div id="loginNav">
		<a class="pull-right" href="<?php echo WEB_URL; ?>login.php">Login</a>
	</div>
	<div id="splashBox" class="clear">
		<div id="signUpEmail">
		<img src="<?php echo WEB_URL; ?>images/recentivize2.png" alt="Smiley face" height="184" width="800">

			<h1>Making Volunteer Work Fun!</h1><br><br>
			<form action="?register=1" method="post">
			<input type="email" style="padding: 5px;" value="" name="email" class="email span4" placeholder="Email address..." required><br><input type="password" value="" name="password" class="password span4" id="mce-password" placeholder="Password..." required><br><input type="password" value="" name="password2" class="password span4" id="mce-password" placeholder="Repeat Password..." required><br><button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-info btn-large">Register!</button>
			</form>
		</div>
	</div>
	<div class="container marginTop">
		<p style="position: relative;right:6px;"><small>Copyright &copy; 2012 Recentivize, LLC. All rights reserved.</small></p>
	</div>

<!--
Log in:
<form action="?register=1" method="post">
Email: <input type="text" name="email" />
Password: <input type="password" name="password" />
Confirm Password: <input type="password" name="password2" />
<input type="submit" />
</form>
-->
