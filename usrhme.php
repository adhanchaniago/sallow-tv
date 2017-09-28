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
								<li><a href="user_packs.php">Suscribe Packages</a></li>
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
		
									
	<div>
<center><form name="udet" action="usrhme.php" method="post" id="regdet"
			style="border:2px solid #DC6180;
                  background-color: #fff;
						 margin:15px 250px 10px 250px;
						 background-size: cover;
							"><br><br><br>
		
				<header class="major">
				<center><h3 style="color: #ffa500;">Welcome <?php echo($_SESSION['user_name'])?></h3></center>
</header>
	


<table style="border-collapse: collapse; text-align: center; width: 300px;   border: .5px solid blue;">

  <tr ><td>
    <img src="images1/usr.png" width="75px" height="70px" alt="usr">
   
    </td>
	</tr>
<?php

$results=mysqli_query($con,"SELECT `register`.`reg_id`, `register`.`fname`, `register`.`address`
, `register`.`mob_no`, `register`.`email`
, `register`.`reg_date`, `district`.`dist_name` FROM `register`
,`district` WHERE `register`.`dist_id`=`district`.`dist_id` AND
 `register`.`reg_id`='$i';");
while($row=mysqli_fetch_array($results))
	
{

?>
<!--<tr style="background-color: #fff;  border: 2px solid #4CAF50;">-->
<tr><td><input name="rid" type="hidden" value="<?php echo $row['reg_id']; ?>"/></td></tr>
<tr><td><input name="unme" type="text" value="<?php echo $row['fname']; ?>" readonly /></td></tr>
<tr><td><input name="adrs" type="text" value="<?php echo $row['address']; ?>" readonly /></td></tr>
<tr><td><input name="dist" type="text" value="<?php echo $row['dist_name']; ?>" readonly /></td></tr>
<!--<tr><td><input name="pin" type="text" value="<?php// echo $row['']; ?>"/></td></tr>-->
<tr><td><input name="email" type="text" value="<?php echo $row['email']; ?>" readonly /></td></tr>
<tr><td><input name="mob" type="text" value="<?php echo $row['mob_no']; ?>"readonly /></td></tr>

<tr><td><input name="rdte" type="text" value="<?php echo $row['reg_date']; ?>"/></td></tr>


<tr><td style="background-color: #449adf;"><a href="ad_pro_edit.php?tid=<?php echo $row['reg_id'];?>" >
<img src="images/edit.png" width="40" height="43" title="edit" alt="edit"></a>
</td>
</tr>
<?php } ?>
</table>

	
</form></center>
		</div>

				</section><br><br><br><br>
	
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