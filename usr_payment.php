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
if(isset($_POST['proced']))
{
$si=$_POST["shm"];
/* $_SESSION['scheme_id']=$si;
$s = $_SESSION['scheme_id'];
echo $s; */
	if($si=='Select Scheme')
	     {
		 echo "<script>if(confirm('Pleace select a valid scheme!!!!')){document.location.href='usr_payment.php'}else{document.location.href='user_home.php'};</script>";
		 }
	else
		{
		$_SESSION['scheme_id']=$si;
		header('location:u_trans.php');
		} 
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
                    <header class="major">
							<center><h3 style="color: #ffa500;">select your scheme</h3></center>
							</header>
						<select name="shm" required="" ><option>Select Scheme</option>
			
			
            <?php
                
                $sql = "SELECT `scheme_id`, `no_day`, `p_amt` FROM `scheme` ;";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) 
                   {
                       while($row = mysqli_fetch_assoc($result)) 
                          {
                              $id=$row["scheme_id"];
							  $catname=$row["no_day"];
            ?>

            <option value="<?php echo $id; ?>"><?php echo $catname;?></option>
                          <?php
						echo $id;  } }?>
        </select><br><br> &nbsp <input type='submit' name="proced" value='next'><br><br>
						<!--/* <select name="t_mod" required="" style="width: 310px; border: 0.5px solid blue;">
						    <option>--Select Your Bank--</option>
							<option value="SBI"> &nbsp&nbsp&nbsp&nbsp  SBI &nbsp&nbsp&nbsp&nbsp </option>
							<option value="FEDERAL"> &nbsp FEDERAL &nbsp </option>
							<option value="SIB"> &nbsp&nbsp&nbsp SIB &nbsp&nbsp&nbsp </option></select><br><br>
	<input type="password" name="ccv" placeholder="Enter CCV Number" required=" " style="width: 310px; border: 0.5px solid blue;"><br>
	<input type="text" name="mny" placeholder=""  style="width: 310px; border: 0.5px solid blue;"><br>
		</input>
                               
                               <input type='submit' name="proced" value='Proced Payment'> <br><br> */-->
                           
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