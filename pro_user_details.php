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
		<title>Provider details</title>
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
	
<form
style=" background-size: cover;"><br><br><br>
			<header class="major">
			<center><h3 style="color: #ffa500;">User Details</h3></center>
			</header>

<table >

  <tr style="background-color: #4CAF50; color: #fff;">
    <!--<td><font color="black">&nbsp;Id</font></td>-->
    <td>First Name</td>
    <td>Address</td>
    <td>Mobile</td>
	<td>E-Mail</td>
    <td>Reg_Date</td>

	<td>District</td>
	
    
	</tr>
<?php

$results=mysqli_query($con,"SELECT `register`.`reg_id`, `register`.`fname`, `register`.`address`
, `register`.`mob_no`, `register`.`email`
, `register`.`reg_date`, `district`.`dist_name` FROM `register`
,`district` WHERE `register`.`dist_id`=`district`.`dist_id` AND `register`.`type_id`='3';");
while($row=mysqli_fetch_array($results))
	//SELECT `reg_id`, `fname`, `address`, `dist_id`, `pincode`, `mob_no`,
//`email`, `reg_date`, `status`, `d_status`, `username`,
 //`passwd`, `type_id` FROM `register` WHERE 1
{

?>
<tr style="background-color: #fff;  border: 2px solid #4CAF50;">
<!--<td><input name="id" type="id" value="<?php// echo $row['reg_id']; ?>"/></td>-->
<td><input name="name" type="text" value="<?php echo $row['fname']; ?>" readonly /></td>
<td><input name="adrs" type="text" value="<?php echo $row['address']; ?>" readonly /></td>
<td><input name="mob" type="text" value="<?php echo $row['mob_no']; ?>" readonly /></td>
<td><input name="email" type="text" value="<?php echo $row['email']; ?>" readonly /></td>
<td><input name="regdate" type="text" value="<?php echo $row['reg_date']; ?>" readonly /></td>

<td><input name="dist" type="text" value="<?php echo $row['dist_name']; ?>" readonly /></td>



</tr>
<?php } ?>
</table>
					
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