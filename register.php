<?php 
session_start();
	$username = "timmch_root";
	$password = "recentivize";
	$hostname = "108.167.179.192"; 
	$dbhandle = mysql_connect($hostname, $username, $password) 
	  or die("Unable to connect to MySQL");

	$selected = mysql_select_db("timmch_recentivize",$dbhandle);

if ($_GET['register']) {
     // Only load the code below if the GET
     // variable 'login' is set. You will
     // set this when you submit the form
     $email = "'".$_POST['email']."'";
     $quer = "SELECT email FROM users WHERE email = '" . $email."'";
     $users = mysql_query($quer);
     $foundEmail = mysql_fetch_row($users);
     $foundEmail = $foundEmail[0];
     $password = $_POST['password'];
     $first_name = "'".$_POST['first_name']."'";
     $password2 = $_POST['password2'];
     if (   ($password == $password2) && ($foundEmail == NULL)  ) {
         // Load code below if both username
         // and password submitted are correct
         $password = sha1($password);
         $password = "'".$password."'";
         $quer = "INSERT INTO users (email, password, first_name) VALUES  ($email , $password, $first_name)";
         
		 $register = mysql_query($quer); 		
         $_SESSION['loggedin'] = 1;
         $_SESSION['user_id'] = mysql_insert_id();
          // Set session variable
 
         header("Location: index.php");
         exit;
         // Redirect to a protected page
 
     } else echo "Wrong details";
     // Otherwise, echo the error message
 
}

require_once('header.php');?>

<div id="mainWindow">
<div id="mainContainer">
<div id="topSplash2" class="darkGradient">
		<img src="<?php echo WEB_URL; ?>images/logo.png" alt="Smiley face" height="184" width="800">
			<h1 style="text-align:center;"><FONT COLOR="ffffff">Making Volunteer Work Fun!</FONT></h1><br><br>
			<form action="?register=1" method="post">
				<div  style="text-align:center;">
					<input type="text" style="padding:20px 10px;font-size:1.4em;" value="" name="first_name" class="text span4" placeholder="First Name..." required>
				</div>
				<div style="text-align:center;">
					<input type="email" style="padding:20px 10px;font-size:1.4em;" value="" name="email" class="email span4" placeholder="Email address..." required>		
				</div>	
				<div style="text-align:center;">
				<input style="padding:20px 10px;font-size:1.4em;" type="password" value="" name="password" class="password span4" id="mce-password" placeholder="Password..." required>
				</div>
				<div style="text-align:center;">
					<input type="password" value="" name="password2" class="password span4" id="mce-password" placeholder="Repeat Password..." required style="padding:20px 10px;font-size:1.4em;">			
				</div>
				<div style="text-align:center;">
				<button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-info btn-large" style="width:288px;" >Register!</button>
				</div>
			</form>
			<div style="text-align:center;">
			<a href="<?php echo WEB_URL; ?>login.php">Login</a>
			</div>	
		<br>		
		<div style="text-align:center;">
		<p><small>Copyright &copy; 2012 Recentivize, LLC. All rights reserved.</small></p>
	</div>
</div>
</div>
</div>
