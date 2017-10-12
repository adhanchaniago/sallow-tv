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
$p=$row["password"];
$i=$row["login_id"];
$t=$row["type_id"];
if(isset($_POST['change']))
{
$op=$_POST["oldpswd"];
$np=$_POST["newpswd"];

if($op == $p && $t == '2')
	     {
		
		 $sql1="UPDATE `login` SET `password`='$np' WHERE `login_id`='$i' ";
         $result=mysqli_query($con,$sql1);
		 header('location:pro_home.php');
		 }
		 
		 else{
		echo "<script>if(confirm('your old assword is incorect!!!!')){document.location.href='pro_ch_pswd.php'}else{document.location.href='pro_home.php'};</script>";
	     }
 
}

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>user pack</title>
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
								<li ><a href="pro_home.php">Home</a></li>
								<li ><a href="pro_ch_pswd.php">Change Password</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
					</div>
				<!-- Header -->

				<!-- Page -->
					
								<section>
									
									<center>
	<div>
<form action="#" method="post"
			style=" background-size: cover;">
							
	<header class="major">
	<center><h3>Change Your Password</h3></center></header>
	<input type="text" name="oldpswd" placeholder="Enter Your current password" required=" " style="width: 310px;"><br>
					<input type="text" name="newpswd" placeholder="Enter New password" required=" " style="width: 310px;"><br>
		</input>
	
	<br>

	
		<input type='submit' name="change" value='Change'><br>
		

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