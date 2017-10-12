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
	<div>
<form
style="border:.5px solid #DC6180;
                  background-color: #ffc0cb;
						 margin:1px 50px 10px 20px;
						 background-size: cover;
							"><br><br><br>
			<header class="major">
			<center><h3 style="color: #ffa500;">Channel Details</h3></center>
			</header>

<table >

  <tr style="background-color: #4CAF50; color: #fff;">
    <!--<td><font color="black">&nbsp;Id</font></td>-->
    <td>Channel type</td>
    <td>Channel category</td>
    <td>Channel name</td>
	<td>discripition</td>
    <td>Channel logo</td>
	
	<td>Edit</td>
	<td>Delete</td>
    
	</tr>
<?php

$results=mysqli_query($con,"SELECT `channel`.`channel_id`,
 `channel`.`c_name`, `channel`.`logo`, `channel`.`discripition`,`channel_category`.`category`, 
`channel_type`.`channel_type` FROM `channel`,`channel_category`,
`channel_type` WHERE `channel`.`c_category_id`=`channel_category`.`c_category_id`
 and `channel`.`channel_type_id`=`channel_type`.`channel_type_id` AND `channel`.`status`='0';");
while($row=mysqli_fetch_array($results))
	//SELECT `reg_id`, `fname`, `address`, `dist_id`, `pincode`, `mob_no`,
//`email`, `reg_date`, `status`, `d_status`, `username`,
 //`passwd`, `type_id` FROM `register` WHERE 1
{

?>
<tr style="background-color: #fff;  border: 2px solid #4CAF50;">
<!--<td><input name="id" type="id" value="<?php// echo $row['channel_id']; ?>"/></td>-->
<td><input name="ctype" type="text" value="<?php echo $row['channel_type']; ?>"/></td>
<td><input name="ccat" type="text" value="<?php echo $row['category']; ?>"/></td>
<td><input name="cname" type="text" value="<?php echo $row['c_name']; ?>"/></td>
<td><input name="cdis" type="text" value="<?php echo $row['discripition']; ?>"/></td>
<td><img src="channel/<?php echo $row['logo'];?>" alt=" " height="75" width="75"></td>


<td><a href="ad_pro_edit.php?tid=<?php echo $row['reg_id'];?>" >
<img src="images/edit.png" width="30" height="38" title="edit" alt="edit"></a></td>
<td><a href="ad_pro_edit.php?tid=<?php echo $row['reg_id'];?>">
<img src="images/delete.png" width="35" height="35" title="dlt" alt="delet"></a></td>
</tr>
<?php } ?>
</table>
			
							
</form>
</div>

	
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