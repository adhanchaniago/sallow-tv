<?php

include_once 'connect.php'; 
session_start();
function send($sms, $to) {
    
        $sms = urlencode($sms);
      
            $url = 'http://sms.safechaser.com/httpapi/httpapi?token=2aecba933a06356672ba5848b9be58ee&sender=salwtv&number='.$to.'&route=2&type=1&sms='.$sms;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 50);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $datares = curl_exec($ch);
        curl_close($ch);
        return $datares;
    }
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
if(isset($_POST['add']))
{
$fn=$_POST["fname"];
$un=$_POST["uname"];
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

$key = generateRandomString();
$qury="INSERT INTO `register`(`fname`, `address`, `dist_id`, `pincode`, `mob_no`,
 `email`, `reg_date`,  `status`, `d_status`,`type_id`) VALUES
 ('$fn','$ad','$dst','$pin','$mob','$em','$rdate','$stz','$dstz','$type')";
 
 $a=mysqli_query($con,$qury);
 
  
 
 

 $q = "SELECT `reg_id` FROM `register` WHERE `email`= '$em' AND `mob_no`='$mob' ; ";
$result = $con->query($q);
$row = $result->fetch_assoc();
$rid=$row["reg_id"];

$sql1="INSERT INTO `login`(`username`, `password`, `reg_id`, `log_stat`,`type_id`) VALUES('$un','$key','$rid','0','2')";
$result1=mysqli_query($con,$sql1);


 $msg="Hai $fn, Enjoy your Day with us..! YOUR USERNAME: $un, PASSWORD: $key ,-TEARM-SALLOW";
 send($msg, $mob);
}
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Provider Reg</title>
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
							<span class="tag">Enjoy Your Days With Sallow.</span>
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
		<input type='text'  name="fname" placeholder='Enter First name' required="" style="width: 310px; "><br>
		<input type='text'  name="uname" placeholder='Enter Username' required="" style="width: 310px;"><br>
		<input type="text" name="address" placeholder="Enter Address" required=" " style="width: 310px;"><br>

		<select name="dist" required="" 
		style="width: 310px;height:60px; 
		color: #000; background-color: #fff;
		border-top: 2px solid #393d52;
  border-bottom: 2px solid #393d52;
  border-right: 2px solid #393d52;
  border-left: 2px solid #393d52;"><option>--Select District--</option>
			
			
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
                      <input type="text" name="pin" placeholder="Enter Pincode" required=" " style="width: 310px;"><br>
					  <input type="email" name="email" placeholder="Enter Email-id" required=" " style="width: 310px;"><br>
					  <input type="text" name="phone" placeholder="Enter Phone no" required=" " style="width: 310px;"><br>
						
					
		</input>
	
	<br>

	
		<input type='submit' name="add" value='Register'></form></div>

	
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