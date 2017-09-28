<?php
include_once 'connect.php'; 
session_start();
$i = $_SESSION['id'];
if(!(isset($_SESSION['user_name'])))
{
	header('location:index.php');
}

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Left Sidebar - Phase Shift by TEMPLATED</title>
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
								<li><a href="usrhme.php">User Details</a></li>
								<li><a href="usr_own_pack_det.php">Your Package</a></li>
								<li><a href="usr_chnls.php">Avilable Channels</a></li>
								<li><a href="change_pswd.php">Change Password</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
					</div>
				<!-- Header -->

				<!-- Page -->
					
								<section>
									
									<center>
	<div>
<form
			style="border:2px solid #DC6180;
                  background-color: #fff;
						 margin:15px 250px 10px 250px;
						 background-size: cover;
							">
							
	<header class="major">
	<center><h3>Avilable Packages</h3></center></header>
		<table>
		<?php
		$results=mysqli_query($con,"SELECT `p_name_id`, `p_name`, `p_icon` FROM `pack_name` ;");
while($row=mysqli_fetch_array($results))
	
{

?>
<table style="border-collapse: collapse; text-align: center; width: 300px;   border: 3px solid blue;"> 
 <tr><td><input name="pknme" type="text" value="<?php echo $row['p_name'];?>" readonly /></td></tr>
 
<tr><td><img src="package/<?php echo $row['p_icon'];?>" alt=" " height="75" width="75"></td></tr>
<tr><td ><a href="usr_post_pack_det.php?p_name_id=<?php echo $row['p_name_id'];?>" >
<img src="images/more.jpg" width="130" height="53" title="detils" alt="detils"></a>
</td>
</tr>
</table>
<!--<tr style="background-color: #fff;  border: 2px solid #4CAF50;">-->
<!--<tr><td><input name="rid" type="hidden" value="<?php// echo $row['pack_id']; ?>"/></td></tr>-->

<?php } ?></table>

	</form></div>

	
</div></center>

					
						
					
					
				</section>
	
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
	</body>
</html>