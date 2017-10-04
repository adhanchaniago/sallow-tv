<?php
include_once 'connect.php'; 
session_start();
if(!(isset($_SESSION['user_name'])))
{
	header('location:index.php');
	
}
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Tearm  swallow</title>
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
							<ul>
								<li ><a href="pro_detail.php">Your Profile</a></li>
								
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
					</div>

				<!-- Banner -->
					<div id="banner" class="container">
						<section>
							<strong></strong>
						</section>
					</div>

				<!-- Extra -->
					<div id="extra">
						<div class="container">
							<div class="row no-collapse-1">
								<section class="4u"> <a href="" class="image featured"><img src="images/pic01.png" width="150px" height="130px" alt=""></a>
									<div class="box">
										<p>Responsible for reviewing and processing additions, updates, and deletions of provider information in the Provider File database.</p>
										<a href="pro_user_details.php" class="button"> &nbsp User Details &nbsp </a> <br><br>
										<a href="pro_avilable_usrs.php" class="button">Avilable Users</a></div>
								</section>
								
								<section class="4u"> <a href="" class="image featured"><img src="images/pic03.jpg" width="150px" height="153px" alt=""></a>
									<div class="box">
										<p>Freeview offers 70 TV channels, 15 HD* channels All channels over 95% of the favourite programmes are available**.</p>
										<a href="pro_mob_msg_to_user.php" class="button">&nbsp Send Message &nbsp</a><br><br>
                                       <a href="" class="button">&nbsp&nbsp&nbsp&nbsp&nbsp Feed back &nbsp&nbsp&nbsp&nbsp&nbsp</a></div>
								</section>
								<section class="4u"> <a href="" class="image featured"><img src="images/chd.jpg" width="150px" height="130px" alt=""></a>
									<div class="box">
										<p>A channel partner program helps vendors' product and associated services via the 
										bundles from Sky All packages have  channels.</p>
										<a href="" class="button">&nbsp&nbsp -- &nbsp&nbsp</a> <br><br>
										<a href="" class="button">---</a></div>
								</section>
							</div>
							<!--<div class="row no-collapse-1">
								<section class="4u"> <a href="" class="image featured"><img src="images/pk.jpg" width="150px" height="130px" alt=""></a>
									<div class="box">
										<p>Compare the Best TV packages & bundles from Sky All packages have the option to add on Sky channels.</p>
										<a href="" class="button">Add Channel list</a> <br><br>
										<a href="" class="button">Edit channel list</a></div>
								</section>
								<section class="4u"> <a href="p" class="image featured"><img src="images/pgm.jpg" width="150px" height="130px" alt=""></a>
									<div class="box">
										<p>A channel partner program helps vendors' product and associated services via the channel.</p>
										<a href="" class="button">&nbsp&nbsp Add Program &nbsp&nbsp</a> <br><br>
										<a href="" class="button">Program Details</a></div>
								</section>
								<section class="4u"> <a href="" class="image featured"><img src="images/pk.jpg" width="150px" height="130px" alt=""></a>
									<div class="box">
										<p>Compare the Best TV packages & bundles from Sky All packages have the option to add on Sky channels.</p>
										<a href="" class="button">&nbsp Add Packages &nbsp</a> <br><br>
										<a href="" class="button">&nbsp Package Details &nbsp</a></div>
								</section>
								
							
						</div>-->
					</div>

				<!-- Main -->
					<br><br>

	</div>

	<!-- Footer -->
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