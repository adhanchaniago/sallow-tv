<?php
include_once 'connect.php'; 
session_start();
$i = $_SESSION['id'];
if(!(isset($_SESSION['user_name'])))
{
	header('location:index.php');
}
$id=$_REQUEST['p_name_id'];
$_SESSION['p_name_id']=$id;
$pk = $_SESSION['p_name_id'];


?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>post packages</title>
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
								<li ><a href="user_home.php">Home</a></li>
								<li ><a href="usr_pro_change_pswd.php">Change Password</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
								
						</nav>
					</div>
				<!-- Header -->

				<!-- Page -->
					
								<section>
									
									<center>
	<div>
<form action="#" method="post" name="avpk"
			style="
                  background-color: #fff;
						 margin:15px 250px 10px 250px;
						background-size: cover;
							">
							
	<header class="major"><br>
	<center><h3>Packages Details</h3></center></header>
		<table style="border-collapse: collapse; text-align: center; width: 300px;   ">
		<?php
		$results=mysqli_query($con,"SELECT `package`.`p_name_id`,`channel`.`c_name`,`channel`.`logo`,`channel`.`discripition` FROM `package`,`pack_name`,`channel`  WHERE `package`.`p_name_id`=`pack_name`.`p_name_id` 
		AND `package`.`channel_id`=`channel`.`channel_id` AND `package`.`p_name_id`=$id;");
while($row=mysqli_fetch_array($results))
	
{

?>



<tr style="border: 0.5px solid #6666;"><td><img src="channel/<?php echo $row['logo'];?>" alt=" " height="75" width="75"></td>
<td><input name="unme" type="text" value="<?php echo $row['c_name']; ?>" readonly /></td></tr>
<!--<tr><td><input name="dist" type="text" value="<?php //echo $row['discripition']; ?>"/></td></tr>-->




<?php } ?><tr><td><br></td></tr>
<!-- <tr><td ><a href="usr_payment.php?p_name_id=<?php echo $row['p_name_id'];?>" >
<img src="images/subscribenow.png" width="150" height="73" title="subs" alt="subs"></a>
</td>
</tr> -->
</table>



<a href="usr_payment.php" >
<img src="images/subscribenow.png" width="150" height="73" title="subs" alt="subs"></a>

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