<?php
include_once 'connect.php'; 
session_start();
$i = $_SESSION['id'];
if(!(isset($_SESSION['user_name'])))
{
	header('location:index.php');
}
$id=$_REQUEST['p_name_id'];
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
								<li><a href="user_packs.php">Suscribe Packages</a></li>
								<li><a href="usr_own_pack_det.php">Your Package</a></li>
								<li><a href="usr_chnls.php">Avilable Channels</a></li>
								<li><a href="change_pswd.php">Change Password</a></li>
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
							
	<br><br>
		<div>
                    <div >
                            <img src="images/paypal.png" alt="Image Alternative text" title="Image Title">
                            <p>Important: You will be redirected to PayPal's website to securely complete your payment.</p>	
                        </div>
						<div>
                        <div >
                            
                                        <label>Card Number</label>
                                        <input name="cno" placeholder="xxxx xxxx xxxx xxxx" type="text"><span></span>
                                    </div>
                                    <div>
                                        <label>CVV</label>
                                        <input  name="ccv" placeholder="xxxx" type="text">
                                    </div>
                                </div>
                                <div >
                                    <div >
                                        <label>Card Holder Name</label>
                                        <input name="hname" type="text">
                                    </div>
                                    
                                </div>
                               
                                <input class="btn btn-primary submit" type="submit" class="submit" value="Proceed Payment">
                           
                        </div>
                    </div>
                        
						</div>
              

	</form></center>

					
						
					
					
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