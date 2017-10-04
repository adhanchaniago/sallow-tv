<?php
include_once 'connect.php'; //database connection page
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body id="top">

			<!-- Banner -->

				<section id="banner" data-video="images/diary">


					<div class="inner">
						<header>
							<img src="images1/icn.png" alt="Icon" style="width:128px;height:128px;">
							<h1 >Swallow TV</h1>

							<p>From where it happens, we see it happen.</p><br>
						</header>
						<table  style="color: #fff;
						font-size: 2em;
						font-weight: 200;
						font-family: 'Passion One', cursive;" >
			<tr><td><a class="links" href="index.php">
	HOME&nbsp|&nbsp
	</a></td>
	<td ><a class="links" href="pack.php">
	PACKAGES&nbsp|&nbsp
	</a></td>
	<td><a class="links" href="contact.php">
	CONTACT US&nbsp|&nbsp
	</a></td>
	 
	<td ><a class="links" style="color: #DC6180; " href="#" >
	LOGIN
	</a></td></tr></table><br><br>
						<a href="#main" class="more">Learn More</a>
						</div>
					</section>

			<!-- Main -->
				<div id="main">
					<div class="inner">
						<div class='login'>
  <div ><center style="color: #fff; background-color:#DC6180;  font-size: 35px;"><b>Login To Your Account</b></center><br>
  </div>
  <center>
  <form name="login" action="lcnt.php" method="post" id="form">
  <div class='login_fields'>
    <div class='login_fields__user'>

      <img src="images/un.png" width="50" height="50"><input placeholder='Username' name="uname" type='text' style="width:320px;">

      </input>
    </div><br>
    <div class='login_fields__password'>

      <img src="images/pas.png" width="50" height="50"><input placeholder='Password' name="pswd" type='password' style="width:320px;"><br>
		</input>
    </div>
	<a  href="change_pswd.php">Forgot Password</a>
    <div class='login_fields__submit'>
      <input type='submit' value='Log In' name="submit">

    </div>
	
	
	<a  href="register.php">
	<img src="images/regi.png" width="230" height="143" title="detils" alt="detils">
	</a>
  </div></form></center>

</div>
</div>
</div>

					<!-- Boxes -->

<footer id="footer" >
				<hr style="border-width: 3px; color:#DC6180; ">
				<div class="inner">
					
					<h2 style="font-size: 35px; color: #DC6180;">Swallow TV</h2>
					<p style="color: #DC6180;">From where it happens, we see it happen.</p>
					<center><table  >
		<tr><td><a  style="
			color: #DC6180; text-decoration: none;" href="index.php">
HOME&nbsp&nbsp|&nbsp&nbsp
</a></td>
<td ><a  style="
	color: #DC6180; text-decoration: none;" href="pack.php">
PACKAGES&nbsp&nbsp|&nbsp&nbsp
</a></td>
<td><a  style="
	color: #DC6180; text-decoration: none;" href="contact.php">
CONTACT US&nbsp&nbsp|&nbsp&nbsp
</a></td>
 
<td ><a  style="
	color: #DC6180; text-decoration: none;" href="login.php" >
LOGIN<br>
</a></td></tr></table></center>
				</div>
			</footer>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
