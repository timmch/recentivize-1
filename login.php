<?php require_once('header.php');
	$username = "timmch_root";
	$password = "recentivize";
	$hostname = "108.167.179.192"; 
	$dbhandle = mysql_connect($hostname, $username, $password) 
	  or die("Unable to connect to MySQL");

	$selected = mysql_select_db("timmch_recentivize",$dbhandle);
session_start();
 
if ($_GET['login']) {
     // Only load the code below if the GET
     // variable 'login' is set. You will
     // set this when you submit the form
     $email = $_POST['email'];
     $quer = "SELECT password, id FROM users WHERE email = '" . $email."'";
     $users = mysql_query($quer);
     $user = mysql_fetch_row($users);
     $password = $user[0];
     $userID = $user[1];
     if ((sha1($_POST['password']) == $password) && ($email != NULL)) {
         // Load code below if both username
         // and password submitted are correct
 
         $_SESSION['loggedin'] = 1;
         $_SESSION['user_id'] = $userID;
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
		<a class="pull-right" href="<?php echo WEB_URL; ?>register.php">Register</a>
	</div>
	<div id="splashBox" class="clear">
		<div id="signUpEmail">
		<img src="<?php echo WEB_URL; ?>images/logo.png" alt="Smiley face" height="184" width="800">

			<h1>Making Volunteer Work Fun!</h1><br><br>
			<form action="?login=1" method="post">
			<input type="email" style="padding: 5px;" value="" name="email" class="email span4" placeholder="Email address..." required><br><input type="password" value="" name="password" class="password span4" id="mce-password" placeholder="Password..." required><br><button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-info btn-large">Log In!</button>
			</form>
		</div>
	</div>
	<a href="http://zxing.appspot.com/scan?ret=http://foo.com/products/{CODE}/description&SCAN_FORMATS=UPC_A,EAN_13">here</a>
	<div class="container marginTop">
		<p style="position: relative;right:6px;"><small>Copyright &copy; 2012 Recentivize, LLC. All rights reserved.</small></p>
	</div>
