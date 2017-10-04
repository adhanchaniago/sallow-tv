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
if(isset($_POST['change']))
{
$eml=$_POST["email"];
$mob=$_POST["mob"];
$key = generateRandomString();
$sql="SELECT * FROM `register`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$i=$row['reg_id'];
	$mob=$row['mob_no'];
	$fn=$row['fname'];
	
	?>
	
	<?php
	if($eml==  $row['email']&&$mob==$row['mob_no']&&$row['type_id']=='3')
	     {
		 $_SESSION['email']=$eml;
		 $_SESSION['mob']=$mob;
		 $_SESSION['utype']='3';
		 $_SESSION['id']=$i;
		 
		 $sql1="UPDATE `login` SET `password`='$key' WHERE `reg_id`='$i';";
         $result=mysqli_query($con,$sql1);
		 $msg="Hai $fn, Enjoy your Day with us..!  YOUR NEW PASSWORD: $key, TEARM-SWALLOW";
 send($msg, $mob);
		 header('location:login.php');
		 }
		 elseif($eml==  $row['email']&&$mob==$row['mob_no']&&$row['type_id']=='2')
	     {
		 $_SESSION['email']=$eml;
		 $_SESSION['mob']=$mob;
		 $_SESSION['utype']='2';
		 $_SESSION['id']=$i;
		 
		 $sql1="UPDATE `login` SET `password`='$key' WHERE `reg_id`='$i';";
         $result=mysqli_query($con,$sql1);
		 $msg="Hai $fn, Enjoy your Day with us..!  YOUR NEW PASSWORD: $key, TEARM-SWALLOW";
 send($msg, $mob);
		 header('location:login.php');
		 }
		 else{
		echo "<script>if(confirm('Email id and Mobile number are incorect!!!!')){document.location.href='index.php'}else{document.location.href='register.php'};</script>";
	     }
}
}

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>swallow reset paswd</title>
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
							<li><a href="index.php">Home</a></li>
	 							<li><a href="login.php">Login</a></li>
								
							</ul>
						</nav>
					</div>
				<!-- Header -->

				<!-- Page -->
					
		<section>
		
									
	<div>
<center><form name="fgt" action="change_pswd.php" method="post" id="fpswd"
			style="border:2px solid #DC6180;
                  background-color: #ffc0cb;
						 margin:15px 250px 10px 250px;
						 background-size: cover;
							"><br><br><br>
		
				<header class="major">
				<center><h3 style="color: #ffa500;">Change Password</h3></center>
				
										
		</header>
					  
					 <input type="text" name="email" placeholder="Enter Your email-id" required=" " style="width: 310px;"><br>
					<input type="text" name="mob" placeholder="Enter Mobile Number" required=" " style="width: 310px;"><br>
		</input>
	
	<br>

	
		<input type='submit' name="change" value='Change'><br></form></center>
		</div>

				</section><br><br><br><br>
	
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