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
							<ul><li><a href="usrhme.php">Home</a></li>
								<li><a href="user_packs.php">Avilable Packages</a></li>
								<li><a href="usr_chnls.php">Avilable Channels</a></li>
								<li><a href="">Change Password</a></li>
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
										<center><h3>Avilable Packages</h3></center>
										
									</header>
			<table style="border-collapse: collapse; 
			text-align: center; width: 300px;   border: 3px solid blue;">

  <tr ><td>
    <img src="images1/usr.png" width="75px" height="70px" alt="usr">
   
    </td>
	</tr>
<?php

$results=mysqli_query($con,"SELECT `package`.`pack_id`, `pack_name`.`p_name`,`pack_name`.`p_icon`
,`package_scheme`.`scheme_name`,`package_scheme`.`no_day`
,`package_scheme`.`amount`,`channel`.`c_name` FROM `package`
,`package_scheme`,`pack_name`,`channel` WHERE 
`package`.`p_name_id`=`pack_name`.`p_name_id` 
AND `package`.`scheme_id`=`package_scheme`.`scheme_id`
 AND `package`.`channel_id`=`channel`.`channel_id` AND `package`.`status`='0';");
while($row=mysqli_fetch_array($results))
	
{

?>
<!--<tr style="background-color: #fff;  border: 2px solid #4CAF50;">-->
<tr><td><input name="rid" type="hidden" value="<?php echo $row['pack_id']; ?>"/></td></tr>
<tr><td><input name="unme" type="text" value="<?php echo $row['p_name']; ?>"/></td></tr>
<tr><td><img src="channel/<?php echo $row['p_icon'];?>" alt=" " height="75" width="75"></td></tr>
<tr><td><input name="dist" type="text" value="<?php echo $row['scheme_name']; ?>"/></td></tr>

<tr><td><input name="email" type="text" value="<?php echo $row['no_day']; ?>"/></td></tr>
<tr><td><input name="mob" type="text" value="<?php echo $row['amount']; ?>"/></td></tr>
<tr><td><input name="usrn" type="text" value="<?php echo $row['c_name']; ?>"/></td></tr>



<tr><td style="background-color: #449adf;"><a href="ad_pro_edit.php?tid=<?php echo $row['reg_id'];?>" >
<img src="images/edit.png" width="40" height="43" title="edit" alt="edit"></a>
</td>
</tr>
<?php } ?>
</table>
						
									
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