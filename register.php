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
$type="3";

/*key*/
$sql11="SELECT `login_id` FROM `login` WHERE `username`='$un'";
$re=mysqli_query($con,$sql11);
$d=mysqli_fetch_array($re);
$id=$d['login_id'];
if($id=="")
{
	

$key = generateRandomString();
$qury="INSERT INTO `register`(`fname`, `address`, `dist_id`, `pincode`, `mob_no`,
 `email`, `reg_date`,  `status`, `d_status`,`type_id`) VALUES
 ('$fn','$ad','$dst','$pin','$mob','$em','$rdate','$stz','$dstz','$type')";
 
 $a=mysqli_query($con,$qury);
 
  
 
 

 $q = "SELECT `reg_id` FROM `register` WHERE `email`= '$em' AND `mob_no`='$mob' ; ";
$result = $con->query($q);
$row = $result->fetch_assoc();
$rid=$row["reg_id"];

$sql1="INSERT INTO `login`(`username`, `password`, `reg_id`, `log_stat`,`type_id`) VALUES('$un','$key','$rid','0','3')";
$result1=mysqli_query($con,$sql1);


 $msg="Hai $fn, Enjoy your Day with us..! YOUR USERNAME: $un, PASSWORD: $key, -TEAM-SWALLOW";
 send($msg, $mob);

}
else
{
	echo "<script>if(confirm('$un already exist please try with another username!!!')){document.location.href='register.php'}else{document.location.href='index.php'};</script>";
}
}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Full Motion</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body id="top">

			<!-- Banner -->

				<section id="banner" data-video="images/diary">
					<div class="inner">
						<header>
							<img src="images1/icn.png" alt="Icon" style="width:128px;height:128px;">
							<h1 >Swallow TV</h1>

							<p>From where it happens, we see it happen.</p><br>
						</header>
						<table  style="color: #fff;
						font-size: 2em;
						font-weight: 200;
						font-family: 'Passion One', cursive;" >
			<tr><td><a  class="links" href="index.php">
	HOME&nbsp|&nbsp
	</a></td>
	<td ><a class="links" href="pack.php">
	PACKAGES&nbsp|&nbsp
	</a></td>
	<td><a class="links" href="contact.php">
	CONTACT US&nbsp|&nbsp
	</a></td>
	 
	<td ><a class="links" href="login.php" >
	LOGIN
	</a></td></tr></table><br><br>
						<a href="#main" class="more">Learn More</a>
						</div>
					</section>

			<!-- Main -->
			
			
			<div id="main">
				<div class="inner">
					<div class='login' >
<div ><center style="color: #fff; background-color:#DC6180;  font-size: 35px; ">Sign In To Your Account</center><br>
</div>
<center>
<form name="signup" action="register.php" method="post" id="form">

<div class='login_fields'>
	<div class='login_fields__user'>

		<input type='text'  name="fname" placeholder='Enter First Name' required="" style="width: 310px;"><br><br>
		<input type='text'  name="uname" placeholder='Enter Username' required="" style="width: 310px;"><br><br>
		<input type="text" name="address" placeholder="Enter Address" required=" " style="width: 310px;"><br><br>

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
        </select> <br><br>
                 <input type="text" name="pin" placeholder="Enter Pincode" required=" " style="width: 310px;"><br><br>
					  <input type="email" name="email" placeholder="Enter Email-id" required=" " style="width: 310px;"><br><br>
					  <input type="text" name="phone" placeholder="Enter Phone No" required=" " style="width: 310px;"><br>
						<!--<input type="text" name="username" placeholder="Username" required=" " style="width: 310px;"><br><br>
					 <input type="text" name="password" placeholder="Password" required=" " style="width: 310px;"><br>-->
		</input>
	</div>

	<div class='login_fields__submit'>
		<input type='submit' name="add" value='sign up' onclick="Confirms()">

	</div>
</div>

</form>

</center>

</div>
</div>
</div>


<!--footer-->
</br></br></br></br></br>
			<!-- Footer -->
			<footer id="footer" >
				<hr style="border-width: 3px; color:#DC6180; ">
				<div class="inner">
					
					<h2 style="font-size: 35px; color: #DC6180;">Swallow TV</h2>
					<p style="color: #DC6180;">From where it happens, we see it happen.</p>
					<center><table  >
		<tr><td><a  style="
			color: #DC6180; text-decoration: none;" href="index.php">
HOME&nbsp&nbsp|&nbsp&nbsp
</a></td>
<td ><a  style="
	color: #DC6180; text-decoration: none;" href="pack.php">
PACKAGES&nbsp&nbsp|&nbsp&nbsp
</a></td>
<td><a  style="
	color: #DC6180; text-decoration: none;" href="contact.php">
CONTACT US&nbsp&nbsp|&nbsp&nbsp
</a></td>
 
<td ><a  style="
	color: #DC6180; text-decoration: none;" href="login.php" >
LOGIN<br>
</a></td></tr></table></center>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
