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
								<li ><a href="ad_home.php">Home</a></li>
								<li><a href="ad_provider_reg.php">Add Provider</a></li>
								<li><a href="ad_pro_details_edit.php">Provider Details</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
					</div>
				<!-- Header -->

				<!-- Page -->
					
								<section>
									
									<center>
	
<form
style="border:.5px solid #DC6180;
                  background-color: #ffc0cb;
						 margin:1px 50px 10px 20px;
						 background-size: cover;
							"><br><br><br>
			<header class="major">
			<center><h3 style="color: #ffa500;">Provider Details</h3></center>
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
	
	<td>Delete</td>
    
	</tr>
<?php

$results=mysqli_query($con,"SELECT `register`.`reg_id`, `register`.`fname`, `register`.`address`
, `register`.`mob_no`, `register`.`email`
, `register`.`reg_date`, `district`.`dist_name` FROM `register`
,`district` WHERE `register`.`dist_id`=`district`.`dist_id` AND `register`.`type_id`='2';");
while($row=mysqli_fetch_array($results))
	//SELECT `reg_id`, `fname`, `address`, `dist_id`, `pincode`, `mob_no`,
//`email`, `reg_date`, `status`, `d_status`, `username`,
 //`passwd`, `type_id` FROM `register` WHERE 1
{

?>
<tr style="background-color: #fff;  border: 2px solid #4CAF50;">
<!--<td><input name="id" type="id" value="<?php// echo $row['reg_id']; ?>"/></td>-->
<td><input name="name" type="text" value="<?php echo $row['fname']; ?>"/></td>
<td><input name="adrs" type="text" value="<?php echo $row['address']; ?>"/></td>
<td><input name="mob" type="text" value="<?php echo $row['mob_no']; ?>"/></td>
<td><input name="email" type="text" value="<?php echo $row['email']; ?>"/></td>
<td><input name="regdate" type="text" value="<?php echo $row['reg_date']; ?>"/></td>

<td><input name="dist" type="text" value="<?php echo $row['dist_name']; ?>"/></td>


<td><a href="ad_pro_edit.php?tid=<?php echo $row['reg_id'];?>">
<img src="images/delete.png" width="35" height="35" title="dlt" alt="delet"></a></td>
</tr>
<?php } ?>
</table>
					
</form>

	
</div></center>

					
						
					
					
				</section>
	
<div id="footer">
<img src="images/giphy.gif" width="337" height="190"><img src="images/giphy.gif" width="337" ><img src="images/giphy.gif" width="337" ><img src="images/giphy.gif" width="337" >
			
		</div>
	</body>
</html>