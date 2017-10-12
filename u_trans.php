<?php
include_once 'connect.php'; 
session_start();
$i = $_SESSION['id'];
if(!(isset($_SESSION['user_name'])))
{
	header('location:index.php');
}

$pk = $_SESSION['p_name_id'];
echo $pk;
$s = $_SESSION['scheme_id'];
echo $s;

$q1 = "SELECT  `p_amt` FROM `scheme` WHERE `scheme_id`='$s' ";
$result1 = $con->query($q1);
$row1 = $result1->fetch_assoc();
$m=$row1["p_amt"];

$usr = $_SESSION['user_name'];
 $q = "SELECT `login_id`, `username`, `password`, `type_id`, `reg_id`, `log_stat` FROM `login` WHERE `username`='$usr' ";
$result = $con->query($q);
$row = $result->fetch_assoc();
$rid=$row["reg_id"];
$rdate = date('d/m/y');

if(isset($_POST['add']))
{
$md=$_POST["t_mod"];
$cd=$_POST["ccv"];
$qury="INSERT INTO `register`(`fname`, `address`, `dist_id`, `pincode`, `mob_no`,
 `email`, `reg_date`,  `status`, `d_status`,`type_id`) VALUES
 ('$fn','$ad','$dst','$pin','$mob','$em','$rdate','$stz','$dstz','$type')";
 
 $a=mysqli_query($con,$qury);
}

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>swallow payment</title>
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
							<span class="tag">Enjoy Your Days With SWallow.</span>
						</div>
						<nav id="nav">
							<ul> <li ><a href="user_home.php">Home</a></li>
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
<form action="#" method="post" name="paymnt"
			style="
                  background-color: #fff;
						 margin:15px 250px 10px 250px;
						 background-size: cover;
							">
							
	<br><br>
		<div>
                    <div >
                            <img src="images/payp.png" alt="paymt" title="p" width="320px">
                         </div>
						 
					<center><h3 style="color: #000;">Amount is : &nbsp <?php echo ( $m ); ?></h3></center><br>
						 
	Select Bank<select name="t_mod" required="" style="width: 100px; border: 0.5px solid blue;">
						    
							<option value="SBI"> &nbsp&nbsp&nbsp&nbsp  SBI &nbsp&nbsp&nbsp&nbsp </option>
							<option value="FEDERAL"> &nbsp FEDERAL &nbsp </option>
							<option value="SIB"> &nbsp&nbsp&nbsp SIB &nbsp&nbsp&nbsp </option></select>		<br><br>		
	
	<input type="password" name="ccv" placeholder="ENTER CCV CODE ******" required=" " style="width: 200px; border: 0.5px solid blue;">
		</input><br>
                               
                               <input type='submit' name="add" value='Proced Payment'> <br><br> 
                           
                        </div>
                    </div>
                        
						</div>
              

	</form></center>

					
						
					
					
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