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
								<li><a href="">Avilable Users</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
					</div>
				<!-- Header -->

				<!-- Page -->
					
								<section>
									
									<center>
	
<form name="avil_usr" action="" method="post" "
style="border:.5px solid #DC6180;
                  background-color: #ffc0cb;
						 margin:1px 50px 10px 20px;
						 background-size: cover;
							"><br><br><br>
			<header class="major">
			<center><h3 style="color: #ffa500;">Online Users</h3></center>
			</header>

<table >

  <tr style="background-color: #4CAF50; color: #fff;">
    <!--<td><font color="black">&nbsp;Id</font></td>-->
    <td>First Name</td>
    
    <td>Mobile</td>
	
	
    
	</tr>
<?php

$results=mysqli_query($con,"SELECT `register`.`reg_id`, `register`.`fname`
, `register`.`mob_no` FROM `register`
,`login` WHERE `register`.`reg_id`=`login`.`reg_id` AND `register`.`type_id`='3' AND `login`.`log_stat`='1';");
while($row=mysqli_fetch_array($results))
	
{

?>
<tr style="background-color: #fff;  border: 2px solid #4CAF50;">
<!--<td><input name="id" type="id" value="<?php// echo $row['reg_id']; ?>"/></td>-->
<td><input name="name" type="text" value="<?php echo $row['fname']; ?>" readonly /></td>

<td><input name="mob" type="text" value="<?php echo $row['mob_no']; ?>" readonly /></td>


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