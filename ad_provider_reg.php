<?php

include_once 'connect.php'; 
session_start();
if(isset($_POST['add']))
{
$fn=$_POST["fname"];
$ad=$_POST["address"];
$dst=$_POST["dist"];
$pin=$_POST["pin"];
$mob=$_POST["phone"];
$em=$_POST["email"];
$rdate = date('d/m/y');
$usrname=$_POST["email"];


$stz="0";
$dstz="0";
$ls="0";
$type="2";

/*key*/
function generateRandomString($length = 8) 
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$key = generateRandomString();
$qury="INSERT INTO `register`(`fname`, `address`, `dist_id`, `pincode`, `mob_no`,
 `email`, `reg_date`,  `status`, `d_status`,`type_id`) VALUES
 ('$fn','$ad','$dst','$pin','$mob','$em','$rdate','$stz','$dstz','$type')";
 
 $a=mysqli_query($con,$qury);
 
  
 
 /*$qury1="INSERT INTO `login`(`username`, `password`, `reg_id`, `log_stat`,`type_id`) 
 SELECT `username`, `passwd`, `reg_id`, `status`, `type_id` FROM `register` WHERE `passwd`= '$key'";
 $b=mysqli_query($con,$qury1);*/
 
 /*$q1="UPDATE `login` SET `type_id`='3' WHERE `password`= '$key'";
 $c=mysqli_query($con,$q1);*/

 $q = "SELECT `reg_id` FROM `register` WHERE `email`= '$em' AND `mob_no`='$mob' ; ";
$result = $con->query($q);
$row = $result->fetch_assoc();
$rid=$row["reg_id"];

$sql1="INSERT INTO `login`(`username`, `password`, `reg_id`, `log_stat`,`type_id`) VALUES('$em','$key','$rid','0','2')";
$result1=mysqli_query($con,$sql1);
/*var_dump($a);
die;*/

 
 
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
	<div>
<form name="p_signup" action="ad_provider_reg.php" method="post" id="p_reg"
			style="border:2px solid #DC6180;
                  background-color: #ffc0cb;
						 margin:15px 250px 10px 250px;
						 background-size: cover;
							"><br><br><br>
							<header class="major">
							<center><h3 style="color: #ffa500;">Provider Registration</h3></center>
							</header>
		<input type='text'  name="fname" placeholder='Fname' required="" style="width: 310px; "><br>
		<input type="text" name="address" placeholder="Address" required=" " style="width: 310px;"><br>

		<select name="dist" required="" 
		style="width: 310px;height:60px; 
		color: #000; background-color: #fff;
		border-top: 2px solid #393d52;
  border-bottom: 2px solid #393d52;
  border-right: 2px solid #393d52;
  border-left: 2px solid #393d52;">
			
            <?php
                
                $sql = "SELECT `dist_id`, `dist_name` FROM `district` ;";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) 
                   {
                       while($row = mysqli_fetch_assoc($result)) 
                          {
                              $id=$row["dist_id"];
							  $catname=$row["dist_name"];
            ?>

            <option value="<?php echo $id; ?>"><?php echo $catname;?></option>
                          <?php
						echo $id;  } }?>
        </select><br><br>
                      <input type="text" name="pin" placeholder="Pincode" required=" " style="width: 310px;"><br>
					  <input type="email" name="email" placeholder="Email Address" required=" " style="width: 310px;"><br>
					  <input type="text" name="phone" placeholder="Phone Number" required=" " style="width: 310px;"><br>
						
					
		</input>
	
	<br>

	
		<input type='submit' name="add" value='Register'></form></div>

	
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