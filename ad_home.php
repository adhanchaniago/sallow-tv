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
		<title>Phase Shift by TEMPLATED</title>
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
							<h1><a href="index.html">SALLOW TV</a></h1>
							<span class="tag">Enjoy ur days with Sallow.</span>
						</div>
						<nav id="nav">
							<ul>
								<li ><a href="ad_home.php">HOME</a></li>
								
								<li><a href="logout.php">LOGOUT</a></li>
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
								<section class="4u"> <a href="ad_provider_reg.php" class="image featured"><img src="images/pic01.png" width="150px" height="130px" alt=""></a>
									<div class="box">
										<p>Responsible for reviewing and processing additions, updates, and deletions of provider information in the Provider File database.</p>
										<a href="ad_provider_reg.php" class="button"> &nbsp&nbsp Add Provider &nbsp&nbsp </a> <br><br>
										<a href="ad_pro_details_edit.php" class="button">Provider Details</a></div>
								</section>
								
								<section class="4u"> <a href="ad_new_chanl.php" class="image featured"><img src="images/pic03.jpg" width="150px" height="153px" alt=""></a>
									<div class="box">
										<p>Freeview offers 70 TV channels, 15 HD* channels, In fact over 95% of the nation’s favourite programmes are available**.</p>
										<a href="ad_new_chanl.php" class="button">&nbsp&nbsp Add Channels &nbsp&nbsp</a><br><br>
                                       <a href="ad_channel_det_edit.php" class="button">Channels Details</a></div>
								</section>
								<section class="4u"> <a href="ad_new_pgm.php" class="image featured"><img src="images/pgm.jpg" width="150px" height="130px" alt=""></a>
									<div class="box">
										<p>A channel partner program helps vendors' product and associated services via the channel.</p>
										<a href="ad_new_pgm.php" class="button">&nbsp&nbsp -- &nbsp&nbsp</a> <br><br>
										<a href="ad_pgm_det_edit.php" class="button">---</a></div>
								</section>
							</div>
							<div class="row no-collapse-1">
								<section class="4u"> <a href="ad_new_pkge.php" class="image featured"><img src="images/pk.jpg" width="150px" height="130px" alt=""></a>
									<div class="box">
										<p>Compare the Best TV packages & bundles from Sky All packages have the option to add on Sky channels.</p>
										<a href="ad_new_pkge.php" class="button">Add Channel list</a> <br><br>
										<a href="" class="button">Edit channel list</a></div>
								</section>
								<section class="4u"> <a href="ad_new_pgm.php" class="image featured"><img src="images/pgm.jpg" width="150px" height="130px" alt=""></a>
									<div class="box">
										<p>A channel partner program helps vendors' product and associated services via the channel.</p>
										<a href="ad_new_pgm.php" class="button">&nbsp&nbsp Add Program &nbsp&nbsp</a> <br><br>
										<a href="ad_pgm_det_edit.php" class="button">Program Details</a></div>
								</section>
								<section class="4u"> <a href="" class="image featured"><img src="images/pk.jpg" width="150px" height="130px" alt=""></a>
									<div class="box">
										<p>Compare the Best TV packages & bundles from Sky All packages have the option to add on Sky channels.</p>
										<a href="ad_add_pack.php" class="button">&nbsp Add Packages &nbsp</a> <br><br>
										<a href="ad_package_det_edit.php" class="button">&nbsp Package Details &nbsp</a></div>
								</section>
								
							
						</div>
					</div>

				<!-- Main -->
					

	</div>

	<!-- Footer -->
		<div id="footer" class="wrapper style2">
			<div class="container" style="height: 15px;">
				<section>
					<header class="major">
						<h4>SALLOW TV</h4>
						<span class="byline">Enjoy ur days with Sallow.</span>
						
					</header>
					
				</section>
			</div>
		</div>

	<!-- Copyright -->
		

	</body>
</html>