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
<form
			style="border:2px solid #DC6180;
                  background-color: #fff;
						 margin:15px 250px 10px 250px;
						 background-size: cover;
							">
							<header class="major">
										<center><h3>Package Details</h3></center>
										
									</header>
									
									<table >

  <tr style="background-color: #4CAF50; color: #fff;">
    
    <td>Package name</td>
	
    <td>Package Icon</td>
	
	<td>Edit</td>
	<td>Delete</td>
    
	</tr>
<?php

$results=mysqli_query($con,"SELECT `p_name_id`, `p_name`, `p_icon` FROM `pack_name`;");
while($row=mysqli_fetch_array($results))
	
{

?>
<tr style="background-color: #fff;  border: 2px solid #4CAF50;">
<!--<td><input name="id" type="" value="<?php// echo $row['p_name_id']; ?>"/></td>-->

<td><input name="ctype" type="text" value="<?php echo $row['p_name']; ?>"/></td>
<td><img src="package/<?php echo $row['p_icon'];?>" alt=" " height="75" width="75"></td>


<td><a href="ad_pro_edit.php?tid=<?php echo $row['p_name_id'];?>" >
<img src="images/edit.png" width="30" height="38" title="edit" alt="edit"></a></td>
<td><a href="ad_pro_edit.php?tid=<?php echo $row['p_name_id'];?>">
<img src="images/delete.png" width="35" height="35" title="dlt" alt="delet"></a></td>
</tr>
<?php } ?>
</table>
							
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