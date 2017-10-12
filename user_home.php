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
								<li ><a href="user_home.php">Home</a></li>
								<li ><a href="usr_pro_change_pswd.php">Change Password</a></li>
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
								<section class="4u"> <a href="" class="image featured"><img src="images/usrs.jpeg" width="150px" height="130px" alt=""></a>
									<div class="box">
										<p>Responsible for reviewing and processing additions, updates, and deletions of provider information in the Provider File database.</p>
										<a href="usrhme.php" class="button"> &nbsp Your Profile &nbsp </a> <br>
									</div>
								</section>
								
								<section class="4u"> <a href="" class="image featured"><img src="images/uap.png" width="150px" height="153px" alt=""></a>
									<div class="box">
										<p>Freeview offers 70 TV channels, 15 HD* channels All channels over 95% of the favourite programmes are available**.</p>
										<a href="user_packs.php" class="button">&nbsp Available packages  &nbsp</a><br>
                                       </div>
								</section>
								<section class="4u"> <a href="" class="image featured"><img src="images/yp.png" width="150px" height="130px" alt=""></a>
									<div class="box">
										<p>A channel partner program helps vendors' product and associated services via the 
										bundles from Sky All packages have  channels.</p>
										<a href="usr_own_pack_det.php" class="button">&nbsp&nbsp Your Package &nbsp&nbsp</a> <br></div>
								</section>
							</div>
							<div class="row no-collapse-1">
								<section class="4u"> <a href="" class="image featured"><img src="images/lc.jpg" width="150px" height="130px" alt=""></a>
									<div class="box">
										<p>Compare the Best TV packages & bundles from Sky All packages have the option to add on Sky channels.</p>
										<a href="usr_chnls.php" class="button">Your Channel</a> <br></div>
								</section>
								<section class="4u"> <a href="p" class="image featured"><img src="images/chd.jpg" width="150px" height="130px" alt=""></a>
									<div class="box">
										<p>A channel partner program helps vendors' product and associated services via the channel.</p>
										<a href="" class="button">&nbsp&nbsp ---&nbsp&nbsp</a> <br></div>
								</section>
								<section class="4u"> <a href="" class="image featured"><img src="images/ufdb.jpg" width="150px" height="130px" alt=""></a>
									<div class="box">
										<p>Compare the Best TV packages & bundles from Sky All packages have the option to add on Sky channels.</p>
										<a href="usr_feedbk.php" class="button">&nbsp complaints &nbsp</a> <br></div>
								</section>
								
							
						</div>
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