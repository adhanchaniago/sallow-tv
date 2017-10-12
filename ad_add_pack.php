<?php
include_once 'connect.php'; 
session_start();
if(!(isset($_SESSION['user_name'])))
{
	header('location:index.php');
}

if(isset($_POST['add']))
{
$pk=$_POST["adpk"];
$pim=$_POST["picn"];





$qry="INSERT INTO `pack_name`(`p_name`, `p_icon`) VALUES ('$pk','$pim')";
 
 
 $a=mysqli_query($con,$qry);
}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Tearm swallow</title>
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
								<li ><a href="ad_home.php">Home</a></li>
								<li><a href="ad_add_pack.php" >Add Package</a></li>
								<li><a href="ad_package_det_edit.php">Package Details</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
					</div>
				<!-- Header -->

				<!-- Page -->
					
								<section>
									
									<center>
	<div>
<form  name="adpack" action="ad_add_pack.php" method="post" id="form"
			style="border:2px solid #DC6180;
                  background-color: #fff;
						 margin:15px 250px 10px 250px;
						 background-size: cover;
							"><br>
							
			
		<header class="major">
		<center><h3>Add Channel to package</h3></center>
		</header>
		
		
	<input type="text" name="adpk" placeholder="Enter package name" required=" " style="width: 310px;"><br><br>
	<label>Choose package icon: </label><input type="file" name="picn" id="fileToUpload" accept="image/*"><br><br>
		<input type='submit' name="add" value='SAVE'>
		
		
		
		
		</form></form></div>

	
</center>

					
						
					
					
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