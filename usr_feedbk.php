<?php
include_once 'connect.php'; 
session_start();
$i = $_SESSION['id'];
if(!(isset($_SESSION['user_name'])))
{
	header('location:index.php');
}

$usr=$_SESSION['user_name'];
 $q = "SELECT `login_id`, `username`, `password`, `type_id`, `reg_id`, `log_stat` FROM `login` WHERE `username`='$usr' ";
$result = $con->query($q);
$row = $result->fetch_assoc();
$i=$row["login_id"];
$t=$row["reg_id"];
$rdate = date('d/m/y');
if(isset($_POST['submit']))
{
$txt=$_POST["fedbk"];



$qury="INSERT INTO `complaints`( `reg_id`, `body`, `sd_date`, `status`) VALUES ('$t','$txt','$rdate','0')";
 
 $a=mysqli_query($con,$qury);
 
}
?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>user channels</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div class="wrapper style1">

				<!-- Header -->
					<div id="header" class="skel-panels-fixed">
						<div id="logo">
							<h1>SWALLOW TV</h1>
							<span class="tag">Enjoy Your Days With Swallow.</span>
						</div>
						<nav id="nav">
							<ul><li ><a href="user_home.php">Home</a></li>
								<li ><a href="usr_pro_change_pswd.php">Change Password</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
					</div>
				<!-- Header -->

				<!-- Page -->
					
								<section>
									
									<center>
	<div>
<form name="feedbk" action="#" method="post" id="feedbk"
			style="border:2px solid #DC6180;
                  background-color: #fff;
						 margin:15px 250px 10px 250px;
						 background-size: cover;
							">
							
							<header class="major"><br>
										<center><h3>Register Your Complaints</h3></center>
										
									</header>
			
						<textarea name="fedbk"  placeholder="Enter your complaints" required="" style="width: 310px; border:.5px solid #eee; "></textarea><br></br>
		<input type='submit' value='submit' name="submit"><br><br>			
									
							</form></div>

	
</div></center>

					
						
					
					
				</section>
	
<div id="footer" class="wrapper style2">

			<section>
					<header >
						<h2>SWALLOW TV</h2><br>
						<h3>Enjoy Your Days With Swallow.</h3><br><br><br>
						<h5>Powered by Tearm swallow,  &nbspswallow777kerala@ac.in &nbsp ph: +91 8846521474</h5>
						
					</header>
					
				</section>
		</div>
	</body>
</html>