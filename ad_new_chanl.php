<?php
include_once 'connect.php'; 
session_start();
if(!(isset($_SESSION['user_name'])))
{
	header('location:index.php');
}

if(isset($_POST['add']))
{
$ct=$_POST["cate"];
$cp=$_POST["ctype"];
$cn=$_POST["cname"];
$cd=$_POST["cdis"];
$cl=$_POST["icn"];

$cs="0";

$qury="INSERT INTO `channel`
(`c_category_id`, `channel_type_id`, `c_name`, `logo`, `discripition`, `status`) VALUES
 ('$ct','$cp','$cn','$cl','$cd','$cs')";
 
 $a=mysqli_query($con,$qury);
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
								<li><a href="ad_new_chanl.php">Add Channels</a></li>
								<li><a href="ad_channel_det_edit.php">Channels Details</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
					</div>
				<!-- Header -->

				<!-- Page -->
					
													
								<section>
									
									<center>
	
<form name="addchnl" action="ad_new_chanl.php" method="post" id="add_c"
style="border:.5px solid #DC6180;
background-color: #ffc0cb;
margin:1px 50px 10px 20px;
 background-size: cover;">
<br><br><br>
			<header class="major">
			<center><h3 style="color: #ffa500;">Add Channels</h3></center>
			</header>
			<select name="cate" required="" >
	<option >--Select category--</option>
    <option value="1">General</option>
    <option value="2">News</option>
    <option value="3">Movies</option>
	
  </select><br><br>
  <select name="ctype" required="" >
	<option >--Select type--</option>
    <option value="1">Malayalam</option>
    <option value="2">English</option>
    <option value="3">Hindhi</option>
	
  </select><br><br>
    <input type="text" name="cname" placeholder="Channel name" required=" " style="width: 310px;"><br><br>
	 <input type="text" name="cdis" placeholder="Discripition" required=" " style="width: 310px;"><br><br>
	<input type="file" name="icn" id="fileToUpload"><br><br>
	
	
		<input type='submit' name="add" value='Add'>
 </form>

	
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